<?php
session_start();

$id =$_GET['id'];

require "./database.php";



$req = $pdo->prepare("DELETE FROM users WHERE id = ?");

echo "<button onclick='confirmDeleteUsers()'>Suprimer</button>";
  

$req->execute(array($id));

exit(header('location: ./gest_membre.php'));

?>