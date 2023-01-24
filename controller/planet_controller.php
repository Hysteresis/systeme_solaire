<?php


    include './manager/Connexion_Api.php';

    $url = "https://api.le-systeme-solaire.net/rest/knowncount/planet";
    $reponse = Connexion_Api::getConnexion($url);
    // var_dump($reponse);
    // echo "type : " . $reponse['id'];

    $urlBodies = "https://api.le-systeme-solaire.net/rest/bodies/";
    $rep = Connexion_Api::getConnexion($urlBodies);
    include './vue/planet.php';

    // foreach ($rep['bodies'] as $cle => $valeur) {
    //     $isPlanet = $valeur['isPlanet'];

    //     }


?>
