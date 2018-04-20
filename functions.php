<?php
function connexion() {
    include "connex.php";
    $strConnex="host=$dbHost dbname=$dbName user=$dbUser password=$dbPassword";
    $ptrDB = pg_connect($strConnex);
    return $ptrDB;
}
function valideForm(&$method, $tabCles) {
    foreach ($tabCles as $cle) {
        if (!isset($method[$cle]))
            return FALSE;
        if (!$method[$cle])
            return FALSE;
        }
	return TRUE;
    }
/**
 * getRowByID
 * NOTE : Si l'élément récupéré est à null, mettre "non renseigné" dans le tableau à la clé correspondante
 * @param string $table
*  @param int $id
 * @return array tableau associatif représentant un enregistrement d'une table passé en paramètre
 * TODO Brice
 */
function getRowByID($table, $id) {
    $ptrDB = connexion();
    $i = substr($table, 0, 3);
    $i .= "_id";
    $query = "SELECT * FROM $table WHERE $i = $1";

    $result = pg_prepare($ptrDB, "reqprep", $query);
    $ptrQuery = pg_execute($ptrDB, "reqprep", array($id));

    if (isset($ptrQuery))
        $resu = pg_fetch_assoc($ptrQuery);

        if (empty($resu))
            $resu =  array("message" => "Identifiant non valide : $id");

    pg_free_result($ptrQuery);
    pg_close($ptrDB);
    
    return $resu;
  }
  /**
   * deleteRowByID
   * @param string $table
  *  @param int $id
   * @return array supprime un enregistrement d'une table passé en paramètre
   * TODO Brice
   */
