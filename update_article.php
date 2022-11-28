<?php
include './include/header.php';

if(!empty($_POST)){
    $legumes = $_POST['legumes'];
    $prix =$_POST['prix'];
    $photo=$_POST['photo'];
    $id =$_GET['id'];
    require "./database.php";
    $req = $pdo->prepare("UPDATE produits SET legumes  = ?, prix = ?, photo= ? WHERE id = ?");
    $req->execute(array( $legumes, $prix,$photo, $id));
    header('location: ./gest_art.php');
}
?>

    


<fieldset>
<legend>Modification</legend>

<form action="#" method="POST">
    
<div class="ft3">
<div class="insertleg">    
<label for="legumes"id ="legumes2">Légumes:</label>
<input type="text" name="legumes" id="legumesins" required>
</div>
</div>
<div class="ft3">
<label id="prix" for="prix">Nouveau prix</label>
<input type="number" step="any" name="prix" min="1" required>
</div>
<div class="ft4">
<label id="photo" for="photo">Nouvelle photo</label>
<input type="file" name="photo" required>
</div>

<input id="sub" name="Submit" type="submit" value="Confirmer le changement" onclick="if (confirm('Attention, cette fiche va être modifié')) { return TRUE; } else  { return FALSE; }">

</form>
</fieldset>
<?php
include './include/footer.php';
?>

