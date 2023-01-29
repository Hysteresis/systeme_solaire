<div class="container">
    <div class="row mx-auto  my-2">
        <div class="col-12 col-lg-12 d-flex justify-content-center">
            <div class="card" style="width: 36rem;">
                <div class="card-body">
                    <h2 class="card-title">Lunes</h2>
                    <p>
                        <?php



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
                    foreach ($bodies['bodies'] as $cle => $bodie) {
                        $bodie['bodyType'];

                        if (isset($bodie['bodyType'])) {
                            if ($bodie['bodyType'] == "Moon") {
                                echo "<a href='?searchName=" .$bodie['id'] . "&uc=planet' >" . ucfirst($bodie['id'] ) .  "</a>" . " ";
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>