<?php 

include("database.php");

// Si tout va bien, on peut continuer
if ((isset($_POST['qte']) AND $_POST['qte']!=='') AND (isset($_POST['gout']) AND $_POST['gout']!==''))
{
$quantite = $_POST['qte'];
$gout = $_POST['gout'];

$req = $bdd->prepare('INSERT INTO articles (quantite, id_gout) VALUES(?, ?)');
$req -> execute(array( 
	$quantite,
	$gout
	));

echo '<body onLoad="alert(\'Vos produits ont bien été ajouté au panier !\')">'; 
// puis on le redirige vers la page d'accueil
echo '<meta http-equiv="refresh" content="0;URL=commande.php">';

	
} else {
	echo '<body onLoad="alert(\'Erreur\')">'; 
}

?>
