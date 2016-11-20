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
        <link rel="stylesheet" type="text/css" href="paiement.css">
        <link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff|Julius+Sans+One|Pinyon+Script|Rouge+Script|Roboto" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="footer.css">
        <title>Paiement</title>
    </head>
    <body>
        
        <?php include("menus.php"); ?>
            <main class="mdl-layout__content">
                <div class="page-content">
                <!-- Your content goes here -->
                <div id="facture">

                  <div class="mdl-card__title">
                     <h2 class="titre">Paiement</h2>
                  </div>
                  
                  <div id="entete">
                    <div id="client">
                      <div class="mdl-card__title">
                         <h2 class="mdl-card__title-text">Client</h2>
                         </div>
                         <div class="mdl-card__supporting-text"><?php echo $_SESSION['civilite'] . ' ' . $_SESSION['nom'] . ' ' . $_SESSION['prenom'] ?></div>
                         <div class="mdl-card__supporting-text"><?php echo $_SESSION['raison_sociale'] ?></div>
                         <div class="mdl-card__supporting-text">N° SIRET/SIREN : <?php echo $_SESSION['siret'] ?></div>
                         <div class="mdl-card__supporting-text"><?php echo $_SESSION['adresse2'] ?></div>
                   <!--       <div class="mdl-card__supporting-text"><?php echo $_SESSION['ville']; ?></div>
                       -->
                    </div>  
                    <div id="cooky_ham">
                      <div class="mdl-card__title">
                         <h2 class="mdl-card__title-text">Cooky Ham</h2>
                      </div>
                      <div class="mdl-card__supporting-text">Tiramisu pour professionnels</div>
                      <div class="mdl-card__supporting-text">Tel : 06.41.46.63.16</div>
                      <div class="mdl-card__supporting-text">Vaulx-en-Velin</div>
                    </div>
                  </div>  
                  <CENTER>
                    <div id="contenu">
                      <?php include("contenu.php"); ?>
                    </div>
                  </CENTER>

                  <!-- <div id="date">
                      <div class="mdl-card__supporting-text">Le </div>
                      <div class="mdl-card__supporting-text"></div>
                      <div class="mdl-card__supporting-text">Cooky Ham</div>
                  </div> -->

                </div>

                <p><a href="facture_paypal.php"><button type="button" name="paypal">Paiement en ligne via Paypal</button></a></p>
                <p><a href="facture_espece.php"><button type="button" name="espèce">Paiement en espèce à la réception</button></a></p>
                <!-- ENVOIE D'UN MAIL VERS MOI ET LUI -->
                </div>
            </main>
    </body>
</html>