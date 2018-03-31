<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
	<title>Formulaire - artiste</title>
</head>
<body>
  <script src="js/script1.js"></script>
  <?php include 'navbar.php';
        include 'form_list.php'; ?>
  <div class="container">
    <div class="cadre">
      <form action="form_artiste.php" method="get" id="art_form">
          <table>
            <tr>
              <th>Nom*</th>
              <td><input type="text" name="nom" width="50%" required></td>
              <td rowspan="8" style="padding-left:4% ;"><img src="img/noImg.png" alt="placeholder">
              </td>
            </tr>

            <tr>
              <th>Prénom*</th>
              <td><input type="text" name="prenom" width="50%" required></td>
            </tr>

            <tr>
              <th>Pseudo</th>
              <td><input type="text" name="pseudo" width="50%"></td>
            </tr>

            <tr>
              <th>Naissance</th>
              <td><input name="naissance" type="date"></td>
            </tr>

            <tr>
              <th>Mort</th>
              <td>
                    <input name="mort" type="date">
              </td>
            </tr>

            <tr >
              <th>Instrument*</th>
        			<td>
                <select size="3" name="instrument" required>
                  <?php displayInstrument(); ?>
                </select>
        			</td>
        		</tr>

            <tr>
              <th>Album.s</th>
              <td><?php displayAlbumsTitles();?></td>
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
