<div class="container">
    <div class="row mx-auto  my-2">
        <div class="col-12 col-lg-12 d-flex justify-content-center">
            <div class="card" style="width: 36rem;">
                <div class="card-body">
                    <h2 class="card-title">Les planètes naines</h2>
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
                        foreach ($reponses['bodies'] as $cle => $reponse) {
                            $bodyType = $reponse['bodyType'];
                            $name = ucfirst($reponse['id']);

                            if(isset($bodyType)){
                                if($bodyType == "Dwarf Planet"){
                                    echo "<a href='' >" . $name . "</a>" . " ";
 
                                }
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>