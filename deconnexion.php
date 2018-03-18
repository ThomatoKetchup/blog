<?php 

session_start();
// Suppression des variables de session et de la session

$_SESSION = array();

session_destroy();
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

<p>Vous avez été deconnecté.</p>


	
	<?php
	include_once "includes/footer.php";
	?>
</body>