<?php
echo("Nom : ".$_GET['nom']);
echo(" <br /> \n");
echo("Prénom : ".$_GET['prenom']);
echo(" <br /> \n");
echo("Ville : ".$_GET['ville']);
echo("<br />\n");

if (isset($_GET['musique']) and is_array($_GET['musique'])) {
 $musique = $_GET['musique'];
 echo("Styles musicaux:<ul>");
 foreach($musique as $elem) {
   echo("<li> $elem </li>\n");
 }
 echo("</ul>\n");
}
echo("<br />\n");
echo("Tranche d'âge : ".$_GET['age']);
?>
