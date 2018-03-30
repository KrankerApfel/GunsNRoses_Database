<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css" type="text/css" />
	<title>Formulaire - album</title>
</head>
<body>
  <?php include 'navbar.php';?>
  <div class="container">
    <div class="cadre">
      <form action="form_artiste.php" method="get" id="alb_form">
          <table>
            <tr>
              <th>Titre</th>
              <td><input type="text" name="titre" width="50%" required></td>
              <td rowspan="8" style="padding-left:4% ;"><img src="img/noImg.png" alt="placeholder">
              </td>
            </tr>

            <tr>
              <th>Sortie</th>
              <td><input name="sortie" type="date"></td>
            </tr>

            <tr>
              <th>Durée</th>
              <td><input type="text" name="titre" width="50%" required></td>
            </tr>

            <tr>
              <th>Producteur</th>
              <td><input type="text" name="producteur" width="50%" required></td>
            </tr>

            <tr>
              <th>Label</th>
              <td><input type="text" name="label" width="50%"></td>
            </tr>

            <tr>
              <th>Genre</th>
              <td>
                    <input type="radio" name="genre" value="vivant"> Heavy metal
                    <input type="radio" name="genre" value="mort"> Rock
              </td>
            </tr>

            <tr>
              <th>Description</th>
              <td><textarea rows="4" cols="50" name="description" form="art_form">Quelque mot à propos de l'artiste...</textarea></td>
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
