<?php  

include("database.php"); 

if(isset($_GET['id'])){
	$id = $_GET['id'];

	if(is_numeric($id)){



		$req = $bdd->prepare('DELETE FROM articles WHERE id_article = ?');
		$test = $req->execute(array($id));

		echo '<meta http-equiv="refresh" content="0;URL=panier.php">';

		echo '<body onLoad="alert(\'Le produit à bien été supprimé...\')">';
	}else{

		echo '<body onLoad="alert(\'Error !\')">';
	}
}else{

	echo '<body onLoad="alert(\'Error !\')">';
}

?>