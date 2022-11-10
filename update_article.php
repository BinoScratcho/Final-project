<?php
include './include/header.php';
session_start();
$id =$_GET['id'];
if(!empty($_POST)){
    $legumes = $_POST['legumes'];
    $prix =$_POST['prix'];
    $photo=$_POST['photo'];

    
    require "./database.php";
    $req = $pdo->prepare("UPDATE produits SET legumes  = ?, prix = ?, photo= ? WHERE id = ?");
    $req->execute(array( $legumes, $prix,$photo, $id));
    header('location: ./gest_art.php');
}
?>

    


<fieldset>
<legend>Modification</legend>

<form action="#" method="POST">
    
<label for="legumes">Nouveaux légumes</label>
<input type="text" name="legumes">

<label for="prix">Nouveau prix</label>
<input type="number" step="any" name="prix">

<label for="photo">Nouvelle photo</label>
<input type="file" name="photo">

<input name="Submit" type="submit" value="Confirmer le changement" onclick="if (confirm('Attention, cette fiche va être modifié')) { return TRUE; } else  { return FALSE; }">

</form>
</fieldset>
<?php
include './include/footer.php';
?>

