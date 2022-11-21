<?php
include './include/header.php';
?>



<div id=home2>
    <img id="avatar2" src="./images/avatar.png" alt="avatar">
    <?php
    
    if(isset($_SESSION['username'])){
        echo '<h3 class="username2"/h3>Bonjour ' .$_SESSION['username'];
    }    
     
     ?>

<button class="deco2"><a id="ancre2" href="./deconnect.php">Deconnexion</a></button>

</div>





<div class="champs2">

<p id="intro"> La SCEA (société civile d'exploitation agricole)Bio Ensemble est née de la volontée de deux hommes soucieux de préserver la planète et de faire en sorte que la population locale puisse manger sainement.<br>
               Notre société a été crée en 2017 et nous esperons que vous apprecierez nos fruits & légumes de saison. </p>

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
                <img class="image_1" src=" uploads/'.$data->photo.'" alt=""alt="" width="190" height="250" >
            </div>
        </div> ';

  }

?>
</section



<?php
include './include/footer.php';
?>


