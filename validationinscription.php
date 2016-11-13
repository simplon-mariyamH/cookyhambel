<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.grey-pink.min.css" />
    <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
    <link rel="stylesheet" type="text/css" href="inscription.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<title>Validation</title>
</head>
<body>

	<?php include("menus.php"); ?>
        <main class="mdl-layout__content">
            <div class="page-content">
            <!-- Your content goes here -->
            <?php
				try
				{
				// On se connecte à MySQL
				$bdd = new PDO('mysql:host=localhost;dbname=cooky_ham;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
				}
				catch(Exception $e)
				{
				// En cas d'erreur, on affiche un message et on arrête tout
				die('Erreur : '.$e->getMessage());
				}
				$affichage = $bdd -> query('SELECT civilite, nom, prenom, mail FROM inscription');
				while ($donnees = $affichage -> fetch())
				{
				echo $donnees['civilite'] . ' ' . $donnees['nom'] . ' ' . $donnees['prenom'] ?>
				<p>un mail de confirmation va vous être envoyé à l'adresse suivante : </p>
				<?php $donnees['mail'] ?>
				<p>veuillez penser à regarder dans vos spams/courriers indésirables, si vous ne recevez aucun mail dans les 24h.</p> 
				<p>Respectueusement Cooky Ham.</p>
				<?php
				}

				$affichage -> closeCursor();
			?>
            </div>
        </main>

    <?php include("footer.php"); ?>

</body>
</html>