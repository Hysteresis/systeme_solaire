<?php
include './vue/search.php';

    $url = "https://api.le-systeme-solaire.net/rest/bodies/";

    $reponse = Connexion_Api::getConnexion($url);
    
    if (isset($_GET['searchName'])){

        //nettoyer les espaces dans la saisie
        $searchName = trim($_GET['searchName']) ;
        $searchName = strtolower($_GET['searchName']);
    
        foreach($reponse['bodies'] as $cle => $valeur){
            
            if($searchName == $valeur['id']){
                $id = $valeur['id'];
                $name = $valeur['name'];
                $isPlanet = $valeur['isPlanet'];
                if (isset($valeur['moons'])){
                    $moons = $valeur['moons'];
                }    
                $mass = $valeur['mass'];
                $vol = $valeur['vol'];
                $gravity = $valeur['gravity'];
                $bodyType = $valeur['bodyType'];
                if (isset($valeur['aroundPlanet'])){
                    $aroundPlanet = $valeur['aroundPlanet'];
                    
                }  


                include './vue/search_result.php';
            }
        }
    }

    if (isset($_GET['searchName'])){
    $url = "https://api.le-systeme-solaire.net/rest/bodies/" . $searchName ; //URL a laquelle on fait la demande et qui renverra une réponse

    }




    



?>