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
        <link rel="stylesheet" type="text/css" href="produits.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff|Julius+Sans+One|Pinyon+Script|Rouge+Script" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="footer.css">
        <title>Produits</title>
    </head>
    <body>
        
        <?php include("menus.php"); ?>
            <main class="mdl-layout__content">
                <div class="page-content">
                <!-- Your content goes here -->
                    
                    <div class="box">
                        <div class="demo-card-event mdl-card mdl-shadow--2dp">
                          <div class="mdl-card__title mdl-card--expand">
                            <h4>
                              Classiq'isu<br>
                              <img src="img2.png" alt="" width="210" height="220">
                            </h4>
                          </div>
                          <div class="mdl-card__actions mdl-card--border">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="classiqisu.php">DECOUVRIR
                            </a>
                            <div class="mdl-layout-spacer"></div>
                            <a href="commande.php"><i class="material-icons">shopping_basket</i></a>
                         
                          </div>
                        </div>

                        <div class="demo-card-event mdl-card mdl-shadow--2dp">
                          <div class="mdl-card__title mdl-card--expand">
                            <h4>
                              Revisit'isu<br>
                              <img src="13271536_10208070412510558_52333288_o.png" alt="" width="210" height="220">
                            </h4>
                          </div>
                          <div class="mdl-card__actions mdl-card--border">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="revisitisu.php">
                               DECOUVRIR
                            </a>
                            <div class="mdl-layout-spacer"></div>
                            <a href="commande.php"><i class="material-icons">shopping_basket</i></a>
                          </div>
                        </div>

                        <div class="demo-card-event mdl-card mdl-shadow--2dp">
                          <div class="mdl-card__title mdl-card--expand">
                            <h4>
                              Créat'isu<br>
                              <img src="13288020_10208069692532559_1416750715_o.png" alt="" width="210" height="220">
                            </h4>
                          </div>
                          <div class="mdl-card__actions mdl-card--border">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="creatisu.php">
                               DECOUVRIR
                            </a>
                            <div class="mdl-layout-spacer"></div>
                            <a href="commande.php"><i class="material-icons">shopping_basket</i></a>
                          </div>
                        </div>
                    </div>
                </div>
            </main>
            
                    <?php include("footer.php"); ?>
        
    </body>
</html>