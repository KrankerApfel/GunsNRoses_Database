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
          return FALSE;
        if (!$method[$cle]) 
          return FALSE;
       }
      return TRUE;
    }


    /*---------------------------------------------------------------------
     * Envoi un message en cas d'erreur de connection à pgsql
     */
    include "connex.php";
    $connexion="host=$dbHost dbname=$dbName user=$dbUser password=$dbPassword";
    $bdd = pg_connect($connexion);
    if (!$bdd) {
      print "<p>Erreur lors de la connexion ...</p>";
      exit;
    }



    $tab1 = array('sortie','duree','genre[]','producteur','label');
    if(valideForm($_POST, $tab1)){
      $r1 = "SELECT * FROM album WHERE alb_sortie = '".$_POST['sortie']."' and alb_duree = '".$_POST['duree']."' and alb_genre = '".$_POST['genre[]']."' and alb_producteur LIKE '%".$_POST['producteur']."%' and alb_label LIKE '%".$_POST['label']."%'";
      if($_POST['titre'] != ''){
        $r1 .= " and alb_titre LIKE '%".$_POST['titre']."%'";
      }
      echo("<p>$r1</p>");
      $query1 = pg_query($bdd,$r1);
      if($query1) {
        echo("<p>Résultats de la recherche: </br ></p>");
        while($ligne = pg_fetch_row($query1)) {
          for ($j=0;$j<count($ligne);$j++) {
            echo("$ligne[$j] ");
          }
          echo("<br />");
        } 
      } else {
        echo("<p>La recherche n'a donné aucun résultat.</p>");
      }
    } else {
        echo("<p>La recherche n'a donné aucun résultat.</p>");
    }




    ?>
</div>
  </div>
<?php include 'footer.php' ?>
  </body>
</html>

