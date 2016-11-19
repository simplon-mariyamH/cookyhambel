<?php 
// try
// {
//     // On se connecte à MySQL
//     $bdd = new PDO('mysql:host=localhost;dbname=cooky_ham;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
// }
// catch(Exception $e)
// {
//     // En cas d'erreur, on affiche un message et on arrête tout
//         die('Erreur : '.$e->getMessage());
// }

include("database.php");

$login_valide = $_POST['mail'];
$mdp_valide = $_POST['mdp'];

$req = $bdd->prepare('SELECT id FROM inscription WHERE mail = :mail AND mdp = :mdp');
$req->execute(array(
	'mail' => $login_valide,
	'mdp' => $mdp_valide));

$donnees = $req->fetch();

if ((isset($_POST['mail']) AND !empty(htmlspecialchars($_POST['mail']))) AND (isset($_POST['mdp']) AND !empty(htmlspecialchars($_POST['mdp'])))) {
	if (!$donnees) {
		// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
		echo '<body onLoad="alert(\'Membre non reconnu...\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=connexion.php">';
	}
	else {
		session_start();
		$_SESSION['id'] = $donnees['id'];
		$_SESSION['mail'] = $login_valide;

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