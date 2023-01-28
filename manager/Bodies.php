<?php
class Bodies {

    public function __construct(){


    }

    public function get_all_bodies($urlBodies){
        $urlBodies = "https://api.le-systeme-solaire.net/rest/bodies/";
        $reponses = Connexion_Api::getConnexion($urlBodies);

        return $reponses;
    }
}



?>