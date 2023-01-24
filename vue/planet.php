<div class="container">
    <div class="row mx-auto  my-2">
        <div class="col-12 col-lg-12 d-flex justify-content-center">
            <div class="card" style="width: 36rem;">
                <div class="card-body">
                    <h2 class="card-title">Les planètes</h2>
                    <p>Nombre de planètes <?php echo $reponse['knownCount'] ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mx-auto  my-2">
        <div class="col-12 col-lg-12 d-flex justify-content-center">
            <div class="card" style="width: 36rem;">
                <div class="card-body">
<?php foreach ($rep['bodies'] as $cle => $valeur) {
        $isPlanet = $valeur['isPlanet'];
        if ($isPlanet) {
           
        echo "<a href='index.php?searchName=" .  $valeur['id'] . "'>". $valeur['name'] . "</a> <span>   &nbsp</span>";

        }
    }
        ?>
                </div>
            </div>
        </div>
    </div>
</div>