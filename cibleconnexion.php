
<?php

$codes = "jfkf, fireez et jiefhez.";
if ((isset($_POST['mdp']) AND $_POST['mdp'] ===  "kangourou") AND (isset($_POST['prenom']) AND $_POST['prenom'] ===  "toto@gmail.com")){
	echo "mot de passe valider, les codes secrets sont : ".$codes;

}
else {
	echo "le mot de passe et/ou l'adresse mail n'est pas valide.";
	/*, veuillez reesayer, cliquez ici pour retourner au formulaire :<a href="formulaire.php"></a> pour revenir au formulaire"*/
}
?>
