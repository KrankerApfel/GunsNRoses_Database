<?php
include "functions.php";
//TODO récupérer la liste des titre dans une requête PGSQL
    function displayAlbumsTitles() {
      $ptrDB = connexion();

      if(!$ptrDB){ echo "ERROR : Database connexion fail ! ";}
      else {

        $requete = "SELECT alb_titre FROM album ORDER BY alb_sortie";
        $ptrQuery = pg_query($ptrDB,$requete);
        $tab = array ();

        if ($ptrQuery) {
           while($ligne = pg_fetch_row($ptrQuery)) {
             foreach ($ligne as $elm) {array_push($tab, "".$elm." ");}
           }
         }

        echo "<ul  style ='list-style-type : upper-roman'>";
        foreach ($tab as $title) {
          echo '<li><input type="checkbox" name="album[]" value="'.$title.'"> '.$title.'  </li>';
        }
        echo "</ul'>";
      }
    }

    function displayMusicStyle() {
      $ptrDB = connexion();

      if(!$ptrDB){ echo "ERROR : Database connexion fail ! ";}
      else {

        $requete = "SELECT alb_genre FROM album";
        $ptrQuery = pg_query($ptrDB,$requete);
        $tab = array ();

        if ($ptrQuery) {
           while($ligne = pg_fetch_row($ptrQuery)) {
             foreach ($ligne as $elm) {
               $t = explode(",",$elm);
               foreach ($t as $val) {array_push($tab, "".$val." ");}
             }
           }
         }
       }
      // suppression des doublons
      $tab = array_unique($tab);
      echo "<ul  style ='list-style-type : none'>";
      foreach ($tab as $style) {
        echo '<li><input type="checkbox" name="genre[]" value="'.$style.'"> '.$style.' </li>';
      }
      echo "</ul>";
    }

    function displayInstrument() {
      $ptrDB = connexion();

      if(!$ptrDB){ echo "ERROR : Database connexion fail ! ";}
      else {

        $requete  = " SELECT DISTINCT instrument FROM Participe ORDER BY instrument";
        $ptrQuery = pg_query($ptrDB,$requete);
        $tab = array ();

        if ($ptrQuery) {
           while($ligne = pg_fetch_row($ptrQuery)) {
             foreach ($ligne as $elm) {array_push($tab, "".$elm." ");}
           }
         }
       }


      foreach ($tab as $instrument) {
        echo '<option value='.$instrument.' name='.$instrument.'>'.$instrument.'</option>';
      }
    }
?>
