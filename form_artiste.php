<html>
<body>
<?php
$title = "Artiste";
include 'navbar.php';
include 'functions.php';
/*
* TODO Tahina
*/

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
