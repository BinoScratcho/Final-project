<?php
include "./include/header.php";
if(empty($_SESSION['username'])){
    header('location: ./login.php');
}

?>
 <a class="liens" href="./index.php">Retour à l'accueil</a><br>
<fieldset class="ft1">
<legend>Liste des fruits & légumes</legend>
<table class="t1">
    
<tr> <th>ID</th> <th>légumes</th> <th>Prix</th> <th>Photo</th></tr>

<?php
include "./database.php";
$req = $pdo->query('SELECT * FROM produits');
while($data = $req->fetch()){

    echo "<tr> <td>$data->id</td><td>". mb_strimwidth($data->legumes, 0, 10, "...") ."</td><td>$data->prix</td><td>$data->photo</td>";
    echo "<td>";
    echo "<a class='btn btn-link' href='./update_article.php?id=$data->id'><i class='fa-solid fa-pen-to-square'></i> </a>";
    echo "<button class='btn btn-delete' onclick='confirmDeleteArticle(". $data->id .")'><i class='fa-solid fa-trash-can'></button>";
    echo "</td></tr>";
}
$req = $pdo->prepare("DELETE FROM produits WHERE id = ?");




?>
</table>
</fieldset>
<a class="liens" style="font-size: xx-large" href="./insert_db.php">Insérer des nouveaux fruits & légumes</a>

<?php
include './include/footer.php' ;
?>  