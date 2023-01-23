
<div class="container">
    <div class="row mx-auto  my-2">
        <div class="col-12 col-lg-12 d-flex justify-content-center">
            <div class="card" style="width: 36rem;">
                <div class="card-body">
                    <h2 class="card-title"><?php echo ucfirst($id)  ?></h2>
                    <?php
                        if (isset($aroundPlanet)) {
                        echo "<p>" . ucfirst($id) . " tourne autour de : <span> " . ucfirst($aroundPlanet['planet']) . "</span></p>";
                    }
                    if ($bodyType != null) {
                        echo "<p>type de corps : ";
                        
                        if ($bodyType == "Planet") {
                            echo "Planète";
                        }
                        if ($bodyType == "Moon") {
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
                        if (isset($moons)) {
                            echo "<h2>Les Lunes de " . ucfirst($id) . "</h2>";
                            foreach ($moons as $moon) {
                                echo "<a href='" . $moon['rel'] . "'>" . $moon['moon'] . "</a><span>&nbsp;&nbsp;</span>";
                            }
                        } else {
                            echo "<h2>Aucune lune</h2>";
                            if (isset($aroundPlanet)) {
                                // $rel = Connexion_Api::getConnexion($aroundPlanet['rel']);
                                $url = Connexion_Api::getConnexion($aroundPlanet['rel']);
                                // var_dump($url);
                                var_dump($aroundPlanet['rel']);

                                // echo "<p>" . ucfirst($id) . " tourne autour de : <span><a href='" . $rel . "'>" . ucfirst($aroundPlanet['planet']) . "</a></span></p>";
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
            <p>Masse : <?php echo  $mass['massValue'] . " x 10<sup>" . $mass['massExponent'] . "</sup> Kg" ?> </p>
            <?php
            if (isset($vol)) {
                echo "<p>Volume : " . $vol['volValue'] . " x 10<sup>" . $vol['volExponent'] . "</sup> Kg </p>";
            }
            ?>
            <p>Gravité : <?= $gravity ?> m/s<sup>2</sup></p>



            
                </div>
            </div>
        </div>
    </div>


<!-- <p><?php echo ucfirst($name)  ?> </p>
<p><?php echo ucfirst($isPlanet)  ?> </p> -->


</div>