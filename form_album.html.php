<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
	<title>Formulaire - album</title>
</head>
<body>
  <?php  $title = "Album";
        include 'navbar.php';
        include 'form_list.php';
  ?>

  <div class="container">
    <div class="cadre">
      <form action="form_album.php" method="get" id="alb_form">
          <table>
            <tr>
              <th>Titre*</th>
              <td><input type="text" name="alb_titre" width="50%" required
                <?php if(isset($_GET['alb_titre'])) echo 'value="'.$_GET['alb_titre'].'"';  ?>
                >
              </td>
              <td rowspan="8" style="padding-left:4% ;"><img src="img/noImg.png" alt="placeholder">
              </td>
            </tr>

            <tr>
              <th>Sortie*</th>
              <td><input name="alb_sortie" type="date"required
                <?php if(isset($_GET['alb_sortie'])) echo 'value="'.$_GET['alb_sortie'].'"';  ?>
                ></td>
            </tr>

            <tr>
              <th>Durée*</th>
              <td><input type="time" step="2" name="alb_duree" width="50%"
                  <?php if(isset($_GET['alb_duree'])) echo 'value="'.$_GET['alb_duree'].'"';  ?>
                ></td>
            </tr>

            <tr>
              <th>Producteur</th>
              <td><input type="text" name="alb_producteur" width="50%"
                <?php if(isset($_GET['alb_producteur'])) echo 'value="'.$_GET['alb_producteur'].'"';  ?>
                ></td>
            </tr>

            <tr>
              <th>Label</th>
              <td><input type="text" name="alb_label" width="50%"
                <?php if(isset($_GET['alb_label'])) echo 'value="'.$_GET['alb_label'].'"';  ?>

                ></td>
            </tr>

            <tr>
              <th>Genre</th>
              <td><?php displayMusicStyle()?></td>
            </tr>

            <tr>
              <th>Description</th>
              <td><textarea rows="4" cols="50" name="description">
                <?php if(isset($_GET['description'])) echo ''.$_GET['description'].'';
                else echo "Quelque mot à propos de l'artiste...";
                  ?>
                </textarea></td>
            </tr>
          </table>

          <input class="button" type="submit" name="enregistrement" value="Envoyer">
          <input  class="button" type="reset" name="annuler" value="Annuler">
          <input type="file" id="file" style="display: none;" />
          <input class="button" type="button" value="Charger une image" title="importe importe une image" onclick="document.getElementById('file').click();" />

      </form>

    </div>
  </div>
<?php include 'footer.php' ?>
</body>
</html>
