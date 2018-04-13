<?php
/*
* TODO Tahina
* Ecrire une boucle qui créer tout les postes
* de tout les enregistrement de la BDD avec
* les fonctions createPost() et getRowByID()
*/
include 'functions.php';
$type = "album";
$line = [
    "alb_titre" => "Chinese Democracy",
    "alb_sortie" => "11.06.1997",
    "alb_duree" => "11:00:00",
    "alb_producteur" => "producteur",
    "alb_label" => "label",
    "alb_genre" => "genre de musique",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    "image" => "img/chinese_democracy.png",
    ];

    $ptrDB = connexion();
    if(!$ptrDB){ echo "ERROR : Database connexion fail ! ";}
    else{
        $ptrQuery = pg_query($ptrDB,"SELECT alb_id FROM album ORDER BY alb_titre");

        if ($ptrQuery) {
          $id_list = array();
           while($row = pg_fetch_row($ptrQuery)) {
             foreach ($row as $elm) {array_push($id_list, $elm);}
           }
         }


          foreach ($id_list as $id) {
            createPost(getRowByID($type,$id), $type);
          }

    }

 ?>
