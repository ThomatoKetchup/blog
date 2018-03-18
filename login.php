<?php 

require "includes/connectDB.php";

session_start();
if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM membre WHERE mail = ? AND pass = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['mail'] = $userinfo['mail'];
         $_SESSION['connect'] = 1;
         $_SESSION['admin'] = $userinfo['admin'];

         header("Location: index.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}

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
   <div align="center">
      <h2>Connexion</h2>
      <br /><br />
      <form method="POST" action="">
         <input type="email" name="mailconnect" placeholder="Mail" />
         <input type="password" name="mdpconnect" placeholder="Mot de passe" />
         <br /><br />
         <input type="submit" name="formconnexion" value="Se connecter !" />
      </form>
      <?php
      if(isset($erreur)) {
         echo '<font color="red">'.$erreur."</font>";
      }
      ?>

      <p >Vous n'avez pas de compte? <a href="inscription.php">Inscrivez vous</a></p>
   </div>

   
   <?php
   include_once "includes/footer.php";
   ?>
</body>