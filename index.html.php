<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <title>Acceuil</title>
</head>
<body>
<?php include 'navbar.php';?>

<div class="container" >
  <div class="cadre">
    <h1>Bienvenue !</h1>
    <p> La base de donnée Guns and Roses regroupe des informations sur les artistes aillant fait parti du
        célèbre groupe. Vous y trouverais également la liste des albums. Vous être libre d'ajouter, modifier
        ou supprimer un poste. <br/>Bonne visite sur notre site !
    </p>

      <button class="button" href="#">Effectuer une recherche</button>
      <a href="form_artiste.html.php"><button class="button">Ajouter un artiste</button></a>
      <a href="form_album.html.php"><button class="button">Ajouter un album</button></a>
  </div>
</div>
<?php include 'footer.php' ?>
</body>
</html>
