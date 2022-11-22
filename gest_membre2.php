<?php
include "./include/header.php";

if (empty($_SESSION['username'])) {
  header('location: ./login.php');
}
?>
<a class="liens" href="./index.php">Retour à l'accueil</a><br>

<fieldset class="ft2">
<legend>Liste des Membres</legend>


<main>

<article class="art">
  <p>ID</p>
  <p>Pseudo</p>
  <p>Nom</p>
  <p>Prénom</p>
  <p>Actions</p>
</article>
<?php
require "./database.php";
$req =$pdo->query("SELECT * FROM users");
while($data =$req->fetch()){
  echo"
    <article class='art'>
      <p>$data->id</p>
      <p>".mb_strimwidth($data->username, 0, 10, '...')."</p>
      <p>".mb_strimwidth($data->nom, 0, 10, '...')."</p>
      <p>$data->prenom</p>
      <p>
        <a class='btn btn-link' href='./update_membre.php?id=$data->id'><i class='fa-solid fa-pen-to-square'></i> </a>
        <button class='btn btn-delete' onclick='confirmDeleteUsers(". $data->id .")'><i class='fa-solid fa-trash-can'></i></button>
      </p>
    </article>
  ";
    // echo "<tr> <td>$data->id</td><td>". mb_strimwidth($data->username, 0, 10, "...") ."</td><td>". mb_strimwidth($data->nom, 0, 10, "...") ."</td><td>$data->prenom</td>";
    // echo "<td>";
    // echo "<a class='btn btn-link' href='./update_membre.php?id=$data->id'><i class='fa-solid fa-pen-to-square'></i> </a>";
    // echo "<button class='btn btn-delete' onclick='confirmDeleteUsers(". $data->id .")'><i class='fa-solid fa-trash-can'></i></button>";
    // echo "</td></tr>";
}
?>
</main>
</fieldset>
<?php
include './include/footer.php';
?>