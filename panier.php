<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.grey-pink.min.css" />
        <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
        <link rel="stylesheet" type="text/css" href="panier.css">
        <link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff|Julius+Sans+One|Pinyon+Script|Rouge+Script|Roboto" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="footer.css">
        <title>Panier</title>
    </head>
    <body>
        
        <?php include("menus.php"); ?>
            <main class="mdl-layout__content">
                <div class="page-content">
                <!-- Your content goes here -->
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
                <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
                  <thead>
                    <tr>
                      <th class="mdl-data-table__cell--non-numeric"> les produits sont :<?php echo $nom_produit ?></th>
                      <th><?php echo $qte  ?></th>
                      <th><?php echo $gout ?></th>
                      <th>au prix de 1,30€ TTC</th>
                      <th><a href="delete_panier.php?id=<?php echo $id_article ?> "> <button type="button" name="supprimer">Supprimer</button></a></th>
                          <th><a href="commande.php"> <button type="button" name="ajouter">Ajouter</button></a></th>

                    </tr>
                  </thead>
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
                <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
                  <thead>
                    <tr>
                      <th class="mdl-data-table__cell--non-numeric">
                      Total : 
                      </th>
                      <th><?php echo $total ?> tiramisus</th>
                      <th><?php echo $total*1.3 ?>€ TTC</th>
                    </tr>
                  </thead>
                </table>
                <?php 
                  }

                  $reponse->closeCursor();
                ?>
                <p><a href="paiement.php"><button type="button" name="valider">Valider le panier et passer au paiement</button></a></p>
                <?php include("footer.php"); ?>
                </div>
            </main>
    </body>
</html>