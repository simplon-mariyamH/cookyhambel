
  <style>
  .demo-layout-waterfall .mdl-layout__header-row .mdl-navigation__link:last-of-type  {
    padding-right: 0;
  }
  </style>

  <div class="demo-layout-waterfall mdl-layout mdl-js-layout">
    <header class="mdl-layout__header mdl-layout__header--waterfall">
      <!-- Top row, always visible -->
      <div class="mdl-layout__header-row">
        <!-- Title -->
        <span class="mdl-layout-title">Cooky Ham</span>
        <div class="mdl-layout-spacer"></div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                    mdl-textfield--floating-label mdl-textfield--align-right">
          <label class="mdl-button mdl-js-button mdl-button--icon"
                 for="waterfall-exp">
            <i class="material-icons">search</i>
          </label>
          <div class="mdl-textfield__expandable-holder">
            <input class="mdl-textfield__input" type="text" name="sample"
                   id="waterfall-exp">
          </div>
        </div>
      </div>
      <!-- Bottom row, not visible on scroll -->
      <div class="mdl-layout__header-row">
        <div class="mdl-layout-spacer"></div>
        <!-- Navigation -->
        <nav class="mdl-navigation">

          <a class="mdl-navigation__link" href="connexion.php">Accueil</a>
          <a class="mdl-navigation__link" href="connexion.php">Connexion</a><!-- déconnexion quand connecté -->
          <a class="mdl-navigation__link" href="galerie.php">Galerie</a>
          <a class="mdl-navigation__link" href="produits.php">Produits</a>
          <!-- FAIRE FUSIONNER AVEC LE BADGE DE NOMBRE DE PRODUITS DANS LE PANIER ET REGLER CE NOMBRE<a class="mdl-navigation__link" href="">Panier</a>-->
          <!-- Number badge -->
          <span class="mdl-badge" data-badge="4" href="panier.php">Panier</span>

          <a class="mdl-navigation__link" href="">Livre d'or</a>
        </nav>
      </div>
    </header>
    <div class="mdl-layout__drawer">
      <span class="mdl-layout-title">Menu <!--<style type="text/css">
        span {
          text-align: left;
          margin-left: 53px;
        }
        </style>-->
      </span>
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="connexion.php">Accueil</a>
        <a class="mdl-navigation__link" href="connexion.php">Connexion/Inscription</a><!-- disparait une fois connecter / déconnexion quand connecté -->
        <a class="mdl-navigation__link" href="">Histoire</a>
        <a class="mdl-navigation__link" href="produits.php">Produits</a>
        <a class="mdl-navigation__link" href="galerie.php">Galeries</a>
        <a class="mdl-navigation__link" href="panier.php">Panier</a>
        <a class="mdl-navigation__link" href="">Historique</a><!-- apparait une fois connecter--> 
        <a class="mdl-navigation__link" href="">Livre d'or</a> 
        <a class="mdl-navigation__link" href="">Contacter</a>
      </nav>
    </div>
    