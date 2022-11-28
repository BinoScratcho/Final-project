<?php
include "./include/header.php";
if(empty($_SESSION['username'])){
    header('location: ./login.php');
}

?>
 <a class="liens" href="./index.php">Retour à l'accueil</a><br>
 <article class="art">
  <p>ID</p>
  <p>legumes</p>
  <p>prix</p>
 
  <p>Actions</p>
</article>
<?php
require "./database.php";
$req =$pdo->query("SELECT * FROM produits");
while($data =$req->fetch()){
  echo"
    <article class='art'>
      <p>$data->id</p>
      <p>".mb_strimwidth($data->legumes, 0, 10, '...')."</p>
      <p>".mb_strimwidth($data->prix, 0, 10, '...')."</p>
      
      <p>
        <a class='btn btn-link' href='./update_article.php?id=$data->id'><i class='fa-solid fa-pen-to-square'></i> </a>
        <button class='btn btn-delete' onclick='confirmDeleteArticle(". $data->id .")'><i class='fa-solid fa-trash-can'></i></button>
      </p>
    </article>
  ";
   
}
?>
</main>
</fieldset>
<?php
include './include/footer.php';
?>
<a class="liens" style="font-size: xx-large" href="./insert_db.php">Insérer des nouveaux fruits & légumes</a>

<?php
include './include/footer.php' ;
?>  