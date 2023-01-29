<div class="container">
    <div class="row mx-auto  my-2">
        <div class="col-12 col-lg-12 d-flex justify-content-center">
            <div class="card" style="width: 36rem;">
                <div class="card-body">
                    <h2 class="card-title">Les planètes</h2>
                    <p>Nombre de planètes :
                        <?php
                        if (isset($reponse)) {
                            echo $reponse['knownCount'];
                        }


                        ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mx-auto  my-2">
        <div class="col-12 col-lg-12 d-flex justify-content-center">
            <div class="card" style="width: 36rem;">
                <div class="card-body">
                    <?php
                    if (isset($reponse)) {
                        
                        foreach ($bodies['bodies']  as  $bodie) {

                            $isPlanet = $bodie['isPlanet'];
                            if ($isPlanet) {
                                echo "<a href='index.php?searchName=" .  $bodie['id'] . "&uc=planet'>" . $bodie['name'] . "</a> <span>   &nbsp</span>";
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>