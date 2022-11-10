<?php
include "./include/header.php"; 

?>
 <a href="./index.php">Retour à l'accueil</a><br>

<div class="choice2">


<?php 

$id = $_GET['id'];

require './database.php';



$req= $pdo->query('SELECT * FROM produits WHERE id= ' .$id. '');

while($data=$req->fetch()){

    echo'
  <h4>'.$data->legumes.'</h4>
  <br>
  <p>'.$data->prix.'€</p>
  <div>
  <img class="imagerecent" src="./images/'.$data->photo.'" alt="">
  </div>
';
}

?>
</div>

<?php
include "./include/footer.php";
?>



