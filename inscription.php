<?php

require "includes/connectDB.php";

if(isset($_POST['forminscription'])) {
  $nom = htmlspecialchars($_POST['nom']);
  $prenom = htmlspecialchars($_POST['prenom']);
  $mail = htmlspecialchars($_POST['mail']);
  $mdp = sha1($_POST['mdp']);
  $mdp2 = sha1($_POST['mdp2']);
  if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['mail']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
    if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
     $reqmail = $bdd->prepare("SELECT * FROM membre WHERE mail = ?");
     $reqmail->execute(array($mail));
     $mailexist = $reqmail->rowCount();
     if($mailexist == 0) {
      if($mdp == $mdp2) {
       $insertmbr = $bdd->prepare("INSERT INTO membre(pass,nom,prenom,mail) VALUES(?, ?,?,?)");
       $insertmbr->execute(array($mdp, $nom, $prenom, $mail));
       $erreur = "Votre compte a bien été créé ! <a href=\"login.php\">Me connecter</a>";
     } else {
       $erreur = "Vos mots de passes ne correspondent pas !";
     }
   } else {
    $erreur = "Adresse mail déjà utilisée !";
  }
} else {
 $erreur = "Votre adresse mail n'est pas valide !";
}

} else {
 $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
}
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

  <div align="center">
   <h2>Inscription</h2>
   <br /><br />
   <form method="POST" action="">
    <table>
      <tr>
       <td align=right>
        <label>Nom :</label>
      </td>
      <td>
        <input type="text" placeholder="Votre nom" id="nom" name="nom" value="<?php if(isset($nom)) { echo $nom; } ?>" />					
      </td>
    </tr>
    <tr>
      <td align="right">
       <label for="prenom">Prenom :</label>
     </td>
     <td>
       <input type="text" placeholder="Votre prenom" id="prenom" name="prenom" value="<?php if(isset($prenom)) { echo $prenom; } ?>" />
     </td>
   </tr>
   <tr>
    <td align="right">
     <label for="mail">Mail :</label>
   </td>
   <td>
     <input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
   </td>
 </tr>
 <tr>
  <td align="right">
   <label for="mdp">Mot de passe :</label>
 </td>
 <td>
   <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
 </td>
</tr>
<tr>
  <td align="right">
   <label for="mdp2">Confirmation du mot de passe :</label>
 </td>
 <td>
   <input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" />
 </td>
</tr>
<tr>
  <td></td>
  <td align="center">
   <br />
   <input type="submit" name="forminscription" value="Je m'inscris" />
 </td>
</tr>
</table>
</form>
<?php
if(isset($erreur)) {
  echo '<font color="red">'.$erreur."</font>";
}
?>
</div>

<?php
include_once "includes/footer.php";
?>
</body>
</html>