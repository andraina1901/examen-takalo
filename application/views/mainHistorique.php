
<div style="text-align:center; margin-bottom: 49px; color: #9d5a00;">
    <h1> Historique:</h1>
</div>
<div class="table-div" style="height: 285px;">
<table class="table" style ="overflow: scroll;">
                        <thead>
                          <tr >
                            <th style="color:#004c8e">Appartenait A </th>
                            <th style="color:#004c8e"> Nom de l objet</th>
                            <th style="color:#004c8e"> Prix estimatif</th>
                            <th style="color:#004c8e"> Date de premiere publication</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php for ($i=0; $i <count($historia) ; $i++) { ?>
                            <tr >
                                <td><?php echo $historia[$i]['nom'] ;?></td>
                                <td><?php echo $historia[$i]['nomobjet'] ;?></td>
                                <td><?php echo $historia[$i]['prixestimatif'] ;?></td>
                                <td><?php echo $historia[$i]['datepublication'] ;?></td>
                                
                            </tr>
                        
                  <?php } ?>
                        </tbody>
</table>

 
</div>
