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
        <link rel="stylesheet" type="text/css" href="panier.css"><link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff|Julius+Sans+One|Pinyon+Script|Rouge+Script|Roboto" rel="stylesheet">
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

                // $req=$bdd->query('SELECT nom_produit, quantite, gout, prix FROM articles');
                // while ($donnees = $req->fetch()) {
                //   echo 'les produits sont :' . $donnees['nom_produit'] . $donnees['quantite'] . $donnees['gout'] . ' au prix de ' . $donnees['prix'] . '<br />';

                // }

                ?>
                <form method="post" action="ciblepanier.php">
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
                        <td class="mdl-data-table__cell--non-numeric">Kinder Bueno
  </td>
                        <td>
                          <p>
                            <label for="qte"></label><br />
                            <select name="qte" id="qte">
                              <option value="0">0</option>
                              <option value="3">3</option>
                              <option value="5">5</option>
                              <option value="7">7</option>
                              <option value="10">10</option>
                              <option value="15">15</option>
                              <option value="20">20</option>
                              <option value="25">25</option>
                            </select> 
                          </p>
                        </td>
                        <td>1,30€</td>
                      </tr>
                      <tr>
                        <td class="mdl-data-table__cell--non-numeric">Spéculos</td>
                        <td>
                          <p>
                            <label for="qte"></label><br />
                            <select name="qte" id="qte">
                              <option value="0">0</option>
                              <option value="3">3</option>
                              <option value="5">5</option>
                              <option value="7">7</option>
                              <option value="10">10</option>
                              <option value="15">15</option>
                              <option value="20">20</option>
                              <option value="25">25</option>
                            </select> 
                          </p>
                        </td>
                        <td>1,30€</td>
                      </tr>
                      <tr>
                        <td class="mdl-data-table__cell--non-numeric">Oréo</td>
                        <td>
                          <p>
                            <label for="qte"></label><br />
                            <select name="qte" id="qte">
                              <option value="0">0</option>
                              <option value="3">3</option>
                              <option value="5">5</option>
                              <option value="7">7</option>
                              <option value="10">10</option>
                              <option value="15">15</option>
                              <option value="20">20</option>
                              <option value="25">25</option>
                            </select> 
                          </p>
                        </td>
                        <td>1,30€</td>
                      </tr>
                      <tr>
                        <td class="mdl-data-table__cell--non-numeric"><input type="submit" name="valider" value="Valider"></td>
                      </tr>
                    </tbody>
                  </table>
                </form>
                <?php
                // $req->closeCursor();
                ?>
                <?php include("footer.php"); ?>
                </div>
            </main>
    </body>
</html>