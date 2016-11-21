<?php echo "Bienvenue " . $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?>
				

<h1>Espace Personnel</h1>
<!-- Image card -->
<div class="demo-card-image mdl-card mdl-shadow--2dp" style="position: relative; margin-bottom: 20%;">
  <div class="mdl-card__title mdl-card--expand"></div>
  <div class="mdl-card__actions">
    <span class="demo-card-image__filename"><?php echo $_SESSION['raison_sociale']; ?></span>
  </div>
</div>




