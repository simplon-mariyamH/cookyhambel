<?php 
//session_start();
//peut-être qu'il faudrait que j'enlève ce session_start(); psk je ne veux pas qu'ici ma session s'ouvre mais après il faudra se connecter donc faire un header location sur la page de connection ? ou faire qu'on soit déjà connecté à partir d'ici ?

include("database.php");
// Si tout va bien, on peut continuer
if ((isset($_POST['civilite']) AND $_POST['civilite']!=='') 
	AND (isset($_POST['nom']) AND $_POST['nom']!=='') 
	AND (isset($_POST['prenom']) AND $_POST['prenom']!=='') 
	AND (isset($_POST['mail']) AND $_POST['mail']!=='') 
	AND (isset($_POST['mdp']) AND $_POST['mdp']!=='')  
	AND (isset($_POST['portable']) AND $_POST['portable']!=='') 
	AND (isset($_POST['raison_sociale']) AND $_POST['raison_sociale']!=='') 
	AND (isset($_POST['siret']) AND $_POST['siret']!=='') 
	AND (isset($_POST['adresse2']) AND $_POST['adresse2']!==''))
{
$civilite = $_POST['civilite'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$mdp = sha1('gz' . $_POST['mdp']);
$numero = $_POST['numero'];
$portable = $_POST['portable'];
$raison_sociale = $_POST['raison_sociale'];
$siret = $_POST['siret'];
$adresse2 = $_POST['adresse2'];
$portable2 = $_POST['portable2'];
$req = $bdd->prepare('INSERT INTO inscription (civilite, nom, prenom, mail, mdp, numero, portable, raison_sociale, siret, adresse2, portable2) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
$req -> execute(array(
	$civilite, 
	$nom, 
	$prenom, 
	$mail, 
	$mdp,  
	$numero, 
	$portable, 
	$raison_sociale, 
	$siret, 
	$adresse2, 
	$portable2
	));

include("mail.php");
//=====Envoi de l'e-mail.
mail($mails,$sujet,$message,$header);
//==========


echo '<meta http-equiv="refresh" content="0;URL=validationinscription.php">';

// header('Location: validationinscription.php');
	
} else {
	echo 'vous n\'avez pas renseigner tous les champs obligatoires, merci de renseigner tous les champs comportant un astérisque';
}
?>
