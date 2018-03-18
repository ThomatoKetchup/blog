<?php

require "includes/connectDB.php";

if(isset($_POST['addPublication'])) {
   	    $image = htmlspecialchars($_POST['image']);
  $titre = htmlspecialchars($_POST['titre']);
   $corp = htmlspecialchars($_POST['corp']);

   if(!empty($_POST['titre']) AND !empty($_POST['corp']) AND !empty($_POST['image'])) {
      $insertpub = $bdd->prepare("INSERT INTO publications(titre,image,corp) VALUES(?, ?,?)");
      $insertpub->execute(array($titre, $image, $corp));
              }
    else {
      $erreur = "Tous les champs doivent être complétés !";
   }
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
						<label>Titre :</label>
					</td>
					<td>
						<input type="text" placeholder="Le titre" id="titre" name="titre" value="<?php if(isset($titre)) { echo $titre; } ?>" />					
					</td>
				</tr>
              	<tr>
                  <td align="right">
                     <label for="prenom">Corp :</label>
                  </td>
                  <td>
                      <textarea placeholder="Corp de la publication" type="text" name="corp" rows="10" cols="50"></textarea>                   
                    </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mail">Image :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Inserez votre image" id="image" name="image" value="<?php if(isset($image)) { echo $image; } ?>" />
                  </td>
               </tr>
                     <br />
                     <input type="submit" name="addPublication" value="Publier" />
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