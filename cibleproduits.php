<?php 

include("database.php");

// Si tout va bien, on peut continuer
if ((isset($_POST['qte']) AND $_POST['qte']!==''))
{
$quantite = $_POST['qte'];

$req = $bdd->prepare('INSERT INTO articles (quantite) VALUES(?)');
$req -> execute(array( 
	$quantite
	));

header('location:produits.php');
echo '<body onLoad="alert(\'Vos produits ont bien été ajouté au panier !\')">'; 

	
} else {
	echo '<body onLoad="alert(\'Erreur\')">'; 
}

?>


