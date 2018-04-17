<?php
  $title = "Acceuil";
  include 'navbar.php';?>

<div class="container" >
  <div class="cadre">
    <h1>Voulez vous vraiment supprimer ce registre ?</h1>
    <?php createPost(getRowByID("artiste",$_GET['art_id']), $type); ?>

  </div>
</div>

<?php include 'footer.php' ?>
</body>
</html>
