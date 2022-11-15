<?php
session_start();
if(empty($_SESSION['username'])){
    header('location: ./login.php');
}
include "./include/header.php";
?>
 
<div id="order"><p>Bonjour <?php echo $_SESSION['nom'] . " ".  $_SESSION['prenom']  ?>,
<?php

     if($_SESSION['user_kind'] == 1){echo "vous êtes administrateur";} 



     ?>

Que voulez-vous faire ? </p><br>


<?php
if($_SESSION['user_kind'] == 1){
    echo '<a href="./gest_membre.php">Gérer les membres &emsp;</a>';
    echo '<a href="./gest_art.php">Gérer les articles &emsp;</a>' ;
}

else($_SESSION['user_kind'] == 2)[
    header ('location: ./home2.php')

]
?>




<a href="./deconnect.php">Déconnexion</a>
<a href="./index.php">Retour à l'accueil</a>

</div>

<?php

include "./include/footer.php";
?>

