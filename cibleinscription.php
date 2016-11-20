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
$mdp = $_POST['mdp'];
$numero = $_POST['numero'];
$portable = $_POST['portable'];
$raison_sociale = $_POST['raison_sociale'];
$siret = $_POST['siret'];
$adresse2 = $_POST['adresse2'];
$numero2 = $_POST['numero2'];
$portable2 = $_POST['portable2'];
$req = $bdd->prepare('INSERT INTO inscription (civilite, nom, prenom, mail, mdp, numero, portable, raison_sociale, siret, adresse2, numero2, portable2) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
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
	$numero2, 
	$portable2
	));

$mails = $mail; // Déclaration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mails)) // On filtre les serveurs qui rencontrent des bogues.
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}
//=====Déclaration des messages au format texte et au format HTML.
$message_txt = "Salut à tous, voici un e-mail envoyé par un script PHP.";
$message_html = "<html><head></head><body><b>Salut à tous</b>, voici un e-mail envoyé par un <i>script PHP</i>.</body></html>";
//==========
 
//=====Création de la boundary
$boundary = "-----=".md5(rand());
//==========
 
//=====Définition du sujet.
$sujet = "Hey mon ami !";
//=========

//=====Création du header de l'e-mail
$header = "From: \"MARIYAM.HAMDAOUI\"<MARIYAM.HAMDAOUI@GMAIL.COM>".$passage_ligne;
$header.= "Reply-to: \"MARIYAM.HAMDAOUI\" <MARIYAM.HAMDAOUI@GMAIL.COM>".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/alternative;".$passage_ligne." 
boundary=\"$boundary\"".$passage_ligne;
//==========

//=====Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format texte.
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format HTML
$message .= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message .= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========

//=====Envoi de l'e-mail.
mail($mails,$sujet,$message,$header);
//==========


echo '<meta http-equiv="refresh" content="0;URL=validationinscription.php">';

// header('Location: validationinscription.php');
	
} else {
	echo 'vous n\'avez pas renseigner tous les champs obligatoires, merci de renseigner tous les champs comportant un astérisque';
}
?>
