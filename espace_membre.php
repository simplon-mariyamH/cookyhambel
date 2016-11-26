<style type="text/css">
  .card{
    position: relative;
    display: flex;
    justify-content: space-around;
  }
</style>

<h1 style="font-family:'Julius Sans One';">Espace Personnel</h1>
<h2 style="font-family:'Julius Sans One';"><?php echo "Bienvenue " . $_SESSION['nom'] . ' ' . $_SESSION['prenom']; ?></h2>
<!-- Image card -->
<div class="card">
  <div class="demo-card-image mdl-card mdl-shadow--2dp" style="position: relative; margin-bottom: 20%;">
    <div class="mdl-card__title mdl-card--expand"></div>
    <div class="mdl-card__actions">
      <span class="demo-card-image__filename"><?php echo $_SESSION['raison_sociale']; ?></span>
    </div>
  </div>
  <div class="card">
    <div class="demo-card-image mdl-card mdl-shadow--2dp" style="position: relative; margin-bottom: 20%; ">
    	<div class="mdl-card__actions">
        <span class="demo-card-image__filename">Historique des commandes</span>
      </div>
      <div class="mdl-card__title mdl-card--expand"></div>
      <div class="mdl-card__actions"></div>
  </div>
</div>



