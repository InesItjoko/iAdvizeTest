<?php
$rowCount=5;
echo "<script type='text/javascript'>ROW_COUNT=".$rowCount."</script>";
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<title>YAPS.com</title>
		<meta http-equiv="Content-Type"  charset="iso-8859-1" />   
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/css.css" media="all"/>
		<link rel="stylesheet" href="css/test.css" type="text/css"/> 
		<link rel="stylesheet" type="text/css" href="css/css_form.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript" src="js/caroussel_accueil.js"></script>
		<link rel="stylesheet" type="text/css" href="css/caroussel_accueil.css" />
		<script src="utils/ga.js" type="text/javascript"></script>
		<?php
			include_once("utils/include_ga.html");
		?>
	</head>

	<body>
		<button id="btn">Click me</button>
		<script>
			$("#btn").click(function() {
				/*$.post("https://www.google-analytics.com/collect?v=1&tid=UA-96477511-1&cid=110037044258747808257&t=event&ec=video&ea=play&el=holiday&ev=300", function(data, status) {
					console.log(data);
					console.log(status);
				})*/
				event("iAdvize", "test", "Chat", "300");

			}); 
		</script>
		<div id="bg">
			<div id="outer">
				<?php
					include_once('template/entete.php');
				?>
				<div id="main">
					<div id="content_main">
					<?php
					if ($rowCount!=0){				
					?>

						<span id="precedant"><img border="0" src="images/previous.jpg" alt="Précédant" width="50" height="50"/></span>
						<span id="suivant"><img border="0" src="images/next.jpg" alt="Suivant" width="50" height="50"/></span>
						<div id="caroussel">
						<?php
						$row=0;
						$i=2;
						while( $i)
						{
								echo '<div id="'.$row.'" class="caroussel">';
								$arr = array ('fish1.jpg', 'dog2.jpg');
								$catPreference = array ('Categorie : Poissons', 'Categorie: Chiens');
								$cat = array ('fish', 'dog');
								echo '<a href="productlist.php?categorie='.$cat[$row].'"><img class="image_category" src="images/'.$arr[$row].'"/></a>';

								echo '<p class="titre">'.$catPreference[$row].'</p>';
								echo '<p> Cliquez sur l image pour accéder à la liste des produits</p>';
								echo '</div>';
								$row++;
								$i--;
						}
						?>
						</div><!--Fin du div caroussel-->
					<?php } else echo '<p class="error">Aucune catégorie dans la base de donnée</p>'; ?>
		      </div><!--Fin du content main-->


				</div><!--Fin du div main-->
			</div><!--Fin du div outer-->
			<?php
			include_once('template/pied.php');
			?>
		</div><!--Fin du div bg-->
	</body>			
</html>	
	
	

 
               


