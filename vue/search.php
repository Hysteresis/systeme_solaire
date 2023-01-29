<div class="container">
    <div class="row mx-auto  my-2">
        <div class="col-12 col-lg-12 d-flex justify-content-center">
            <div class="card" style="width: 36rem;">
                <div class="card-body">
                    <h2 class="card-title"><?php echo ucfirst($bodies['id'])  ?></h2>
                    <?php
                    if (isset($bodies['aroundPlanet'])) {
                        // print_r( "<p>" . $bodies['name'] . " tourne autour de : <span> " . $bodies['aroundPlanet'] . "</span></p>");
                    }
                    if ($bodies['bodyType'] != null) {
                        echo "<p>Type de corps : ";

                        if ($bodies['bodyType'] == "Planet") {
                            echo "Planète";
                        }
                        if ($bodies['bodyType'] == "Moon") {
                            echo "Lune";
                        }

                        echo "</p>";
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>

    <div class="row mx-auto  my-2">
        <div class="col-12 col-lg-12 d-flex justify-content-center">
            <div class="card" style="width: 36rem;">
                <div class="card-body">
    
                    <?php
                    // var_dump($bodies['moons']);
                    if (isset($bodies['moons']) && $bodies['moons'] != null) {
                        echo "<h2>Les Lunes de " . $bodies['id'] . "</h2>";
                        foreach ($bodies['moons'] as $moon) {
                            $url = Connexion_Api::getConnexion($moon['rel']);
                        //  var_dump( $url['id']); 
                            // var_dump($url);
                            $_GET['searchName'] = $url['id'];
                            
                            echo "<a href='?searchName=" . $url['id'] . "&uc=planet'>" . $moon['moon'] . "</a><span>&nbsp;&nbsp;</span>";
                            
                        }
                    } else {
                        echo "<h4>- Aucune lune -</h4>";
                        // var_dump($bodies['aroundPlanet']['planet']);
                        if (isset($bodies['aroundPlanet']['planet'])) {
                            $url = Connexion_Api::getConnexion($bodies['aroundPlanet']['rel']);

                            $_GET['searchName'] = $bodies['aroundPlanet']['planet'];

                            echo "<p>" . ucfirst($bodies['name']) . " tourne autour de : <span><a href='?searchName=" . ucfirst($bodies['aroundPlanet']['planet']) . "&uc=planet'>" . ucfirst( $bodies['aroundPlanet']['planet']) . "</a></span></p>";
                        }

                    }


                    ?>

                    <a href=""></a>
                </div>
            </div>
        </div>
    </div>
   
    <div class="row mx-auto  my-2">
        <div class="col-12 col-lg-12 d-flex justify-content-center">
            <div class="card" style="width: 36rem;">
                <div class="card-body">

                    <h2>Caractéristiques physiques</h2>
                    <?php
                    if (isset($bodies['mass'])) {
                        echo "<p>Masse : " .  $bodies['mass']['massValue'] . " x 10<sup>" . $bodies['mass']['massExponent'] . "</sup> Kg";
                    } 
                    ?>
                    <?php
                    if (isset($bodies['vol'])) {
                        echo "<p>Volume : " . $bodies['vol']['volValue'] . " x 10<sup>" . $bodies['vol']['volExponent'] . "</sup> Kg </p>";
                    }
                    ?>
                    <p>Gravité : <?= $bodies['gravity'] ?> m/s<sup>2</sup></p>
                </div>
            </div>
        </div>
    </div>
</div>