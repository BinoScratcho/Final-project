<?php
session_start();

$id =$_GET['id'];

require "./database.php";



$req = $pdo->prepare("DELETE FROM users WHERE id = ?");

echo "<button onclick='confirmUsers()'>Suprimer</button>";
  

$req->execute(array($id));

exit(header('location: ./gest_membre.php'));

?>