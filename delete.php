<?php
	include_once('includes/connectDB.php');
 
	if( isset($_GET['edit']) )
	{

		$id = $_GET['edit'];
	    $delete = $bdd->prepare("DELETE FROM publications WHERE id= ?");    
	    $delete->execute(array($id));
		}

header('Location: /blog/manage.php');
?>