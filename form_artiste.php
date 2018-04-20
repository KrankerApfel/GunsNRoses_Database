<html>
<body>
<?php
$title = "Artiste";
include 'navbar.php';
include 'functions.php';
var_dump($_GET);
/*
* TODO Tahina
*/
$row_participe = array();

$tab = array('art_nom', 'art_prenom', 'instrument');

if (valideForm($_GET, $tab)) {
  echo '<div class="container" >
        <div class="cadre">
        ';
        createButton("update",$title,$_GET);
        createButton("delete",$title,$_GET);
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
  if (insertRow($title,$array)) echo "<h2> Tout s'est effectué avec succés !</h2>";
  else 	echo "<h2>Quelque chose a empêché l'insertion dans la  bdd</h2>";
	echo "</ul>";
  echo '</div></div>';

  $row_art['art_pseudo'] = $_GET['art_pseudo'];
  $row_art['art_nom'] = $_GET['art_nom'];
  $row_art['art_prenom'] = $_GET['art_prenom'];
  $row_art['art_datenaissance'] = $_GET['art_datenaissance'];
  $row_art['art_datemort'] = $_GET['art_datemort'];
  $row_art['art_id'] = $_GET['art_id'];
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
