<?php  

include("database.php"); 

$req = $bdd->prepare('DELETE FROM articles');
$req->execute();

?>