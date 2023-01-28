<?php

    $url = "https://api.le-systeme-solaire.net/rest/knowncount/planet";
    $reponse = Connexion_Api::getConnexion($url);

    $urlBodies = "https://api.le-systeme-solaire.net/rest/bodies/";
    include_once './manager/Bodies.php';
    $rep = new Bodies();
    $bodies = $rep->get_all_bodies($urlBodies);

    // $rep = Connexion_Api::getConnexion($urlBodies);
    include './vue/planet.php';



?>
