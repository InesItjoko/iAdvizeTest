<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<title>YAPS.com</title>       
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/css.css" media="all"/>
		<link rel="stylesheet" href="css/test.css" type="text/css"/> 
		<link rel="stylesheet" type="text/css" href="css/css_form.css">
		<link rel="stylesheet" type="text/css" href="css/valider_panier.css">
		<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
		<script type="text/javascript" src="js/Verifi_form.js"></script>
		<script type="text/javascript" src="js/connexion_accueil.js"></script>
	</head>

	<body>
		<div id="bg">
			<div id="outer">

				<?php
					include_once('template/entete.php');
	
					//TODO : mettre !isset
					if(isset($_SESSION['login'])) {
						// On redirige l'utilisateur vers une page de login s'il n'est pas connecté
						header('Location:login.php');
					}	
					else
					{	
				?>
				<div id="main">
					<p>LE CONTENU ICI</p>
				</div><!--Fin du div main-->
			</div><!--Fin du div outer-->
			<?php 
			} 
			include_once('template/pied.php');
			?>
		</div><!--Fin du div bg-->
	</body>			
</html>	
	
	

 
               


