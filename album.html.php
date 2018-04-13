<?php
  $title = "Album";
  include 'navbar.php';?>

<div class="container" >
  <div class="cadre">
    <a href="#"><button class="button">Effectuer une recherche</button></a>
    <a href="form_album.html.php"><button class="button">Ajouter un album</button></a>
    <h1>Discographie</h1>
    <p> Vous trouverez ci-dessous la liste des albums de Guns and Roses trié par ordre alphabétique. Vous pouvez ajouter un album manquant
    et modifier ou supprimer les informations sur un album déjà présent dans la base de donné.
    </p>
    <p>Guns and Roses est un groupe polymorphe, c'est-à-dire qu'ils ont connus des changements de membres au
      cours de leur existence.
    </p>
  </div>
</div>

<?php include 'album_list.php' ?>
<?php include 'footer.php' ?>
</body>
</html>
