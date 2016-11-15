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
    <link rel="stylesheet" type="text/css" href="livredor.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff|Julius+Sans+One|Pinyon+Script|Rouge+Script" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="footer.css">
	<title>Livre d'or</title>
</head>
<body>
	<?php include("menus.php"); ?>
	<main class="mdl-layout__content">
        <div class="page-content">
        <!-- Your content goes here -->
	        <div class="formulaire">
	        	<h2>Laissez-nous un petit mot</h2>
				<form method="post" action="ciblelivredor.php">
					<p>
					<input type="text" name="chpnom" placeholder="nom"></p>
					<p>
					<textarea rows="7" cols="50" name="commentaire" placeholder="Votre commentaire"> </textarea></p>
					<p>
					<input type="button" name="envoyer" value="envoyer"></p>
				</form>
			</div>

    		<?php include("footer.php"); ?>
		</div>
    </main>
</body>
</html>