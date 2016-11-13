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
	<title>formulaire d'acces aux codes secrets</title>
</head>
<body>

	<?php include("menus.php"); ?>
		<main class="mdl-layout__content">
	        <div class="page-content">
	        <!-- Your content goes here -->
				<h4 style="font-family:'Julius Sans One', sans-serif;">
					Service de tiramisu pour professionnels depuis 2007
				</h4>
				<p style="font-family:'Julius Sans One', sans-serif;">
					Bonjour, veuillez vous connecter afin d'accéder à votre compte
				</p>
				<div class="container">
					<img src="13271536_10208070412510558_52333288_o.png">
					<CENTER>
						<form method="post" action="cibleconnexion.php">
							<p class="case">Login</p>
							<p><input type="text" name="prenom" /></p>

							<p class="case">Passeword</p>
							<p><input type="password" name="mdp" /></p>

							<p><input type="submit" name="submit" value="Valider" class="btn-login"/></p> 
						</form>
					</CENTER>
					<p>
						Pas encore inscrit ?
						<a href="inscription.php"> Inscrivez-vous ici !</a>
					</p>
					<p>
						Bien à vous, Cooky Ham !
					</p>
				</div>
			</div>
		</main>
		<?php include("footer.php"); ?>
	</div>

</body>
</html>