<?php
session_start();
if(empty($_SESSION['username'])){
    header('location: ./login.php');
}
include "./include/header.php";
?>
 
<div id="hello"><p>Bonjour <?php echo $_SESSION['nom'] . " ".  $_SESSION['prenom']  ?>, </div>
<?php

     if($_SESSION['user_kind'] == 1){echo "vous êtes administrateur.";} 

     

     ?>

Que voulez-vous faire ? </p><br>

<div id="order">
<?php
if($_SESSION['user_kind'] == 1){
    echo '<a id="ancre" href="./gest_membre.php">Gérer les membres &emsp;</a>';
    echo '<a id="ancre" href="./gest_art.php">Gérer les articles &emsp;</a>' ;
}

else($_SESSION['user_kind'] == 2)[
    header ('location: ./home2.php')

]
?>




<a id="ancre" href="./deconnect.php">Déconnexion</a><br>
<a id="ancre" href="./index.php">Retour à l'accueil</a>

</div>

<?php

include "./include/footer.php";
?>

