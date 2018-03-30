<?php
function connexion(string $dbHost, string $dbName, string $dbUser, string $dbPassword) {
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
 * @param string $table
*  @param string $id
 * @return array tableau associatif représentant un enregistrement d'une table passé en paramètre
 * TODO Brice
 */
function getRowByID(string $table,string $id) {return true;}
  /**
   * deleteRowByID
   * @param string $table
  *  @param string $id
   * @return array supprime un enregistrement d'une table passé en paramètre
   * TODO Brice
   */
function deleteRowByID(string $table,string $id) {return true;}

  /**
   * createPost
   * Permet de générer un poste artiste ou album
   * @param array $tab
   * @return void
   * DONE Tahina
   */
  function createPost(array $tab, $type) {
    if ($type == "artiste" ){
      $statut =($tab['art_dateMort'] != "none")?$tab['art_dateMort']: "vivant";
      echo '<div class="container" >
            <div class="cadre">
              <button class="button" href="#">Modifier</button>
              <button class="button">Supprimer</button>
                <div class="post">
                <table>';

                echo '
                          <th><h1>'.$tab['art_prenom'].' '.$tab['art_nom'].'</h1></th>
                          <tr><td><b>Pseudo :</b> '.$tab['art_pseudo'].'</tr>
                          <tr><td><b>Date de naissance :</b> '.$tab['art_dateNaissance'].'</tr>
                          <tr><td><b>Statut :</b> '.$statut.'</td></tr>
                          <tr><td><b>Instrument :</b>'.$tab['art_instrument'].'</td></tr>
                          <tr><td><b>Album.s :</b>'.$tab['album'].'</td></tr>
                          <tr><td><p><b>Description : </b>'.$tab['description'].'</p></td></tr>';

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
              <br/><img src="'.$tab['image'].'">
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
  function insertRow(string $table,array $row){return true;}

    /**
     * updateRow
     * Permet de mettre à jour un enregistrement dans une table choisit en paramètre
     * @param string $table
     * @param array $row
     * @return boolean si oui ou non la mise à jour à fonctionnée
     * TODO Abdelaziz
     */
  function updateRow(string $table,array $row)  {return true;}


 ?>
