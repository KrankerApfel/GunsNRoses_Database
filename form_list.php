<?php
//TODO récupérer la liste des titre dans une requête PGSQL
    function displayAlbumsTitles() {
      $tab = array ("Appetite for destruction","G N R Lies","Use your illusion I","Use your illusion II","The Spaghetti Incident?","Chinese Democracy");
      foreach ($tab as $title) {
        echo '<input type="checkbox" name="album[]" value="'.$title.'"> '.$title.'';
      }
    }

    function displayMusicStyle() {
      $tab = array ("Hard rock","Heavy metal","Punk","Glam rock","Blues rock");
      foreach ($tab as $style) {
        echo '<input type="checkbox" name="genre[]" value="'.$style.'"> '.$style.' ';
      }
    }

    function displayInstrument() {
      $tab = array ("Batterie","Chant","Guitare solo","Guitare rythmique","Claviers","Basse","Troisième guitare");
      foreach ($tab as $instrument) {
        echo '<option value='.$instrument.' name='.$instrument.'>'.$instrument.'</option>';
      }
    }
?>
