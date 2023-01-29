<?php

include('./manager/Connexion_Api.php');
$urlBodies = "https://api.le-systeme-solaire.net/rest/bodies/";
$reponse = Connexion_Api::getConnexion($urlBodies);

include './manager/Bodies.php';
$searchName = $_GET['searchName'];

$rep = new Bodies();
$bodies = $rep->get_id($searchName);

include './vue/search.php';

?>