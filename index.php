<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/1891b42c16.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <canvas id="canvas1"></canvas>
    <!-- <div class="spinner-border spinner text-danger" id="spinner" role="status"> -->

    <!-- <span class="visually-hidden">Loading...</span> -->
    </div>
    <?php
    include './vue/navbar.php';

    if (isset($_GET['uc'])) {

        if (isset($_GET['searchName'])) {
            include './controller/search_controller.php';
           
        }

        if ($_GET['uc'] == 'planet') {
            include './controller/planet_controller.php';
        }

        if ($_GET['uc'] == 'dwarfPlanet') {
            include './controller/dwarfPlanet_controller.php';
        }

        if ($_GET['uc'] == 'asteroid') {
            include './controller/asteroid_controller.php';
        }
        
        if ($_GET['uc'] == 'comet') {
            include './controller/comet_controller.php';
        }
    
        if ($_GET['uc'] == 'star') {
            include './controller/star_controller.php';
        }

        if ($_GET['uc'] == 'moon') {
            include './controller/moon_controller.php';
        }

    } else { //page par defaut d'accueil
        include "./controller/planet_controller.php";
    }

    ?>
    <!-- spinner -->
    <!-- <div class="test">test</div> -->


    <!-- script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="script/spinner.js"></script>

    <script src="script/particlePOO.js"></script>
    <script src="script/navbarActive.js"></script>
    <script src="resources/carousel.js"></script>

</body>

</html>