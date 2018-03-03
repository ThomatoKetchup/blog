<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');

if(isset($_POST['signin'])) {
   echo"ok";
	if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['pwd']) AND !empty($_POST['mdp2']))}
?>

<!DOCTYPE html>
<?php
require "includes/head.php";
?>
<body>
	<?php
	include_once "includes/header.php";

	include_once "includes/menu.php";
	?>




	<form name="signin " action="" method="POST">
		<h2>S'inscrire</h2>
		<table>
			<tr>
				<td>
					<label for="pseudo">Pseudo :</label> 
				</td>
				<td>
					<input type="text" name="pseudo"/>
				</td>
			</tr>
			<tr>
				<td>
					<label>Adresse mail :</label>
				</td>
				<td>
					<input type="text" name="mail"/>
				</td>
			</tr>
			<tr>
				<td>
					<label>Mot de passe :</label>
				</td>
				<td>
					<input type="text" name="pwd"/>
				</td>
			</tr>
			<tr>
				<td>
					<label>Confirmez votre mot de passe :</label>
				</td>
				<td>
					<input type="text" name="pwd2"/>
				</td>
			</tr>

		</table>		
		<input type="submit" name="signin" value="S'inscrire">
	</form>

	<?php
	include_once "includes/footer.php";
	?>
</body>