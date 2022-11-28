<?php
include './include/header.php';

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
    
<label id="leg" for="legumes">Nouveaux légumes</label>
<input id="leg1" type="text" name="legumes">

<label id="px" for="prix">Nouveau prix</label>
<input id="px1" type="number" step="any" name="prix">

<label  for="photo">Nouvelle photo</label>
<input id="photo1" type="file" name="photo">

<input name="Submit" type="submit" value="Confirmer le changement" onclick="if (confirm('Attention, cette fiche va être modifié')) { return TRUE; } else  { return FALSE; }">

</form>
</fieldset>
<?php
include './include/footer.php';
?>

