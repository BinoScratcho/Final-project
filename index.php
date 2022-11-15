<?php
include './include/header.php';


?>

<div id=home>
 <?php
      session_start(); 
           
    if(isset($_SESSION['username'])){
        echo'<img id="avatar" src="./images/avatar.png" alt="avatar">';
        echo'' .$_SESSION['username']. '';
        echo'<button class="deco1"><a href="./deconnect.php">Deconnexion</a></button>';
        echo'<button class="deco1"><a href="./index_membre.php">Espace Gestion</a></button>';
        
    } else  { 
          echo'<button  class="deco1"><a href="./register.php">S\'inscrire</a></button>';
          echo'<button  class="deco1"><a href="./login.php">Se connecter</a></button>';
        } 
?>


</div>

<div class="champs">

<p id="intro"> La SCEA (société civile d'exploitation agricole)Bio Ensemble est née de la volontée de deux hommes soucieux de préserver la planète et de faire en sorte que la population locale puisse manger sainement.<br>
               Notre société a été crée en 2017 et nous esperons que vous apprecierez nos fruits & légumes de saison.
  </p>

</div>

<section class="legumes">

<?php

require './database.php';

$req= $pdo->query('SELECT * FROM produits');

while($data=$req->fetch()){
    echo 
        '<div class="legume1">
            <h4>'.$data->legumes.'</h4>
         
            <p>'.$data->prix.'€/kg</p>
            <div>
                <img class="image_1" src=" uploads/'.$data->photo.'" alt="">
            </div>
        </div> ';

  }

?>
</section

<?php

include './include/footer.php';
?>


