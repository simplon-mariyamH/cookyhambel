<?php  
session_start();
?>

<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.grey-pink.min.css" />
	<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff|Julius+Sans+One|Pinyon+Script|Rouge+Script" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<title>Classiq'isu</title>
</head>
<body>
	<?php include("menus.php"); ?>
		<main class="mdl-layout__content">
	        <div class="page-content">
	        <!-- Your content goes here -->
	         	<div class="box">
	        		<div class="demo-card-event mdl-card mdl-shadow--2dp">
                      <div class="mdl-card__title mdl-card--expand">
                        <h4>
                         L'original : Café<br>
                          <img src="img2.png" alt="" width="210" height="220">
                        </h4>
                      </div>
                      <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="panier.php">
                           
                        <div class="mdl-layout-spacer"></div>
                        <i class="material-icons">shopping_basket</i>
                        COMMANDER
                        </a>
                        
                      </div>
                    </div>
                </div>
		        <?php include("footer.php"); ?>
			</div>
		</main>

</body>
</html>