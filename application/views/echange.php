<script src="<?php echo site_url();?>/assets/js/fonctions.js"></script>
<main id="echange">
    <div class="recu">
        <div class="row" id="ec">
            <div class="col-md-4" id="right">
                <div class="card mb-4 product-wap rounded-0">
                    <div class="card rounded-0">
                        <img class="card-img rounded-0 img-fluid" src="<?php echo site_url();?>assets/img/fond.jpg">
                    </div>
                    <div class="card-body">
                        <a href="shop-single.html" class="h3 text-decoration-none">Oupidatat non</a>
                        <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                            <li>M/L/X/XL</li>
                            <li class="pt-2">
                                <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                            </li>
                        </ul>
                        <p class="text-center mb-0">$250.00</p>
                        
                    </div>
                </div>
            </div> 
            <div class="echange" id="echa">
                <img src="<?php echo site_url();?>assets/webfonts/fa-exchange.svg.png" alt="">
            </div>
            <div class="col-md-4 envoye" id="env">
                <div class="card mb-4 product-wap rounded-0 envoye-info">
                    <div class="envoye-info-contenu">
                        <form method="POST" action="<?php echo site_url(); ?>Echange/confirmerDemande/<?php echo $idObject; ?>">
                            <div class="envoye-texte">
                                Choisissez 1 ou plusieurs objets
                                <button>Echanger</button>
                            </div>
                            <div class="envoye-inventaire">
                                <div class="envoye-inventaire-info">
                                    <?php for ($i=0; $i < count($object); $i++) { ?>
                                        <div class="objet">
                                        <input class="checkbox" type="checkbox" name="box<?php echo $object[$i]['idobjectuser']; ?>" id="box<?php echo $object[$i]['idobjectuser']; ?>">
                                            <div class="objet-info" id="<?php echo $object[$i]['idobjectuser'];; ?>box" onclick="checker('box<?php echo $object[$i]['idobjectuser']; ?>' , '<?php echo $object[$i]['idobjectuser']; ?>box');">
                                                <img src="<?php echo base_url() ?>assets/img/<?php echo $object[$i]['nomobjet']; ?>.jpg"><br>
                                                <div class="envoye-nom"><?php echo $object[$i]['nomobjet']; ?></div>
                                                <div>Prix approximatif : <?php echo $object[$i]['prixestimatif'];?>$</div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </form>                    
                    </div>
                </div>
            </div> 
           
        </div> 
    </div>
</main>
