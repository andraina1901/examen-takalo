<main>
    <div class="up-div">
        <div class="up-left">
            <div class="three-card">
                <div class="one-card">
                    <div class="text">
                        <h4>Users</h4>
                        <h2><?php echo $stats['nombreuser'] ['nombreuser']?></h2>
                        <p>Active users</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user-circle"></i>
                    </div>
                </div>
                <div class="one-card">
                    <div class="text">
                        <h4>Echange faite</h4>
                        <h2> <?php echo $stats['nombreechange']['nombreechange']?></h2>
                        <p>Nombre d'echange faite</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-hand-paper"></i>
                    </div>
                </div>
                <div class="one-card">
                    <div class="text">
                        <h4>Objets a verifier</h4>
                        <h2> <?php echo $stats['nombreobjetaverifier']['nombreobjetaverifier']?></h2>
                        <p>Verifier les categories</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-book-open"></i>
                    </div>
                </div>
            </div>
        <?php if(count($verifier)>0 ){ ?>
            <div class="chart">
                <form action=<?php echo site_url('index.php/Accueil_admin/updateCategoryForObject'); ?> method="get">
                    <div class="title"><h2> Changer de categorie</h2></div>
                    <div class="detailsProduit" style="width: 700px">
                        <h4 id="productName">Nom du produit: <?php echo $verifier[0]['nomobjet'] ?></h4>
                        <input type="hidden" id="hidden" name="hidden" value = <?php echo $verifier[0]['idobjectuser']?>>
                        <div class="updateCategory" style= display:flex>
                            <h4>Nom du categorie: </h4>
                            <select name="select" id="select">
                                <?php
                                for ($i=0; $i <count($all) ; $i++) { ?>
                                    <option value=<?php echo $all [$i]['idcategory'] ?> > <?php echo $all [$i]['nomcategory']?></option>
                                <?php
                                }
                                ?>
                            </select> 
                            <input type="submit" value="Confirmer">
                        </div>
                    </div>

                </form>
            </div>

            <?php } ?>
            <div class="newcategory">
                <div class="title"><h2> Ajouter de categorie</h2></div>

                    <form action="<?php echo site_url('index.php/Accueil_admin/addCategory'); ?>" style="display:flex; gap:3% ;margin-top:3%">
                        <h4>Nom du categorie: </h4>
                        <input type="text" name="nom" id="nom">
                        <input type="submit" value="Confirmer">
                    </form>
            </div>
        </div>
        <div class="up-right">
            <div class="list-emp">
                <div class="list-content">
                    <div class="title">Les produits</div>
                        <div class="all">
                            <?php for($i=0 ;$i< count($verifier);$i++ ){?>
                            <div class="all-item">
                                <div class="emp-pic">
                                    <img src="../assets/img/logo.png" alt="">
                                </div>
                                <div class="emp-name">
                                        <div class="nom"><?php echo $verifier[$i]['nomobjet'] ?></div>
                                        <div class="spec">Inconnu</div>
                                </div>
                                    <div class="details">
                                        <button type="submit" id=<?php echo $verifier[$i]['idobjectuser'] ; ?> value= <?php echo $verifier[$i]['nomobjet'] ; ?> class="button">Regler</button>
                                    </div>
                             </div>
                             <?php }?>
                             
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
