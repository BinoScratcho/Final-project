<?php
session_start();

$id =$_GET['id'];

require "./database.php";



$req = $pdo->prepare("DELETE FROM produits WHERE id = ?");

echo'<a id="test"  style="color: white;" href="./delete_article.php?id= '.$data->id.'">Etes-vous sûr de vouloir supprimer cet article?</a>';
  

$req->execute(array($id));

exit(header('location: ./gest_art.php'));

