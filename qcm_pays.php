<?php 

try
	{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch(Exception $e)
	{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
	}
	//$affichage = $bdd -> query('SELECT pays.nom AS nom_pays, langue.nom AS nom_langue, capitale FROM pays, langue WHERE pays.id_langue=langue.id');
	$affichage = $bdd -> query('SELECT pays.nom p, langue.nom l, capitale c FROM pays, langue WHERE pays.id_langue=langue.id');
								//SELECT id, UCASE(prenom) AS prenom_upper, UCASE(nom) AS nom_upper, ville FROM utilisateur
	while ($donnees = $affichage -> fetch())
	{
	//echo 'En ' . $donnees['nom_pays'] . ' on parle ' . $donnees['nom_langue'] . ' et sa capitale est ' . $donnees['capitale']. '.<br />';
	echo 'En ' . $donnees['p'] . ' on parle ' . $donnees['l'] . ' et sa capitale est ' . $donnees['c']. '.<br />';
	}

	$affichage -> closeCursor();
	?>
