<?php
include "./include/header.php";

if (empty($_SESSION['username'])) {
  header('location: ./login.php');
}
?>
<a class="liens" href="./index.php">Retour à l'accueil</a><br>



<fieldset class="ft2">
<legend>Liste des Membres</legend>

<table class="t2"><tr> <th>ID</th> <th>Pseudo</th> <th>Nom</th> <th>Prénom</th> <th>Actions</th> </tr>
<?php
require "./database.php";
$req =$pdo->query("SELECT * FROM users");
while($data =$req->fetch()){
    echo "<tr> <td>$data->id</td><td>". mb_strimwidth($data->username, 0, 10, "...") ."</td><td>". mb_strimwidth($data->nom, 0, 10, "...") ."</td><td>$data->prenom</td>";
    echo "<td>";
    echo "<a class='btn btn-link' href='./update_membre.php?id=$data->id'><i class='fa-solid fa-pen-to-square'></i> </a>";
    echo "<button class='btn btn-delete' onclick='confirmDeleteUsers(". $data->id .")'><i class='fa-solid fa-trash-can'></i></button>";
    echo "</td></tr>";
}
?>
</table>
</fieldset>
<?php
include './include/footer.php';
?>