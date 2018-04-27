<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>résultats</title>
  </head>
  <body>
    <?php
    $title = "Acceuil"; 
        include 'navbar.php';
        include 'form_list.php'; ?>

    <div class="container">
    <div class="cadre"> 
<?php
    /*---------------------------------------------------------------------
     * Utilisation de la fonction valideForm
     * pour pouvoir afficher le résultat du formulaire
     */
    function valideForm(&$method, $tabCles){
      foreach ($tabCles as $cle) {
        if (!isset($method[$cle]))
          $method[$cle] = '';
        if (!$method[$cle]) 
          $method[$cle] = '';
       }
      return TRUE;
    }


    $tab1 = array('nom','prenom', 'pseudo', 'naissance', 'mort', 'instrument', 'album');
    $tab2 = array('titre','sortie', 'duree', 'producteur', 'label', 'genre');
    if(valideForm($_POST, $tab1)){
      $r1 = "SELECT * FROM artiste WHERE art_nom LIKE '%".$_POST['nom']."%', art_prenom LIKE '%".$_POST['prenom']."%', art_pseudo LIKE '%".$_POST['pseudo']."%', art_dateNaissance LIKE '%".$_POST['naissance']."%', art_dateMort LIKE '%".$_POST['mort']."%', art_instrument LIKE '%".$_POST['instrument']."%'";
    }




    include "connex.php";
    $connexion="host=$dbHost dbname=$dbName user=$dbUser password=$dbPassword";
    $bdd = pg_connect($connexion);
    if (!$bdd) {
      print "<p>Erreur lors de la connexion ...</p>";
      exit;
    }



    $bdd = pg_connect($connexion);
    if (!$bdd) { echo("pb de connection"); }
    else {
      $requete = "$r1";
      $query = pg_query($bdd,$requete);
      if ($query) {
        while($ligne = pg_fetch_row($query)) {
          for ($j=0;$j<count($ligne);$j++) {
            echo("$ligne[$j] ");
          }
          echo("<br />");
        } 
      }
    }


    ?>
</div>
  </div>
<?php include 'footer.php' ?>
  </body>
</html>

