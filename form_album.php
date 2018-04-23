<html>
<body>
<?php
  $title = "Album";
include 'navbar.php';
include 'functions.php';
/*
* TODO Tahina
*/

$tab = array('alb_sortie', 'alb_titre');

if (valideForm($_GET, $tab)) {
  echo '<div class="container" >
        <div class="cadre">
        ';
        createButton("update",$title,$_GET);
        createButton("delete",$title,$_GET);
	echo "<h3>Donées transmisent : </h3>";
	echo "<ul>";
	foreach($_GET as $key=> $val) {
    if(! is_array($val)){
  	  echo "<li>";
      if($val =="") $val = "non renseigné";
  	  echo "<b>$key : </b> $val";
  	  echo "</li>";
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
  foreach ($_GET as $key => $value) {$row_alb["$key"] = $value;}
  if (insertRow('album',$row_alb)) echo "<h2> Tout s'est effectué avec succés !</h2>";
  else 	echo "<h2>Quelque chose a empêché l'insertion dans la  bdd</h2>";
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
