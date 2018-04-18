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
	echo "<h3>Tout s'est effectué avec succés !</h3>";
	echo "<ul>";
	foreach($_GET as $key=> $val) {
    if(! is_array($val)){
  	  echo "<li>";
      if($val =="") $val = "non renseigné";
  	  echo "<b>$key : </b> $val";
      $array["$key"] = $val;
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
  echo '</div></div>';
  insertRow($title,$array);

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
