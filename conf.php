
<?php
include './include/header.php';
?>
 <a class="liens" href="./home2.php">Retour à l'accueil</a><br><br><br>
<?php

if(isset($_SESSION['username'])){
    echo "<h3 class='username'> Bonjour &nbsp;" .$_SESSION['username']." .</h3>
    <h2>Félicitations,vous faites partie des membres de Bio Ensemble </h2>" ;  
}    


?>

 

<?php
include './include/footer.php'
?>
