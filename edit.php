<?php
	include_once('includes/connectDB.php');
 
	if( isset($_GET['edit']) )
	{

		$id = $_GET['edit'];
		if( isset($_POST['newImage']) )
		{
		   	$newImage = htmlspecialchars($_POST['newImage']);
		    $editpub = $bdd->prepare("UPDATE publications SET image= ? WHERE id= ?");    
		    $editpub->execute(array($newImage, $id));
		}
		if( isset($_POST['corp']) )
		{
	   	$newCorp = htmlspecialchars($_POST['newCorp']);

	    $editpub = $bdd->prepare("UPDATE publications SET corp= ? WHERE id= ?");    
	    $editpub->execute(array($newCorp, $id));
	}
	if( isset($_POST['titre']) )
		{
	   	$titre = htmlspecialchars($_POST['titre']);
	    $editpub = $bdd->prepare("UPDATE publications SET titre= ? WHERE id= ?");    
	    $editpub->execute(array($titre, $id));
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

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=blogDB;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

	//$reponse = $bdd->query('SELECT * FROM publications WHERE id=2');
      $reponse = $bdd->prepare("SELECT * FROM publications WHERE id =?");
      $reponse->execute(array($_GET['edit']));
?>

<section>

<?php
$donnees = $reponse->fetch()
?>
	<article>
		<h3><?php echo $donnees['titre']; ?></h3>
		<p>
			<?php echo $donnees['corp']; ?>
		</p>
	</article>
<?php

$reponse->closeCursor(); // Termine le traitement de la requête ?>

<form action="" method="POST">

Image :
<input type="text" name="newImage" value="<?php echo $donnees['image']; ?>"/><br/>


Titre :
<input type="text" name="titre" value="<?php echo $donnees['titre']; ?>"/><br/>

Corps:
<textarea type="text" name="newCorp" rows="10" cols="50">
	<?php echo $donnees['corp']; ?>
</textarea> 
<input type="submit" name="corp" value=" Update "/>
</form>
 <?php
 if(isset($erreur)) {
    echo '<font color="red">'.$erreur."</font>";
 }
 ?>


</section>
	
	<?php
	include_once "includes/footer.php";
	?>
</body>