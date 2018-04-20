<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
	<title>Recherche</title>
</head>
<body>
  <script src="js/script1.js"></script>

  <?php $title = "Acceuil";
        include 'navbar.php';
        include 'form_list.php'; ?>
  <div class="container">
    <div class="cadre">

      <form action="recherche.html.php" method="get" id="1">
          <h2>Je recherche:</h2>
          <table>
            <td>
              <input onclick="myFunction1()" class="button" type="button" name="opBinaire" value="Artiste"/>
              <input onclick="myFunction2()" class="button" type="button" name="opBinaire" value="Album"/></td>
          </table>
      </form>

      <script type="text/javascript">
        function myFunction1() {
          var x = document.getElementById("2");
          var y = document.getElementById("3");
          if (x.style.display === "none") {
            x.style.display = "block";
              if(y.style.display !== "none")
                y.style.display = "none";
          }
        }
        function myFunction2() {
          var x = document.getElementById("3");
          var y = document.getElementById("2");
          if (x.style.display === "none") {
            x.style.display = "block";
            if(y.style.display !== "none")
                y.style.display = "none";
          }
        }
      </script>

      <form action="resultat.php" method="get" id="2" style="display: none">
          <table>
            <tr>
              <th>Nom</th>
              <td><input type="text" name="nom" width="50%"></td>
            </tr>
            <tr>
              <th>Prénom</th>
              <td><input type="text" name="prenom" width="50%"></td>
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
              <th>Instrument</th>
              <td>
                <select size="3" name="instrument">
                  <?php displayInstrument(); ?>
                </select>
              </td>
            </tr>
            <tr>
              <th>Album.s</th>
              <td><?php displayAlbumsTitles();?></td>
            </tr>
            </table>
              <input class="button" type="submit" name="enregistrement" value="Envoyer">
              <input  class="button" type="reset" name="annuler" value="Annuler">
              <input type="file" id="file" style="display: none;" />
      </form>


      <form action="resultat.php" method="get" id="3" style="display: none">
          <table>
            <tr>
              <th>Titre</th>
              <td><input type="text" name="titre" width="50%"></td>
              </td>
            </tr>
            <tr>
              <th>Sortie</th>
              <td><input name="sortie" type="date"></td>
            </tr>
            <tr>
              <th>Durée</th>
              <td><input type="time" step="2" name="duree" width="50%"></td>
            </tr>
            <tr>
              <th>Producteur</th>
              <td><input type="text" name="producteur" width="50%"></td>
            </tr>
            <tr>
              <th>Label</th>
              <td><input type="text" name="label" width="50%"></td>
            </tr>
            <tr>
              <th>Genre</th>
              <td><?php displayMusicStyle()?></td>
            </tr>
            </table>
              <input class="button" type="submit" name="enregistrement" value="Envoyer">
              <input  class="button" type="reset" name="annuler" value="Annuler">
              <input type="file" id="file" style="display: none;" />
      </form>



    </div>
  </div>
<?php include 'footer.php' ?>
</body>
</html>
