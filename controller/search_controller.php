<?php
// include './vue/navbar.php';
// include './vue/search.php';
// include './manager/Connexion_Api.php';

$url = "https://api.le-systeme-solaire.net/rest/bodies/";

echo " search controller";

if (isset($_GET['search'])) {
    //nettoyer les espaces dans la saisie
    $search = trim($_GET['search']);
    $search = strtolower($_GET['search']);
    $reponse = Connexion_Api::getConnexion($url);
    //URL a laquelle on fait la demande et qui renverra une réponse
    echo "search controller" ;
    $url = $url . $search;

    foreach ($reponse['bodies'] as $cle => $valeur) {
        
        if ($search == $valeur['id']) {
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
        }
    }
    include './vue/search_result.php';
}

// include './vue/search_result.php';
?>