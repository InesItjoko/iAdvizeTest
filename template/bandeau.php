<?php
error_reporting(E_ALL);
?>
	<div id="loginBox">
		Bienvenue. Veuillez vous
		<a href="#login-box" class="login-window">Connecter</a>
		ou vous
		<a href="#" >Inscrire</a>.	
	</div>

	<!--Connexion non implémentée-->
	<div id="login-box" class="login-popup">
		<a href="#" class="close"><img src="../images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
		<fieldset class="textbox">
 			<table class="textbox">
				<form action="<?php $_SERVER['PHP_SELF']; ?> " method="post" class="signin" >
 					<tr>
						<label class="username">
							<td><span>Login</span></td>
							<td><input type="text" id="login" name="login" value="" type="text" autocomplete="on" placeholder="Login"></td>
						</label>
					</tr>				
					<tr>
						<label class="password">
							<td><span>Password</span></td>
							<td><input id="password" name="password" value="" type="password" placeholder="Password"></td>
						</label>
					</tr>
					<tr>
						<td><button class="submit button" type="submit" name="Connecter" id="Connecter">Connexion</button></td>
						<p>
							<td><a class="forgot" href="mailto:ines_itjoko@yahoo.fr">Avez vous oubliez votre mot de passe?</a></td></tr>
						</p>  
				</form>
			</table>
		</fieldset>
	</div>
 

