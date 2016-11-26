<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.grey-pink.min.css" />
    <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
    <link rel="stylesheet" type="text/css" href="inscription.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff|Julius+Sans+One|Pinyon+Script|Rouge+Script|Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<title>Validation</title>
</head>
<body>

	<?php include("menus.php"); ?>
        <main class="mdl-layout__content">
            <div class="page-content">
            <!-- Your content goes here -->
            <?php
				include('database.php');
				
				$affichage = $bdd -> query('SELECT * FROM inscription ORDER BY id DESC LIMIT 0, 1');

				$donnees = $affichage -> fetch();

				
				?><p><?php echo $donnees['civilite'] . ' ' . $donnees['nom'] . ' ' . $donnees['prenom'] ?> votre inscription à bien été pris en compte;</p>
				<p>Un mail de confirmation va vous être envoyé à l'adresse suivante : 
				<?php echo $donnees['mail']; ?> .</p>
				<p>Veuillez penser à vérifier vos spams/courriers indésirables. Si vous ne recevez aucun mail dans les 24h, contactez-nous.</p> 
				<p>Respectueusement Cooky Ham.</p>
				<?php
				

				$affichage -> closeCursor();
			?>
            </div>

        </main>

			<?php include("footer.php"); ?>

</body>
</html>
<!-- <?php 
$mail = $donnees['mail']; // Déclaration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
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
mail($mail,$sujet,$message,$header);
//==========

?> -->