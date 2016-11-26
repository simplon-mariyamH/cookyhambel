<?php 
session_start();

include("database.php");

$login_valide = $_POST['mail'];
$mdp_valide = $_POST['mdp'];

$req = $bdd->prepare('SELECT * FROM inscription WHERE mail = :mail AND mdp = :mdp');
$req->execute(array(
	'mail' => $login_valide,
	'mdp' => $mdp_valide
	));

$donnees = $req->fetch();

if ((isset($_POST['mail']) AND !empty(htmlspecialchars($_POST['mail']))) AND (isset($_POST['mdp']) AND !empty(htmlspecialchars($_POST['mdp'])))) {
	if (!$donnees) {
		// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
		echo '<body onLoad="alert(\'Membre non reconnu...\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=connexion.php">';
	}
	else {
		
		$_SESSION['id'] = $donnees['id'];
		$_SESSION['mail'] = $login_valide;
		$_SESSION ['nom'] = $donnees['nom'];
		$_SESSION ['prenom'] = $donnees['prenom'];
		$_SESSION['civilite'] = $donnees['civilite'];
		$_SESSION['numero'] = $donnees['numero'];
		$_SESSION['portable'] = $donnees['portable'];
		$_SESSION['raison_sociale'] = $donnees['raison_sociale'];
		$_SESSION['siret'] = $donnees['siret'];
		$_SESSION['adresse2'] = $donnees['adresse2'];
		$_SESSION['numero2'] = $donnees['numero2'];
		$_SESSION['portable2'] = $donnees['portable2'];


		//echo 'Bienvenue ' . $_SESSION['mail'];

		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=connexion.php">';


		//MON HEADER LOCATION N'A PAS VOULU FONCTIONNER POURQUOI ? CA ME RETOURNE A LA MEME PAGE AU LIEU DE LA PAGE 6 !!! 
		//header('location : connexion.php');
		
	}
}
else {
	echo 'Les variables du formulaire ne sont pas déclarées.';
}

 ?>