<?php
session_start();
if(empty($_SESSION['username'])){
    header('location: ./login.php');
}
include "./include/header.php";
?>
 <a href="./index.php">Retour à l'accueil</a><br>
<fieldset class="ft1">
<legend>Liste des fruits & légumes</legend>
<table class="t1">
    
<tr> <th>ID</th> <th>légumes</th> <th>Prix</th> <th>Photo</th></tr>

<?php
include "./database.php";
$req = $pdo->query('SELECT * FROM produits');
while($data = $req->fetch()){

    echo "<tr> <td>$data->id</td><td>$data->legumes</td><td>$data->prix</td><td>$data->photo</td>";
    echo "<td>";
    echo "<a href='./update_article.php?id=$data->id'>Modifier </a>";
    echo "<button onclick='confirmDeleteArticle(". $data->id .")'>Supprimer</button>";
    echo "</td></tr>";
}
$req = $pdo->prepare("DELETE FROM produits WHERE id = ?");




?>
</table>
</fieldset>
<a href="./insert_db.php">Insérer des nouveaux fruits & légumes</a>

<?php
include './include/footer.php' ;
?>  