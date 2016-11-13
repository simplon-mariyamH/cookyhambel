<?php 
//session_start();
//peut-être qu'il faudrait que j'enlève ce session_start(); psk je ne veux pas qu'ici ma session s'ouvre mais après il faudra se connecter donc faire un header location sur la page de connection ? ou faire qu'on soit déjà connecté à partir d'ici ?

// Sous MAMP (Mac)
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
// Si tout va bien, on peut continuer
if ((isset($_POST['civilite']) AND $_POST['civilite']!=='') 
	AND (isset($_POST['nom']) AND $_POST['nom']!=='') 
	AND (isset($_POST['prenom']) AND $_POST['prenom']!=='') 
	AND (isset($_POST['mail']) AND $_POST['mail']!=='') 
	AND (isset($_POST['mdp']) AND $_POST['mdp']!=='') 
	AND (isset($_POST['adresse']) AND $_POST['adresse']!=='') 
	AND (isset($_POST['numero']) AND $_POST['numero']!=='') 
	AND (isset($_POST['portable']) AND $_POST['portable']!=='') 
	AND (isset($_POST['nom_ets']) AND $_POST['nom_ets']!=='') 
	AND (isset($_POST['raison_sociale']) AND $_POST['raison_sociale']!=='') 
	AND (isset($_POST['siret']) AND $_POST['siret']!=='') 
	AND (isset($_POST['mail2']) AND $_POST['mail2']!=='') 
	AND (isset($_POST['adresse2']) AND $_POST['adresse2']!=='') 
	AND (isset($_POST['numero2']) AND $_POST['numero2']!=='')
	AND (isset($_POST['portable2']) AND $_POST['portable2']!==''))




{

$civilite = $_POST['civilite'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$mdp = $_POST['mdp'];
$adresse = $_POST['adresse'];
$numero = $_POST['numero'];
$portable = $_POST['portable'];
$nom_ets = $_POST['nom_ets'];
$raison_sociale = $_POST['raison_sociale'];
$siret = $_POST['siret'];
$mail2 = $_POST['mail2'];
$adresse2 = $_POST['adresse2'];
$numero2 = $_POST['numero2'];
$portable2 = $_POST['portable2'];






$req = $bdd->prepare('INSERT INTO inscription (civilite, nom, prenom, mail, mdp, adresse, numero, portable, nom_ets, raison_sociale, siret, mail2, adresse2, numero2, portable2) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

$req -> execute(array(
	$civilite, 
	$nom, 
	$prenom, 
	$mail, 
	$mdp, 
	$adresse, 
	$numero, 
	$portable, 
	$nom_ets, 
	$raison_sociale, 
	$siret, 
	$mail2, 
	$adresse2, 
	$numero2, 
	$portable2
	));
header('Location: validationinscription.php');
	
} else {
	echo 'vous n\'avez pas renseigner tous les champs obligatoires, merci de renseigner tous les champs comportant un astérisque';
}


?>