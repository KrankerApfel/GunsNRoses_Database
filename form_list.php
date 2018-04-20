<?php
include "functions.php";
//TODO récupérer la liste des titre dans une requête PGSQL
    function displayAlbumsTitles() {
      $ptrDB = connexion();

      if(!$ptrDB){ echo "ERROR : Database connexion fail ! ";}
      else {

        $requete = "SELECT alb_titre FROM album";
        $ptrQuery = pg_query($ptrDB,$requete);
        $tab = array ();

        if ($ptrQuery) {
           while($ligne = pg_fetch_row($ptrQuery)) {
             foreach ($ligne as $elm) {array_push($tab, "".$elm." ");}
           }
         }

        foreach ($tab as $title) {
          echo '<input type="checkbox" name="album[]" value="'.$title.'"> '.$title.'';
        }
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
      foreach ($tab as $style) {
        echo '<input type="checkbox" name="genre[]" value="'.$style.'"> '.$style.' ';
      }
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
