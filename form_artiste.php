<html>
<body>
<?php
$title = "Artiste";
include 'navbar.php';
include 'functions.php';
/*
* TODO Tahina
*/

$tab = array('nom', 'prenom', 'instrument');
$row_art = array( 'art_pseudo' => null,
              'art_nom' => null,
              'art_prenom' => null,
              'art_dateNaissance' => null,
              'art_dateMort' => null);
$row_participe = array();

if (valideForm($_GET, $tab)) {
  echo '<div class="container" >
        <div class="cadre">
        <a href="#"><button class="button">Modifier</button></a>
        <button class="button">Supprimer</button>
        ';
	echo "<h3>Tout s'est effectué avec succés !</h3>";
	echo "<ul>";
	foreach($_GET as $key=> $val) {
	  if(! is_array($val)){
      echo "<li>";
      if($val =="") $val = "non renseigné";
  	  echo "<b>$key :</b> $val";
  	  echo "</li>";
      $array["$key"] = $val;
    }
    else {
      echo"<li><b>$key :</b><ul> ";
      foreach ($val as $type) {
       echo"<li>$type </li>\n";
      }
        echo"</ul></li>";
    }
	}
	echo "</ul>";
  echo '</div></div>';

  $row_art['art_pseudo'] = $_GET['pseudo'];
  $row_art['art_nom'] = $_GET['nom'];
  $row_art['art_prenom'] = $_GET['prenom'];
  $row_art['art_dateNaissance'] = $_GET['naissance'];
  $row_art['art_dateMort'] = $_GET['mort'];
  insertRow('artiste',$row_art);
  
  if(isset($_GET['album']) and is_array($_GET['album'])){
    foreach ($_GET['album'] as $key => $val) {
      $row_participe['alb_id'] = $_GET['album'];
      $row_participe['art_id'] = $_GET[''];
      $row_participe['instrument'] = $_GET[''];      
    }
  }

}
else {
  echo "<p>Vous n'avez pas remplis les champs suivantes : </p><ul>";
  foreach ($tab as $elm) {
    echo "<li>'.$elm.'</li>";
  }
  echo "</ul>";
}

include 'footer.php';
?>
</body>
</html>
