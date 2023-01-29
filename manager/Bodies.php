<?php
class Bodies {

    public function __construct(){


    }

    public function get_all_bodies($urlBodies){
        $urlBodies = "https://api.le-systeme-solaire.net/rest/bodies/";
        $reponses = Connexion_Api::getConnexion($urlBodies);

        return $reponses;
    }

    public function get_id($id){
        $urlBodie = "https://api.le-systeme-solaire.net/rest/bodies/" . $id;
        $reponses = Connexion_Api::getConnexion($urlBodie);

        return $reponses;
    }
}



?>