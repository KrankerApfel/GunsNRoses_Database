<html>
<body>
<link rel="stylesheet" href="css/style.css" type="text/css"/>
<?php
include 'navbar.php';
include 'functions.php';
/*
* TODO Tahina
*/

$tab = array('sortie', 'titre', 'duree');

if (valideForm($_GET, $tab)) {
  echo '<div class="container" >
        <div class="cadre">
        <a href="#"><button class="button">Modifier</button></a>
        <button class="button">Supprimer</button>
        ';
	echo "<h3>Tout s'est effectué avec succés !<h3>";
	echo "<ul>";
	foreach($_GET as $key=> $val) {
	  echo "<li>";
    if($val =="") $val = "non renseigné";
	  echo "$key: $val";
    $array["$key"] = $val;
	  echo "</li>";
	}
	echo "</ul>";
  echo '</div></div>';
  //insertRow($array);

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
