<?php
session_start();

$id =$_GET['id'];

require "./database.php";



$req = $pdo->prepare("DELETE FROM users WHERE id = ?");
  

$req->execute(array($id));

exit(header('location: ./gest_membre.php'));

?>