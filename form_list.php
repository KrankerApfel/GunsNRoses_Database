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
             foreach ($ligne as $elm) {array_push($tab, "".$elm."");}
           }
         }

        echo "<ul  style ='list-style-type : upper-roman'>";
        $str = "";
        foreach ($tab as $title) {
          $str .= '<li><input type="checkbox" name="album[]" value="'.$title.'"';

          if(isset($_GET['album'])){
            $TAB = explode(",",$_GET['album']);
            //var_dump($TAB);
            foreach ($TAB as $value) {
              if($value === $title) $str .= ' checked';
            }
          }

          $str .= ' > '.$title.' </li>';
        }
        echo $str;
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
      $str ="";
      foreach ($tab as $style) {
        $str.= '<li><input type="checkbox" name="alb_genre[]" value="'.$style.'"';
        if(isset($_GET['alb_genre'])){
          $TAB = explode(",",$_GET['alb_genre']);
          foreach ($TAB as $value) {
            if($style === $value." " || $style === " ".$value." ") $str .= ' checked';
          }
        }
        $str .= ' > '.$style.' </li>';
      }
      echo  $str."\n</ul>";
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
             foreach ($ligne as $elm) {array_push($tab, "".$elm);}
           }
         }
       }


      foreach ($tab as $instrument) {
        $str = '<option value='.$instrument.' name='.$instrument;
        if(isset($_GET['instrument']) && $instrument === $_GET['instrument']) $str .= ' selected';
        $str .=' >'.$instrument.'</option>';
        echo $str;
      }
    }
?>
