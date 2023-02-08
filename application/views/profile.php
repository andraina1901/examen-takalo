<main id="profile">
    <div class="profile-left">
        <h2>Ajout objet</h2>
        <div class="ajout-produit">
            <form action="<?php echo site_url()?>upload_controller/uploadObject" method="post" enctype="multipart/form-data">
                <!-- nomobjet -->
                <div class="field">
                    <div class="field-name">Nom:</div>
                    <input type="text" name="nom" id="" required> 
                </div>
                <!-- prix -->
                <div class="field">
                    <div class="field-name">Prix estimatif:</div>
                    <input type="number" name="prix" id="" required>
                </div>
                 <!-- decription -->
                 <div class="field">
                    <div class="field-name">Description:</div>
                    <textarea name="description" id="" cols="30" rows="4"></textarea>
                </div>
                <!-- photo-->
                <div class="field">
                    <div class="field-name">
                        Photo:
                    <br>
                    </div>
                    <input type="file" name="photo" id="" required>
                </div>
                <div class="boutton">
                    <button type="submit">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
    <div class="profile-right">
<div class="all-yours">
<div class="row" id ="row2">
<?php foreach ($object as $v) { ?>
<div class="col-md-4" id="im" >
    <div class="card mb-4 product-wap rounded-0">
        <div class="card rounded-0">
            <img class="card-img rounded-0 img-fluid" src="<?php echo site_url();?>assets/img/<?php echo $v['nomobjet'];?>.jpg">
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
            <button type="submit" id="button">Echanger</button> 
        </div>
    </div>
</div> 
<?php }?>
</div>
        </div>
    </div>
</main>