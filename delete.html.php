<?php
  if (substr(key($_GET), 0, 3) == "alb") $title = "Album" ;
  else $title = "Artiste";
  include 'navbar.php';
  include 'functions.php'
  ?>

<div class="container" >
  <div class="cadre">
    <h1>Voulez vous vraiment supprimer ce registre ?</h1>

    <?php
          var_dump($_GET);
          $param = "";
          foreach ($_GET as $key => $value) {
              $param .= ''.$key.'='.$_GET["$key"].'&amp;';
           }

           echo '<a href="delete.php?'.$param.'"><button class ="button">Oui, je supprime</button></a>';
    ?>

  </div>
</div>

<?php include 'footer.php' ?>
</body>
</html>
