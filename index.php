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

	$reponse = $bdd->query('SELECT * FROM publications');

	?>

	<section>

		<?php
		while ($donnees = $reponse->fetch())
		{
			?>
			<article>
				<img src="<?php echo $donnees['image']; ?>" alt="Arbre" />
				<h3><?php echo $donnees['titre']; ?></h3>
				<p>
					<?php echo $donnees['corp']; ?>
				</p>
			</article>
			<?php
		}
		$reponse->closeCursor(); // Termine le traitement de la requête ?>


	</section>
	
	<?php
	include_once "includes/footer.php";
	?>
</body>