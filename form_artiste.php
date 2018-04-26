<html>
<body>
<?php
$title = "Artiste";
include 'navbar.php';
include 'functions.php';
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
  //TODO
  foreach ($_GET as $key => $value) {$row_art["$key"] = $value;}
  if(isset($_GET['album']) and is_array($_GET['album'])){
    foreach ($_GET['album'] as $key => $val) {
      $row_participe['alb_id'] = $_GET['album'];
      $row_participe['art_id'] = $_GET['art_id'];
      $row_participe['instrument'] = $_GET['instrument'];
    }
  }

 if (isset($_GET['art_id'])) {
  if( updateRow('artiste',$row_art))echo "<h2> Tout s'est effectué avec succés !</h2>";
  else 	echo "<h2>Quelque chose a empêché la mise à jour de la  bdd</h2>";
 }
 else{
   if (insertRow('artiste',$row_art)) echo "<h2> Tout s'est effectué avec succés !</h2>";
   else 	echo "<h2>Quelque chose a empêché l'insertion dans la  bdd</h2>";
 }

	echo "</ul>";
  echo '</div></div>';

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
