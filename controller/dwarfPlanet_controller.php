<?php

    // $url = "https://api.le-systeme-solaire.net/rest/knowncount/planet";
    // $reponse = Connexion_Api::getConnexion($url);
    include_once('./manager/Connexion_Api.php');
    $urlBodies = "https://api.le-systeme-solaire.net/rest/bodies/";
    $reponses = Connexion_Api::getConnexion($urlBodies);
    
    // echo '<pre>';
    // print_r ($reponses);
    // echo '</pre>';


    // foreach ($reponses['bodies'] as $cle => $reponse) {
    //     $bodyType = $reponse['bodyType'];
    //     if(isset($bodyType)){
    //         if($bodyType == "Dwarf Planet"){
    //             $name =  $reponse['name'];
    //         }
    //     }
    // }
    
    // var_dump($name);

    include './vue/dwarf_planet.php';



?>
