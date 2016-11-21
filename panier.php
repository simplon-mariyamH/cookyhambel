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
               <h1 style="font-family: 'Julius Sans One'; position: relative; margin-left: 5%;">Récapitulatif de votre commande</h1> 
               
                <CENTER>
                    <div id="contenu">
                      <div class="table">
                        <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                          <thead>
                            <tr>
                              <th class="mdl-data-table__cell--non-numeric">Désignation</th>
                              <th>Parfum</th>
                              <th>Quantité</th>
                              <TH>Prix unitaire HT</TH>
                              <th>Prix unitaire TTC</th>
                              <th style="color: white;">blank</th>
                              <th style="color: white;">blank</th>
                              <th style="color: white;">blank</th>
                              <th style="color: white;">blank</th>
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
                <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
      <tbody>
        <tr>
          <th class="mdl-data-table__cell--non-numeric"><?php echo $nom_produit ?></th>
          <th><?php echo $gout  ?></th>
          <th><?php echo $qte ?></th>
          <th>1,235€</th>
          <th>1,30€</th>
          <th><a href="delete_panier.php?id=<?php echo $id_article ?> "><button class="mdl-button mdl-js-button mdl-button--accent" type="button" name="supprimer">Supprimer</button></a></th>
                          <th><a href="commande.php"><button class="mdl-button mdl-js-button mdl-button--accent" type="button" name="ajouter">Ajouter</button></a></th>
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

      while ($donnees = $reponse->fetch()){
        $total = $donnees['cout_total'];
    ?>
    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
    <thead class="total">
      <tr>
        <th id="total" class="mdl-data-table__cell--non-numeric">
        Total : 
        </th>
        <th style="color: #c1c1c1;">blank</th>
        <th style="color: #c1c1c1;">blank</th>
        <th><?php echo $total ?> tiramisus</th>
        <th><?php echo $total*1.235 ?>€ HT</th>
        <th><?php echo $total*1.30 ?>€ TTC</th>
        <th><a href="paiement.php"><button class="mdl-button mdl-js-button mdl-button--accent" type="button" name="valider">Valider le panier et passer au paiement</button></a></th>
      </tr>
    </thead>
  </table>
</div>
 <?php 
    }

    $reponse->closeCursor();
  ?>
                    </div>
                  </CENTER>
                <p></p>
                <?php include("footer.php"); ?>
                </div>
            </main>
    </body>
</html>