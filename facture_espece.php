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
      <link rel="stylesheet" type="text/css" href="facture.css">
      <link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff|Julius+Sans+One|Pinyon+Script|Rouge+Script|Roboto" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="footer.css">
      <title>Paiement</title>
  </head>
  <body>  
    <?php include("menus.php"); ?>
      <main class="mdl-layout__content">
        <div class="page-content">
          <!-- Your content goes here -->
          <CENTER>
            <h1 style="font-family: 'Julius Sans One';">
            VOTRE COMMANDE A BIEN ETE PRISE EN COMPTE, ELLE SERA DISPONIBLE DANS MOINS DE 48H
            </h1>
            <h3 style="font-family: 'Julius Sans One';">
            Une facture vous a été envoyé par mail.
              <p>
                <a href="">
                  <button class="mdl-button mdl-js-button mdl-button--accent" type="button" name="print">Imprimer</button>
                </a>
              </p>
            </h3>
          </CENTER>
          <div id="facture">
            <div class="mdl-card__title">
               <h2 class="titre">Facture</h2>
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

            <?php 
            $reponse = $bdd->query('SELECT SUM(quantite) AS cout_total FROM articles');

                      while ($donnees = $reponse->fetch())
                      {
                        $total = $donnees['cout_total'];
          ?>

            <div id="pied_de_page">
              <div class="mdl-card__supporting-text">Reste à payer : <?php echo $total*1.30 ?>€ TTC</div>
              <div class="mdl-card__supporting-text">Paiement espèce à la réception.</div>
              <div class="mdl-card__supporting-text">Cooky Ham vous remercie de votre confiance.</div>
            </div>
            <?php 
            }

            $reponse->closeCursor();
          ?>
          </div>
          
          <!-- ENVOIE D'UN MAIL VERS MOI ET LUI -->
        </div>
      </main>
  </body>
</html>