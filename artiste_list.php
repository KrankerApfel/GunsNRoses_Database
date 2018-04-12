<?php
/*
* TODO Tahina
* Ecrire une boucle qui créer tout les postes
* de tout les enregistrement de la BDD avec
* les fonctions createPost() et getRowByID()
*/
include 'functions.php';
$type = "artiste";
$line = [
    "art_nom" => "Hudson",
    "art_prenom" => "Saul",
    "art_pseudo" => "Slash",
    "art_dateNaissance" => "11.06.1997",
    "art_dateMort" => null,
    "art_instrument" => "guitare",
    "album" => "album1 album2",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    "image" => "img/slash.jpg",
    ];

    createPost(getRowByID("artiste",1), $type);

    createPost($line, $type);
    createPost($line, $type);
    createPost($line, $type);
    createPost($line, $type);


 ?>
