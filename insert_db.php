<?php
     include "./include/header.php";
     ?>
     
    

<fieldset>
<legend>Insertion</legend>
<form id="form" action="./insertdb2_exe.php" method="POST" enctype="multipart/form-data"> <!-- enctype est necessaire si l'utilisateur doit upload un fichier directement depuis le formulaire   -->


<div class="ft3">
<label for="legumes">Légumes:</label>
<input type="text" name="legumes" id="legumes" required>
</div>
<div class="ft3">
<label for="prix">Nouveau prix</label>
<input type="number" step="any" name="prix" min="1" required>
</div>
<div class="ft4">
<label for="photo">Nouvelle photo</label>
<input type="file" name="photo" required>
</div>
<button id="co" name="bouton" type="submit">Ajouter l'article</button>
</form>
</fieldset>
<?php
    include './include/footer.php'
?>
    
    