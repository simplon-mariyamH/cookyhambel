<?php 
session_start(); 
?>
<?php 
require 'dbproduits.class.php';
$DB = new DB();
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.grey-pink.min.css" />
        <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
        <link rel="stylesheet" type="text/css" href="produits.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff|Julius+Sans+One|Pinyon+Script|Rouge+Script" rel="stylesheet">
        <title>Commande</title>
    </head>
    <body>
        
        <?php include("menus.php"); ?>
            <main class="mdl-layout__content">
                <div class="page-content">
                <!-- Your content goes here -->
                    <div class="produits">
                        <p class="title">
                            Nos différents tiramisu :
                        </p>
                        <figure>
                            <p>TIRAMISU GOUT :</p>
                            <figcaption><img src="13350534_477754972420162_2174232920113001969_o.jpg" alt="" width="140" height="110"></figcaption>
                            <p>TIRAMISU GOUT :</p>
                            <figcaption><img src="13271536_10208070412510558_52333288_o.png" alt="" width="140" height="110"></figcaption>
                            <p>TIRAMISU GOUT :</p>
                            <figcaption><img src="img2.png" alt="" width="140" height="110"></figcaption>
                            <p>TIRAMISU GOUT :</p>
                            <figcaption><img src="13288020_10208069692532559_1416750715_o.png" alt="" width="140" height="110"></figcaption>        
                        </figure>
                    </div>

                    <div id="deconnexion">
                        <!--<p><a href="deconnexion.php" target="_blank">Déconnexion</a></p>-->
                    </div>  
                            <?php $produits=$DB->query('SELECT * FROM produits')?>
                            <?php foreach ($produits as $produit): ?>
                            <?php endforeach ?>
                </div>
            </main>
            
        <?php include("footer.php"); ?>
    </body>
</html>