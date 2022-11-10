<?php
/*session_start();

$id =$_GET['id'];

require "./database.php";


$req = $pdo->prepare("SELECT * FROM produits WHERE id = ?");

while($data= $req->fetch()){
    echo'
    <tr>
    <td>'.$data->legumes.'</td>
    <td>'.$data->prix.'</td>
    <td>'.$data->photo.'</td>
    <a href="./supr_conf.php?id='.$data->id.">
    <a id="test"  style="color: white;" href="./delete_article.php?id='.$data->id.'">Etes-vous sûr de vouloir supprimer cet article?</a>;
    </td>
    </tr>";
}


$req = $pdo->prepare("DELETE FROM produits WHERE id = ?");




exit(header('location: ./gest_art.php'));
*/
session_start();

$id =$_GET['id'];

require "./database.php";

$req = $pdo->prepare("DELETE FROM produits WHERE id = ?");

echo "<button onclick='confirmDeleteArticle()'>Suprimer</button>";


$req->execute(array($id));

exit(header('location: ./gest_art.php'));




?>