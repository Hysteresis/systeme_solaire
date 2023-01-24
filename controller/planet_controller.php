<?php

    $url = "https://api.le-systeme-solaire.net/rest/knowncount/planet";
    $reponse = Connexion_Api::getConnexion($url);


    $urlBodies = "https://api.le-systeme-solaire.net/rest/bodies/";
    $rep = Connexion_Api::getConnexion($urlBodies);
    include './vue/planet.php';



?>
