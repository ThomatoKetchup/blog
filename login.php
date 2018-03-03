<!DOCTYPE html>
<?php
require "includes/head.php";
?>
<body>
	<?php
	include_once "includes/header.php";

	include_once "includes/menu.php";
	?>




	<form name="connexion" action="test" method="POST">
		<h2>Se connecter</h2>
		<label for="pseudo">Pseudo :</label> 
		<input type="text" name="pseudo"/>
		<label>Mot de passe :</label>
		<input type="text" name="pwd"/>

		
		<input type="submit" value="Se connecter">

		<p class="inscrire">Vous n'avez pas encore de compte ? <a href="/blog/signin.php">Inscrivez-vous</a></p>

	</form>




	
	<?php
	include_once "includes/footer.php";
	?>
</body>