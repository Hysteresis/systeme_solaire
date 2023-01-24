<?php
include './vue/navbar.php';
include './vue/search.php';
include './manager/Connexion_Api.php';

$url = "https://api.le-systeme-solaire.net/rest/bodies/";



if (isset($_GET['searchName'])) {
    //nettoyer les espaces dans la saisie

    $searchName = trim($_GET['searchName']);
    $searchName = strtolower($_GET['searchName']);
    $reponse = Connexion_Api::getConnexion($url);
    //URL a laquelle on fait la demande et qui renverra une réponse
    $url = $url . $searchName;

    


    foreach ($reponse['bodies'] as $cle => $valeur) {

        if ($searchName == $valeur['id']) {
            $id = $valeur['id'];
            $name = $valeur['name'];
            $isPlanet = $valeur['isPlanet'];
            if (isset($valeur['moons'])) {
                $moons = $valeur['moons'];
            }
            $mass = $valeur['mass'];
            $vol = $valeur['vol'];
            $gravity = $valeur['gravity'];
            $bodyType = $valeur['bodyType'];
            if (isset($valeur['aroundPlanet'])) {
                $aroundPlanet = $valeur['aroundPlanet'];
            }

            include './vue/search_result.php';
        }
    }
}
