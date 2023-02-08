<!-- <?php echo $propositions; ?> -->
<main id="interaction">
    <div class="recu">
        <div class="row">
            <p></p>
            <div class="col-md-6">
                <div class="card mb-6 product-wap rounded-0 liste">
                    <div class="liste-info">
                        <div class="liste-info-texte">
                            Liste des demandes
                        </div>
                        <div class="liste-info-tableau">
                            <div class="demande-info">
                                <div class="demande-info-ligne-entete">
                                    <div class="demande-info-case">Objet demandé</div>
                                    <div class="demande-info-case">Objet proposé</div>
                                    <div class="demande-info-case">Supprimer</div>
                                </div>
                                <?php 
                                    if ($demandes != 0) { 
                                        for ($i=0; $i < count($demandes); $i++) { ?>
                                            <div class="demande-info-ligne l<?php echo ($i%2)+1; ?>">
                                                <div class="demande-info-case"><?php echo $demandes[$i]['nomObjetDemande']; ?></div>
                                                <div class="demande-info-case"><?php echo $demandes[$i]['nomObjetPropose']; ?></div>
                                                <div class="demande-info-case"><a href="<?php echo site_url(); ?>Interaction/supprimer/<?php echo $demandes[$i]['idobjectdemande']; ?>/<?php echo $demandes[$i]['idobjectpropose']; ?>"><div class="demande-supprimer">Supprimer</div></a></div>
                                            </div>
                                        <?php } 
                                    }?>
                                
                                
                                <!-- <div class="demande-info-ligne l2">
                                    <div class="demande-info-case">Objet 1</div>
                                    <div class="demande-info-case">Objet 2</div>
                                    <div class="demande-info-case"><a href="#"><div class="demande-supprimer">Supprimer</div></a></div>
                                </div>
                                <div class="demande-info-ligne l1">
                                    <div class="demande-info-case">Objet 1</div>
                                    <div class="demande-info-case">Objet 2</div>
                                    <div class="demande-info-case"><a href="#"><div class="demande-supprimer">Supprimer</div></a></div>
                                </div>
                                <div class="demande-info-ligne l2">
                                    <div class="demande-info-case">Objet 1</div>
                                    <div class="demande-info-case">Objet 2</div>
                                    <div class="demande-info-case"><a href="#"><div class="demande-supprimer">Supprimer</div></a></div>
                                </div> -->
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-md-6 envoye">
                <div class="card mb-6 product-wap rounded-0 envoye-info liste">
                    <div class="liste-info">
                        <div class="liste-info-texte">
                            Liste des propositions
                        </div>
                        <div class="liste-info-tableau">
                            <div class="prop-info">
                                <div class="prop-info-ligne-entete">
                                    <div class="prop-info-case">Objet demandé</div>
                                    <div class="prop-info-case">Objet proposé</div>
                                    <div class="prop-info-case">Accepter</div>
                                    <div class="prop-info-case">Refuser</div>
                                </div>
                                <?php
                                if ($propositions != 0) {
                                    for ($i=0; $i < count($propositions); $i++) { ?>
                                        <div class="prop-info-ligne l<?php echo ($i%2)+1; ?>">
                                            <div class="prop-info-case"><?php echo $propositions[$i]['nomObjetDemande']; ?></div>
                                            <div class="prop-info-case"><?php echo $propositions[$i]['nomObjetPropose']; ?></div>
                                            <div class="prop-info-case"><a href="#"><div class="prop-accepter">Accepter</div></a></div>
                                            <div class="prop-info-case"><a href="<?php echo site_url(); ?>Interaction/refuser/<?php echo $propositions[$i]['idobjectdemande']; ?>/<?php echo $propositions[$i]['idobjectpropose']; ?>"><div class="prop-refuser">Refuser</div></a></div>
                                        </div>
                                    <?php } 
                                } ?>
                                    
                                
                                <!-- <div class="prop-info-ligne l2">
                                    <div class="prop-info-case">Objet 1</div>
                                    <div class="prop-info-case">Objet 2</div>
                                    <div class="prop-info-case"><a href="#"><div class="prop-accepter">Accepter</div></a></div>
                                    <div class="prop-info-case"><a href="#"><div class="prop-refuser">Refuser</div></a></div>
                                </div>
                                <div class="prop-info-ligne l1">
                                    <div class="prop-info-case">Objet 1</div>
                                    <div class="prop-info-case">Objet 2</div>
                                    <div class="prop-info-case"><a href="#"><div class="prop-accepter">Accepter</div></a></div>
                                    <div class="prop-info-case"><a href="#"><div class="prop-refuser">Refuser</div></a></div>
                                </div>
                                <div class="prop-info-ligne l2">
                                    <div class="prop-info-case">Objet 1</div>
                                    <div class="prop-info-case">Objet 2</div>
                                    <div class="prop-info-case"><a href="#"><div class="prop-accepter">Accepter</div></a></div>
                                    <div class="prop-info-case"><a href="#"><div class="prop-refuser">Refuser</div></a></div>
                                </div> -->
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
           
        </div> 
    </div>
</main>
