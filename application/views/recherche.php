<div class="row" id ="row1">
<h1 id="jeremia">Resultat</h1>    
<?php foreach ($search as $v) { ?>
<div class="col-md-4" id="im" >
    <div class="card mb-4 product-wap rounded-0">
        <div class="card rounded-0">
            <img class="card-img rounded-0 img-fluid" src="<?php echo site_url();?>assets/img/<?php echo $v['nomobjet']; ?>.jpg">
        </div>
        <div class="card-body">
            <a href="shop-single.html" class="h3 text-decoration-none"><?php echo $v['nomobjet'];?></a>
            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                <li class="pt-2">
                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                </li>
            </ul>
            <p class="text-center mb-0"><?php echo $v['prixestimatif'];?>$</p>
            <a type="submit" id="button" href="<?php echo site_url();?>echange/effectuerEchange/"<?php echo $v['idobjectuser'];?>>Echanger</a>
        </div>
    </div>
</div> 
<?php }?>
</div>