function deleteRowByID(string $table,int $id) {
    $ptrDB = connexion();
    $i = substr($table, 0, 3);
    $i .= "_id";
    $query = "DELETE FROM $table WHERE $i = $1";

    pg_prepare($ptrDB, "reqprep", $query);

    $ptrQuery = pg_execute($ptrDB, "reqprep", array($id));
    pg_free_result($ptrQuery);
}

  /**
   * createPost
   * Permet de générer un poste artiste ou album
   * TODO : récupéré dans Participe les valeurs instrument,album
   * @param array $tab
   * @return void
   * DONE Tahina
   */
  function createPost(array $tab, $type) {
    if ($type == "artiste" ){
      $ptrDB = connexion();
      $query1="SELECT alb_titre FROM album  "; //écrire requete album de cet artiste
      $query2="SELECT * FROM artiste WHERE art_id = 0"; //écrire requete instrument de cet artiste

      //TODO executer et récupérer

      //-------------------------
      $tab['album'] = "al,al ";
      $tab['instrument'] = "ins1, ins2";
      $tab['description'] ="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";




      $statut =(is_null($tab['art_datemort']))? "vivant":" Mort (".$tab['art_datemort'].")";
      echo '<div class="container" >
            <div class="cadre">
              <button class="button" href="#">Modifier</button>
              <button class="button">Supprimer</button>
                <div class="post">
                <table>';

                echo '
                          <th><h1>'.$tab['art_prenom'].' '.$tab['art_nom'].'</h1></th>
                          <tr><td><b>Pseudo :</b> '.$tab['art_pseudo'].'</tr>
                          <tr><td><b>Date de naissance :</b> '.$tab['art_datenaissance'].'</tr>
                          <tr><td><b>Statut :</b> '.$statut.'</td></tr>
                          <tr><td><b>Instrument :</b>'.$tab['instrument'].'</td></tr>
                          <tr><td><b>Album.s :</b>'.$tab['album'].'</td></tr>
                          <tr><td><p><b>Description : </b>'.$tab['description'].'</p></td></tr>


                          ';
              /*
              BUG : undefined index instrument, album, (table participe) description, image (à définir)
              <tr><td><b>Instrument :</b>'.$tab['instrument'].'</td></tr>
              <tr><td><b>Album.s :</b>'.$tab['album'].'</td></tr>
              <tr><td><p><b>Description : </b>'.$tab['description'].'</p></td></tr>
              */

    }
    else if ($type == "album"){
      echo '<div class="container" >
            <div class="cadre">
              <button class="button" href="#">Modifier</button>
              <button class="button">Supprimer</button>
                <div class="post">
                <table>';

            echo'
                      <th><h1>'.$tab['alb_titre'].'</h1></th>
                      <tr><td><b>Sortie :</b>'.$tab['alb_sortie'].'</tr>
                      <tr><td><b>Durée :</b>'.$tab['alb_duree'].'</tr>
                      <tr><td><b>Producteur :</b>'.$tab['alb_producteur'].'</td></tr>
                      <tr><td><b>Label :</b>'.$tab['alb_label'].'</td></tr>
                      <tr><td><b>Genre :</b>'.$tab['alb_genre'].'</td></tr>
                      <tr><td><p><b>Description : </b>'.$tab['description'].'</p></td></tr>';
    }
    echo '    </table>
              <br/><img src="img/slash.jpg">
            </div>
          </div>
      </div>';
  }

    /**
     * insertRow
     * Permet d'insérer un nouvelle enregistrement dans une table choisit en paramètre
     * @param string $table
     * @param array $row
     * @return boolean si oui ou non l'insertion à fonctionnée
     * TODO Abdelaziz
     */
  function insertRow(string $table,array $row){
      $ptrBD = connexion();/*
        $query = "INSERT INTO artiste VALUES(";
      foreach ($row as $key => $val) {
        query.="'$val'";
      }*/
      if($table == "artiste"){
        $query = "INSERT INTO artiste VALUES ('"
        .$row['art_pseudo']."','"
        .$row['art_nom']."','"
        .$row['art_prenom']."','"
        .$row['art_datenaissance']."','"
        .$row['art_datemort']."');";
        pg_prepare($ptrDB, "reqprep1", $query);
        $ptrQuery = pg_execute($ptrDB, "reqprep1", array());/*TODO ajouter une requete qui recupere l'id de l'artiste q'on vient d'inserer pour pouvoir le retourner et l'utiliser dans l'autre fichier(form_artiste)
        pour etablir une relation participe 
         */
        return true;
      }
      else if( $table== "album"){
        $query = "INSERT INTO album VALUES ('"
        .$row['alb_titre']."','"
        .$row['alb_sortie']."','"
        .$row['alb_duree']."','"
        .$row['alb_genre']."','"
        .$row['alb_galb_producteurenre']."','"
        .$row['alb_label']."');";
        pg_prepare($ptrDB, "reqprep2", $query);
        $ptrQuery = pg_execute($ptrDB, "reqprep2", array());
        return true;
      }
      else if( $table== "participe"){
        $query = "INSERT INTO participe VALUES ("
        .$row['alb_id'].","
        .$row['art_id'].",'"
        .$row['instrument']."');";
        pg_prepare($ptrDB, "reqprep3", $query);
        $ptrQuery = pg_execute($ptrDB, "reqprep3", array());
        return true;
      }
      return false;
    }

    /**
     * updateRow
     * Permet de mettre à jour un enregistrement dans une table choisit en paramètre
     * @param string $table
     * @param array $row
     * @return boolean si oui ou non la mise à jour à fonctionnée
     * TODO Abdelaziz
     */
  function updateRow(string $table,array $row)  {
      $ptrDB = connexion();
    if ($table == "artiste") {
      $query = "UPDATE artiste SET 
          art_id = ".$row['art_id'].
      " ,'art_pseudo = ".$row['art_pseudo'].
      "','art_nom = ".$row['art_nom'].
      "','art_prenom = ".$row['art_prenom'].
      "','art_datenaissance = ".$row['art_datenaissance'].
      "','art_datemort = '".$row['art_datemort']."'
       WHERE art_id = ".$row['art_id']." ;";
      pg_prepare($ptrDB, "reqprep4", $query);
      $ptrQuery = pg_execute($ptrDB, "reqprep4", array());
    }
    else if ($table == "album") {
      $query = "UPDATE album SET 
          alb_id = ".$row['alb_id'].
      " ,'alb_titre = ".$row['alb_titre'].
      "','alb_sortie = ".$row['alb_sortie'].
      "','alb_duree = ".$row['alb_duree'].
      "','alb_genre = ".$row['alb_genre'].
      "','alb_producteur = ".$row['alb_producteur'].
      "','alb_label = '".$row['alb_label']."'
       WHERE alb_id = ".$row['alb_id']." ;";
      pg_prepare($ptrDB, "reqprep5", $query);
      $ptrQuery = pg_execute($ptrDB, "reqprep5", array());
    }
    else if ($table == "participe") {
      $query = "UPDATE participe SET 
          alb_id = ".$row['alb_id'].
      " ,art_id = ".$row['alb_titre'].
      ",'instrument = ".$row['alb_sortie']."'
       WHERE art_id = ".$row['art_id']." ;";
      pg_prepare($ptrDB, "reqprep6", $query);
      $ptrQuery = pg_execute($ptrDB, "reqprep6", array());
    }
    return false;
  }

 ?>
