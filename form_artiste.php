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
