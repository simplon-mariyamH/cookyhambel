<link rel="stylesheet" type="text/css" href="paiement.css">
<div class="table">
<table class="mdl-data-table mdl-js-data-table">
                      <thead>
                        <tr>
                          <th class="mdl-data-table__cell--non-numeric">Désignation</th>
                        <th>Parfum</th>
                        <th>Quantité</th>
                        <TH>Prix unitaire HT</TH>
                        <th>Prix unitaire TTC</th>
                        </tr>
                      </thead>

<?php 

                include("database.php");

                $req=$bdd->query('SELECT * FROM articles INNER JOIN gouts ON articles.id_gout = gouts.id');
                while ($donnees = $req->fetch()) {
                  $id_article = $donnees['id_article'];
                  $qte = $donnees['quantite'];
                  $nom_produit = $donnees['nom_produit'];
                  $gout = $donnees['nom'];
                  $prix = $donnees['prix'];
                  ?>
                    <table class="mdl-data-table mdl-js-data-table">
                    <tbody>
                    <tr>
                      <th class="mdl-data-table__cell--non-numeric"><?php echo $nom_produit ?></th>
                      <th><?php echo $gout  ?></th>
                      <th><?php echo $qte ?></th>
                      <th>1,235€</th>
                      <th>1,30€</th>
                    </tr>
                  </tbody>
                </table>
                </table>
                  <?php
                }

                $req->closeCursor();
                ?>

                <?php 
                  $reponse = $bdd->query('SELECT SUM(quantite) AS cout_total FROM articles');

                            while ($donnees = $reponse->fetch())
                            {
                              $total = $donnees['cout_total'];
                ?>
                <table class="mdl-data-table mdl-js-data-table">
                  <thead>
                    <tr>
                      <th class="mdl-data-table__cell--non-numeric">
                      Total : 
                      </th>
                      <th></th>
                      <th><?php echo $total ?> tiramisus</th>
                      <th><?php echo $total*1.235 ?>€ HT</th>
                      <th><?php echo $total*1.30 ?>€ TTC</th>
                    </tr>
                  </thead>
                </table>
                </div>
                
                <?php 
                  }

                  $reponse->closeCursor();
                ?>