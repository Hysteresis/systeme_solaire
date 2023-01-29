<?php

    // $url = "https://api.le-systeme-solaire.net/rest/knowncount/planet";
    // $reponse = Connexion_Api::getConnexion($url);
    include_once('./manager/Connexion_Api.php');
    $urlBodies = "https://api.le-systeme-solaire.net/rest/bodies/";
    $reponses = Connexion_Api::getConnexion($urlBodies);
   
    $urlBodies = "https://api.le-systeme-solaire.net/rest/bodies/";
    include_once './manager/Bodies.php';
    $rep = new Bodies();
    $bodies = $rep->get_all_bodies($urlBodies);

    include './vue/asteroid.php';



?>
