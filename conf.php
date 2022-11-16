
<?php
include './include/header.php';
?>

<?php
session_start();
if(isset($_SESSION['username'])){
    echo 'Bonjour &nbsp;' .$_SESSION['username'] ;
}    


?>
&nbsp;&nbsp;
  <a class="liens" href="./home2.php">Retour à l'accueil</a><br>
<h1>Félicitations vous faites parti des membres de Bio Ensemble </h1>
<?php
include './include/footer.php'
?>
