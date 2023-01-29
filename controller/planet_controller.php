<?php

    include_once('./manager/Connexion_Api.php');
    $url = "https://api.le-systeme-solaire.net/rest/knowncount/planet";
    $reponse = Connexion_Api::getConnexion($url);

    $urlBodies = "https://api.le-systeme-solaire.net/rest/bodies/";
    include_once './manager/Bodies.php';
    $rep = new Bodies();
    $bodies = $rep->get_all_bodies($urlBodies);


    include './vue/planet.php';

?>
