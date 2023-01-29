<?php

// echo " search controller";
include_once('./manager/Connexion_Api.php');
$urlBodies = "https://api.le-systeme-solaire.net/rest/bodies/";
$reponse = Connexion_Api::getConnexion($urlBodies);

include_once './manager/Bodies.php';
$searchName = $_GET['searchName'];
// echo "searchname : " . $searchName;


$rep = new Bodies();
$bodies = $rep->get_id($searchName);

// echo "</br>le bodies[i] :"  . $bodies['id'];

include './vue/search.php';

?>