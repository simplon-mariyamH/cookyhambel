<?php 
session_start();
include('delete.php');
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
	<title>Déconnexion</title>
</head>
<body>
	<?php include("menus.php"); ?>
		<main class="mdl-layout__content">
	        <div class="page-content">
	        <!-- Your content goes here -->
	        	<div style="font-family:'Julius Sans One', sans-serif; margin-top: 5%;">	<h1 style="font-family:'Julius Sans One', sans-serif;">Vous êtes bien déconnecté</h1> 
	        	<h2 style="font-family:'Julius Sans One', sans-serif;">A bientôt !</h2>
	        		<!--<h4 style="font-family:'Julius Sans One', sans-serif;"><a href="connexion.php">SE CONNECTER</a></h4>-->
	        	</div>    	
	        </div>
		</main>
	<?php include("footer.php"); ?>
</body>
</html>