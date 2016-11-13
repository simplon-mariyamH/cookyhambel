<?php
/*try
{
// On se connecte à MySQL
$bdd = new PDO('mysql:host=localhost;dbname=cooky_ham;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
// En cas d'erreur, on affiche un message et on arrête tout
die('Erreur : '.$e->getMessage());
}
$affichage = $bdd -> query('SELECT civilite, nom, prenom, mail FROM inscription');
while ($donnees = $affichage -> fetch())
{
echo $donnees['civilite'] . ' ' . $donnees['nom'] . ' ' . $donnees['prenom'] . ' un mail de confirmation va vous être envoyé à l\'adresse suivante : ' . '<br />' . $donnees['mail'] . ' veuillez penser à regarder dans vos spams/courriers indésirables, si vous ne recevez aucun mail dans les 24h. <br /> Respectueusement Cooky Ham.';
}

$affichage -> closeCursor();*/
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.grey-pink.min.css" />
        <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
        <link rel="stylesheet" type="text/css" href="inscription.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <title>Inscription</title>
    </head>
    <body>
        
        <?php include("menus.php"); ?>
            <main class="mdl-layout__content">
                <div class="page-content">
                <!-- Your content goes here -->
                    <div class="entete">
                        <h1>Inscription</h1>
                        <h5>
                        Veuillez entrer les informations suivantes afin de vous inscrire
                        <p>*les champs ayant un astérisque étant obligatoires</p>
                        </h5>
                    </div>
                    <div class="container">
                        <div class="subtitle">
                            <h4>Personnel</h4>
                        </div>
                        <form method="post" action="cibleinscription.php">
                            Civilité : 
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                <input type="radio" id="option-1" class="mdl-radio__button" name="civilite" value="Monsieur" checked>
                                <span class="mdl-radio__label">Monsieur</span>
                            </label>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                                <input type="radio" id="option-2" class="mdl-radio__button" name="civilite" value="Madame">
                                <span class="mdl-radio__label">Madame</span>
                            </label>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
                                <input type="radio" id="option-3" class="mdl-radio__button" name="civilite" value="Mademoiselle">
                                <span class="mdl-radio__label">Mademoiselle</span>
                            </label></p>
                            
                            <p>
                            	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                	<input class="mdl-textfield__input" type="text" name="nom" id="sample3">
                                	<label class="mdl-textfield__label" for="sample3">Nom : </label>
                            	</div>
                            </p>

                            <p>
                            	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                	<input class="mdl-textfield__input" type="text" name="prenom" id="sample3">
                                	<label class="mdl-textfield__label" for="sample3">Prenom : </label>
                            	</div>
                            </p>

                            <p>
                            	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                	<input class="mdl-textfield__input" type="text" name="mail" id="sample3">
                                	<label class="mdl-textfield__label" for="sample3">Mail : </label>
                            	</div>
                            </p>

                            <p>
                            	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                	<input class="mdl-textfield__input" type="password" name="mdp" id="sample3">
                                	<label class="mdl-textfield__label" for="sample3">Mot de passe : </label>
                            	</div>
                            </p>

                            <p>
                            	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                	<input class="mdl-textfield__input" type="password" name="mdp2" id="sample3">
                                	<label class="mdl-textfield__label" for="sample3">Confirmation mot de passe : </label>
                            	</div>
                            </p>

                            <p>
                            	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                	<input class="mdl-textfield__input" type="text" name="adresse" id="sample3">
                                	<label class="mdl-textfield__label" for="sample3">Adresse : </label>
                            	</div>
                            </p>

                            <!-- Numeric Textfield with Floating Label -->
                            <p>
                            	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                	<input class="mdl-textfield__input" type="text" name="numero" pattern="-?[0-9]*(\.[0-9]+)?" id="sample4">
                                	<label class="mdl-textfield__label" for="sample4">Numero fixe...</label>
                                	<span class="mdl-textfield__error">Input is not a number!</span>
                            	</div>
                            </p>

                            <p>
                            	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                	<input class="mdl-textfield__input" type="text" name="portable" pattern="-?[0-9]*(\.[0-9]+)?" id="sample4">
                                	<label class="mdl-textfield__label" for="sample4">Numero portable...</label>
                                	<span class="mdl-textfield__error">Input is not a number!</span>
                            	</div>
                            </p>

                            <div class="subtitle">
                                <h4>Professionnel</h4>
                            </div>

                            <p>
                            	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                	<input class="mdl-textfield__input" type="text" name="nom_ets" id="sample3">
                                	<label class="mdl-textfield__label" for="sample3">Nom de l'établissement : </label>
                            	</div>
                            </p>

                            <p>
                            	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                	<input class="mdl-textfield__input" type="text" name="raison_sociale" id="sample3">
                                	<label class="mdl-textfield__label" for="sample3">Raison Sociale : </label>
                            	</div>
                            </p>

                            <p>
                            	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                	<input class="mdl-textfield__input" type="text" name="siret" pattern="-?[0-9]*(\.[0-9]+)?" id="sample4">
                                	<label class="mdl-textfield__label" for="sample4">N° SIRET/SIREN :</label>
                                	<span class="mdl-textfield__error">Input is not a number!</span>
                            	</div>
                            </p>

                            <p>
                            	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                	<input class="mdl-textfield__input" type="text" name="mail2" id="sample3">
                                	<label class="mdl-textfield__label" for="sample3">Mail : </label>
                            	</div>
                            </p>

                            <p>
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" name="adresse2" id="sample3">
                                    <label class="mdl-textfield__label" for="sample3">Adresse : </label>
                                </div>
                            </p>

                            <p>
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" name="numero2" pattern="-?[0-9]*(\.[0-9]+)?" id="sample4">
                                    <label class="mdl-textfield__label" for="sample4">Numero fixe...</label>
                                    <span class="mdl-textfield__error">Input is not a number!</span>
                                </div>
                            </p>

                            <p>
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input class="mdl-textfield__input" type="text" name="portable2" pattern="-?[0-9]*(\.[0-9]+)?" id="sample4">
                                    <label class="mdl-textfield__label" for="sample4">Numéro portable...</label>
                                    <span class="mdl-textfield__error">Input is not a number!</span>
                                </div>
                            </p>
                            
                            <p>
                            	<input class="btn" type="submit" name="submit" value="Valider">
                            </p>

                        </form>
                    </div>
                </div>
            </main>
            
        <?php include("footer.php"); ?>
    </body>
</html>