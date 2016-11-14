<?php 
session_start();
session_unset();
session_destroy();
header ('location : page.php')
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.grey-pink.min.css" />
	<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="connexion.css">
	<link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff|Julius+Sans+One|Pinyon+Script|Rouge+Script" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<title>formulaire d'acces aux codes secrets</title>
</head>
<body>

	<?php include("menus.php"); ?>
		<main class="mdl-layout__content">
	        <div class="page-content">
	        <!-- Your content goes here -->
	        	<div style="font-family:'Julius Sans One', sans-serif;">	<h1 style="font-family:'Julius Sans One', sans-serif;">Vous êtes bien déconnecté</h1> 
	        		<h4 style="font-family:'Julius Sans One', sans-serif;"><a href="connexion.php">SE CONNECTER</a></h4>
	        	</div>    	
				<?php include("footer.php"); ?>
	        </div>
		</main>
	</div>

</body>
</html>
<!--
TODO :: 1 - FAIRE DES SESSIONS
2 - RELIER PAR POST LE FORMULAIRE D'INSCRIPTION AVEC CELUI DE CONNEXION
3 - DIRE QUE LES VARIABLE MAIL ET MDP DE INSCRIPTION SONT CELLES DE LOGIN ET PASSEWORD
4 - DIRE QUE DONC ON UTILISE QUE LA BDD INSCRIPTION
5 - DIRE SI MAIL ET MDP EXISTENT ET S'ILS SONT RENSEIGNE 
6 - ENVOYER VERS OU UNE FOIS L'INSCRIPTION FAITE ? ON ENVOIE VERS UNE NOUVELLE PAGE OU VERS COMMANDE COMME SI ON SE CONNECTAIS ? OU COMME SI ON SE CONNECTAIS ET DONC LA ON AURAIT QUAND MEME UNE PETITE LIGNE POUR NOUS DIRE QU'ON EST BIEN CONNECTE ?
7 - SESSION START LE METTRE DANS TOUTES LES PAGES OU PAS ?
8 - OU METTRE ET NE PAS OUBLIER DE METTRE LE SESSION DESTROY, GENRE FAIRE UN BOUTON DECONNEXION DE PARTOUT VIA UN INCLUDE ? -->