<?php
error_reporting(E_ALL);
define("GET_CATEGORIE", "categorie");
//La catégorie est passée de manière visible dans l'URL.
$rowCount=5;

		//Initialisation d'une variable JavaScript !
		echo "<script type='text/javascript'>ROW_COUNT=".$rowCount."</script>";

?>

<html>

	<head>
		<title>iAdvice exercice</title>
		<meta http-equiv="Content-Type"  charset="iso-8859-1" />   
		<link rel="stylesheet" type="text/css" href="css/home1.css" />
    	<!--<script src="tutorial01.slider/js/jssor.slider-23.0.0.min.js" type="text/javascript"></script>-->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    	<script src="utils/ga.js" type="text/javascript"></script>
		<!--<script type="text/javascript" src="js/caroussel_accueil.js"/>
		<link rel="stylesheet" type="text/css" href="css/caroussel_accueil.css" />-->
		<?php include_once("utils/include_ga.html"); ?>
	</head>

	<body>

		<img id="logo" src="images/logo.png"/>
		<h2>The conversational commerce platform</h2>

		<?php include("tutorial01.slider/standard.html"); ?>

		<footer>Designed by Inès ITJOKO</footer>
	</body>
</html>