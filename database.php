<?php 
try{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=mysql.hostinger.fr;dbname=u551527792_cooky;charset=utf8', 'u551527792_ham', 'mvtmjsunp', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch(Exception $e){
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}
?>