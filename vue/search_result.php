<div class="container">
    <div class="row">
        <div class="col">
            <h1> <?php echo ucfirst($id)  ?> </h1>
            <p><?php echo ucfirst($name)  ?>  </p>
            <p><?php echo ucfirst($isPlanet)  ?>  </p>


            <?php     
             if(isset($moons)){
            echo "<h2>Les Lunes de " . ucfirst($id) . "</h2>";
           
                foreach($moons as $moon){

                    echo "<p><a href='" . $moon['rel'] . "'>". $moon['moon'] . "</a></p>";
                        
                }
            }
                ?>
            <h2>Caractéristiques physiques</h2>
            <p>Masse : <?php echo  $mass['massValue'] . " x 10<sup>" . $mass['massExponent'] . "</sup> Kg"?>  </p>
             <?php
                if(isset($vol)){
                    echo "<p>Volume : " . $vol['volValue'] . " x 10<sup>" . $vol['volExponent'] . "</sup> Kg </p>";
                }
              ?>
            <p>Gravité : <?= $gravity?> m/s<sup>2</sup></p>
            <p>type de corps : 
                <?php
                    if($bodyType == "Planet"){
                        echo "Planète";

                    }
                    $bodyType
                ?>
            </p>
        </div>
    </div>
</div>

