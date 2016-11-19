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
              
                ?>
                <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
                  <thead>
                    <tr>
                      <th class="mdl-data-table__cell--non-numeric"> les produits sont :<?php echo $donnees['nom_produit']; ?></th>
                      <th><?php echo $donnees['quantite']; ?></th>
                      <th><?php echo $donnees['nom']; ?></th>
                      <th>au prix de 1,30€ TTC</th>
                    </tr>
                  </thead>
                </table>
                <?php 

                  
                     

                }

                $req->closeCursor();
                ?>
                <p><a href="commande.php"><input type="button" name="retour" value="Retour à la page commande"></a></p>
                <?php include("footer.php"); ?>
                </div>
            </main>
    </body>
</html>