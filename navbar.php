<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.11/p5.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.11/addons/p5.dom.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.11/addons/p5.sound.min.js"></script>
	<script src="js/script1.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<div class="logo_home">
	   <p id="header"></p>
    </div>
	<div class="navbar">
		<?php
		$tab = array("Acceuil"=>"","Artiste"=>"","Album"=>"");
		$tab[$title] = "active";
		?>
	<ul>
		<li><a class=<?php echo ("'".$tab["Acceuil"]."'");?> href="index.html.php">Acceuil</a></li>
	    <li><a class=<?php echo ("'".$tab["Artiste"]."'");?> href="artiste.html.php">Artiste</a></li>
	    <li><a class=<?php echo ("'".$tab["Album"]."'");?> href="album.html.php">Album</a></li>
	</ul>
	</div>