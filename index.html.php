<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <!--Of course there's no escape of my p5.js magic-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.11/p5.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.11/addons/p5.dom.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.11/addons/p5.sound.min.js"></script>
  <!---->
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
      <a href="#"><button class="button">Effectuer une recherche</button></a>
      <a href="form_artiste.html.php"><button class="button">Ajouter un artiste</button></a>
      <a href="form_album.html.php"><button class="button">Ajouter un album</button></a>
  </div>
  </div>

  <div class="container" >
    <div class="cadre">
      <h1>100 musiques à découvrir</h1>
      <p> En bonus, petite compile des meilleures musiques des GnR, mais aussi de ce qu'on pu faire les différents artistes
        dans leurs carrière solo ou avec d'autre groupe. Certains artistes présenté dans cette playliste n'ont jamais réalisé
        d'album avec le groupe mais on partipé à des lives avec eux, ou sont des amis proches. (Attention Slash et Buckethead ont légèrement monopolisé la playlist ❤).
      <p>
      <p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLI-17bZb2mhj4D_ufbwwoWvuC_D4C2Oa6" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </p>
</div>
</div>

<div class="container" >
  <div class="cadre">
    <h1>Histoire du groupe</h1>

</div>
</div>
  <?php include 'footer.php' ?>
</body>
</html>
