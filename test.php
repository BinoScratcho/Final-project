<?php
include './include/header.php';


?>


<section class="legumes">
<div class="image1">

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
    <img class="image_1" src=" uploads/'.$data->photo.'" alt="">
    </div>
  ';
  }




?>



</div>
</section>



<?php
include './include/footer.php';
?>



