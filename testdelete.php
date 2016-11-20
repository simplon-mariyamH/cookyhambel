<?php 



include("database.php");

                $req=$bdd->query('SELECT * FROM articles INNER JOIN gouts ON articles.id_gout = gouts.id');
				//boucle while pour récupérer les données
                while ($donnees = $req->fetch()) {
                	$id_article = $donnees['id_article'];
                	$qte = $donnees['quantite'];
                	$nom_produit = $donnees['nom_produit'];
                	$gout = $donnees['nom'];
                	$prix = $donnees['prix'];

              ?>

<table >
                  <thead>
                    <tr>
                      <th> 
               LE PRODUIT <?php 

               echo $nom_produit


               ?></th>
                      <th><?php echo $qte ?></th>
                      <th><?php echo $gout; 
                      ?></th>
                      <th>au prix de 1,30€ TTC</th>
                      <th> 
                      <a href="delete.php?id=<?php echo $id_article ?> "> <button type="button" name="supprimer">Supprimer</button></a>
                      </th>
                    </tr>
                  </thead>
                </table>



<?php 
                }


                $req->closeCursor();

?>