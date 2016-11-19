<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.grey-pink.min.css" />
        <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
        <link rel="stylesheet" type="text/css" href="panier.css"><link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff|Julius+Sans+One|Pinyon+Script|Rouge+Script|Roboto" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="footer.css">
        <title>Commande</title>
    </head>
    <body>
        
        <?php include("menus.php"); ?>
            <main class="mdl-layout__content">
                <div class="page-content">
                <!-- Your content goes here -->
                
                <form method="post" action="ciblecommande.php">
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
                        <td class="mdl-data-table__cell--non-numeric">
                        <p>
                            <label for="gout"></label><br />
                            <select name="gout" id="gout">
                              <option value="1">Kinder Bueno</option>
                              <option value="2">Spéculos</option>
                              <option value="3">Oréo</option>
                              <option value="4">Kinder Bueno White</option>
                              <option value="5">Caramel Beurre Salé</option>
                              <option value="6">Vacherin Citron</option>
                            </select> 
                          </p>
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
                  <!--     <tr>
                        <td class="mdl-data-table__cell--non-numeric">
                          <p>
                            <label for="gout"></label><br />
                            <select name="gout" id="gout">
                              <option value="2">Speculos</option>
                              <option value="1">Kinder Bueno</option>
                              <option value="3">Oréo</option>
                            </select> 
                          </p>
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
                        <td class="mdl-data-table__cell--non-numeric">
                          <p>
                            <label for="gout"></label><br />
                            <select name="gout" id="gout">
                              <option value="3">Oréo</option>
                              <option value="1">Kinder Bueno</option>
                              <option value="2">Speculos</option>
                            </select> 
                          </p>
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
                      <tr> -->
                        <td class="mdl-data-table__cell--non-numeric">
                        <input type="submit" name="ajouter" value="Ajouter au panier">
                        <!-- <div class="mdl-layout-spacer"></div> -->
                        </td>
                        <td>
                        <a href="panier.php"><input type="button" name="aller" value="Aller au panier"></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </form>
                </div>
            </main>
            
        <?php include("footer.php"); ?>
    </body>
</html>