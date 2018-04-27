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
        include 'form_list.php';
        include 'functions.php';?>

    <div class="container">
    <div class="cadre">
<?php

  
    $bdd = connexion();
    if (!$bdd) {
      print "<p>Erreur lors de la connexion ...</p>";
      exit;
    }



    $tab1 = array('nom','prenom');
    if(valideForm($_POST, $tab1)){
      $r1 = "SELECT * FROM artiste WHERE art_nom LIKE '%".$_POST['nom']."%' and art_prenom LIKE '%".$_POST['prenom']."%'";
      if($_POST['pseudo'] != ''){
        $r1 .= " and art_pseudo LIKE '%".$_POST['pseudo']."%'";
      }
      if($_POST['naissance'] != ''){
        $r1 .= " and art_dateNaissance LIKE '%".$_POST['naissance']."%'";
      }
      if($_POST['mort'] != ''){
        $r1 .= " and art_dateMort LIKE '%".$_POST['mort']."%'";
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
