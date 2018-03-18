<?php
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=blogdb;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}

	if(isset($_POST['inscription'])) {
		extract($_POST);
   	$login = htmlspecialchars($_POST['login']);
  
   	$pass = sha1($_POST['pass']);
   	$pass_confirm = sha1($_POST['pass_confirm']);
	 $q = $bdd->prepare("INSERT INTO membres(login,pass) VALUES(:login,:pass)");
     $q->execute([ 
     	'login' => $login,
     	'pass' => $pass
     ]);
   	
   	/*if(!empty($_POST['login']) AND !empty($_POST['pass']) AND !empty($_POST['pass_confirm'])) {
      $pseudolength = strlen($login);
      if($pseudolength <= 255) {

          if($pass == $pass_confirm) {


                 $insertmbr = $bdd->prepare("INSERT INTO membres(login,pass) VALUES(?,?)");

                 $insertmbr->execute(array($login,$pass));
                 $erreur = "Votre compte a bien été créé ! <a href=\"connexion.php\">Me connecter</a>";
                           	      	          	                       	echo'je suis laaa';

                  } else {
                  	      	          	                       	echo'je suis la';

                     $erreur = "Vos mots de passes ne correspondent pas !";
                  }
               } 
      	} else 
      	{
         	$erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
      	}*/
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
?>




<!DOCTYPE html>

<?php
	require "includes/head.php";
?>
<html>

<body>
	<?php
		include_once "includes/header.php";
		include_once "includes/menu.php";
	?>



	<form name="inscription " action="test.php" method="POST">
		<h2>S'inscrire</h2>
		<table>
			<tr>
				<td>
					<label for="login">Login :</label> 
				</td>
				<td>
					<input type="text" name="login"/>
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
					<input type="text" name="pass"/>
				</td>
			</tr>
			<tr>
				<td>
					<label>Confirmez votre mot de passe :</label>
				</td>
				<td>
					<input type="text" name="pass_confirm"/>
				</td>
			</tr>

		</table>		
		<input type="submit" name="inscription" value="Inscription">
	</form>
<!--
	Inscription à l'espace membre :<br />
		<form action="inscription" method="post">
		Login : <input type="text" name="login" value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>"><br />
		Mot de passe : <input type="password" name="pass" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>"><br />
		Confirmation du mot de passe : <input type="password" name="pass_confirm" value="<?php if (isset($_POST['pass_confirm'])) echo htmlentities(trim($_POST['pass_confirm'])); ?>"><br />
		<input type="submit" name="inscription" value="Inscription">
		</form> 
		<?php
		if (isset($erreur)) echo '<br />',$erreur;
		?>-->

	<?php
		include_once "includes/footer.php";
	?>
</body>
</html>