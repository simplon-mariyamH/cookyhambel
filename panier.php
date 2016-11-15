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
        <link rel="stylesheet" type="text/css" href="panier.css"><link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff|Julius+Sans+One|Pinyon+Script|Rouge+Script" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="footer.css">
        <title>Panier</title>
    </head>
    <body>
        
        <?php include("menus.php"); ?>
            <main class="mdl-layout__content">
                <div class="page-content">
                <!-- Your content goes here -->

                <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
                  <thead>
                    <tr>
                      <th class="mdl-data-table__cell--non-numeric">Tiramisu Goût</th>
                      <th>Quantité</th>
                      <th>Prix Unité TTC</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="mdl-data-table__cell--non-numeric">Kinder Bueno</td>
                      <td>25</td>
                      <td>1,30€</td>
                    </tr>
                    <tr>
                      <td class="mdl-data-table__cell--non-numeric">Spéculos</td>
                      <td>50</td>
                      <td>1,30€</td>
                    </tr>
                    <tr>
                      <td class="mdl-data-table__cell--non-numeric">Oréo</td>
                      <td>10</td>
                      <td>1,30€</td>
                    </tr>
                  </tbody>
                </table>
                <?php include("footer.php"); ?>
                </div>
            </main>
    </body>
</html>