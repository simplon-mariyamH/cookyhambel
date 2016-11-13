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
        <title>Commande</title>
    </head>
    <body>
        
        <?php include("menus.php"); ?>
            <main class="mdl-layout__content">
                <div class="page-content">
                <!-- Your content goes here -->
                <div class="home">
                    <div class="row">
                        <div class="wrap">    
                            <?php $produits=$DB->query('SELECT * FROM produits')?>
                            <?php foreach ($produits as $produit): ?>
                            <?php endforeach ?>
                </div>
            </main>
            
        <?php include("footer.php"); ?>
    </body>
</html>