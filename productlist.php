<?php
error_reporting(E_ALL);
define("GET_CATEGORIE", "categorie");
//La catégorie est passée de manière visible dans l'URL.
$rowCount=5;

		//Initialisation d'une variable JavaScript !
		echo "<script type='text/javascript'>ROW_COUNT=".$rowCount."</script>";

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<title>YAP.com <?php echo $var= (isset($_GET[GET_CATEGORIE]))? "Liste des ".$_GET[GET_CATEGORIE]: "Aucune catégorie"?></title>
		<meta http-equiv="Content-Type"  charset="iso-8859-1" />   
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/css.css" media="all"/>
		<link rel="stylesheet" href="css/test.css" type="text/css"/> 
		<link rel="stylesheet" type="text/css" href="css/css_form.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript" src="js/caroussel.js"></script>
		<link rel="stylesheet" type="text/css" href="css/caroussel.css" />
		
	
	</head>

	<body>
		<div id="bg">
			<div id="outer">
				<div id="ajax">
				<?php
					
					include_once('template/entete.php');
				?>
				</div>
			
				<div id="main">
					<div id="content_main">
					<?php
						//La catégorie est passée de manière visible dans l'URL.
						if (isset($_GET[GET_CATEGORIE])){
								if ($rowCount!=0){				
						?>

						<span id="precedant"><img border="0" src="images/previous.jpg" alt="Précédant" width="50" height="50"/></span>
						<span id="suivant"><img border="0" src="images/next.jpg" alt="Suivant" width="50" height="50"/></span>
						<div id="caroussel">
								<?php
								$row=0;
								$i=4;
								$ii=1;
			
									while( $i)
									{
											echo '<div id="'.$row.'" class="caroussel">';
											echo '<img id="image_'.$row.'" class="image" src="images/'.$_GET[GET_CATEGORIE].$ii.'"/>';
											echo '<table id="descr_produit_'.$row.'" class ="table_desc" width="100%" border="0" cellspacing="0" cellpadding="0">';
											echo '<p> Cliquez sur l image pour le descriptif du produit</p>';
								?>
											<tr>
												<th>Prix</th>
												<th>Quantité</th>
												<th>Info</th>
												<th>Ajouter au panier</th>
											</tr>

<?php
												

												echo '<td align="center"><img  class="img_panier" src="images/cartHL.gif"></td>';
												//echo 'onClick="refreshBandeau();"';
												echo "</tr>";
											
											echo "</table>";
											echo '</div>';
											$ii++;
											$row++;
											$i--;
								}

							?>
		
							<select onchange="selectionPage(this.value)" id="select_nb_animaux">
								<option value="1">1 <?php echo $_GET[GET_CATEGORIE]?> par page </option>
								<option value="2">2 <?php echo $_GET[GET_CATEGORIE]?> par page </option>
								<option value="3">3 <?php echo $_GET[GET_CATEGORIE]?> par page </option>
								<option value="4">4 <?php echo $_GET[GET_CATEGORIE]?> par page </option>
							</select>

						</div><!--Fin du div caroussel-->

		      </div><!--Fin du content main-->

					<?php
							} else echo '<p class="error">Aucun animal catégorié dans '.$_GET[GET_CATEGORIE]."<p>";
					} else echo '<p class="error">Aucune catégorie sélectionnée<p>';
					?>

				</div><!--Fin du div main-->
			</div><!--Fin du div outer-->
			<?php 
			
			include_once('template/pied.php');
			?>
		</div><!--Fin du div bg-->
	</body>			
</html>	



