<?php
include_once('includes/connectDB.php');
session_start();
var_dump($_SESSION['admin']);
if (isset($_SESSION['connect']))//On vérifie que le variable existe.
{
        $connect=$_SESSION['connect'];//On récupère la valeur de la variable de session.
}
else
{
        $connect=0;//Si $_SESSION['connect'] n'existe pas, on donne la valeur "0".
}
       
if ($connect == "1") // Si le visiteur s'est identifié.
{
// On affiche la page cachée.

?>

<!DOCTYPE html>
<?php
require "includes/head.php";
?>
<body>



  <?php
  include_once "includes/header.php";

  include_once "includes/menu.php";


  $reponse = $bdd->query('SELECT * FROM publications');
?>


<a href="/blog/add.php">Ajoutez une publication</a></body></br></br>

<?php
  while( $donnees = $reponse->fetch())
    echo "$donnees[id]. $donnees[titre] 
                <a href='edit.php?edit=$donnees[id]'>edit</a><br />";
$reponse->closeCursor(); // Termine le traitement de la requête ?>


  
<?php
  include_once "includes/footer.php";
  ?>
</body>

<?php

}

 
else // Le mot de passe n'est pas bon.

{
    header("Location: login.php");
}
?>
