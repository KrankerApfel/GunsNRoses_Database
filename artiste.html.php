<?php 
  $title = "Artiste";
  include 'navbar.php';?>

<div class="container" >
  <div class="cadre">
    <a href="#"><button class="button">Effectuer une recherche</button></a>
    <a href="form_artiste.html.php"><button class="button">Ajouter un artiste</button></a>
    <h1>Artistes</h1>
    <p> Vous trouverez ci-dessous la liste des membres de Guns and Roses. Vous pouvez ajouter un artiste manquant
    et modifier ou supprimer les informations sur un artiste déjà présent dans la base de donné.
    </p>
    <p>Guns and Roses est un groupe polymorphe, c'est-à-dire qu'ils ont connus des changements de membres au
      cours de leur existence. Nous ne recensont ici que les membre aillant participer à au moins un album et non
      ceux qui était présent juste pour des lives.
    </p>
  </div>
</div>

<?php include 'artiste_list.php' ?>
<?php include 'footer.php' ?>
</body>
</html>
