<?php
session_start();
if(isset($_SESSION['username'])){
    echo 'bonjour' .$_SESSION['username'] ;
}    


?>


<?php
include './include/header.php';
?>
  <a href="./home2.php">Retour à l'accueil</a><br>
<h1>Félicitations vous faites parti des membres de Bio Ensemble </h1>
<?php
include './include/footer.php'
?>
