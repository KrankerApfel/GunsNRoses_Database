<?php
  $sub = substr(key($_GET), 0, 3);
  if ($sub == "alb") $title = "Album" ;
  else $title = "Artiste";
  include 'navbar.php';
  include 'functions.php';

  ?>

<div class="container" >
  <div class="cadre">
    <h1>Résultat</h1>
    <?php
        if (deleteRowByID($title,$_GET["$sub".'_id'])) {
          echo "<h3>Tout s'est effectué avec succès</h3>";
        }
        else {
          echo "<h3>Quelques chose a empêché la suppression de l'enregistrement</h3>";
        }

    ?>

  </div>
</div>

<?php include 'footer.php' ?>
</body>
</html>
