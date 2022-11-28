<?php
include './include/header.php';

if (!empty($_POST)) {
    
    $username = $_POST['username'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $id =$_GET['id'];
    require "./database.php";
    $req = $pdo->prepare("UPDATE users SET username = ? , nom = ?, prenom = ? WHERE id = ?");
    $req->execute(array($username, $nom, $prenom, $id));
    header('location: ./gest_membre.php'); 
}
?>

<fieldset class="ft2">
    <legend>Modification</legend>

    <form action="#" method="POST">

        <label id="pseudo" for="username">Nom d'utilisateur</label>
        <input type="text" name="username" id="username" required>

        <label id="name" for="nom">Nom</label>
        <input type="text" name="nom" id="name" required>

        <label id="prenom" for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prename" required>

        <input name="Submit" type="submit" class="btn btn-submit" value="Confirmer le changement" onclick="if (confirm('Attention,la fiche du membre va être modifiée')) { return TRUE; } else  { return FALSE; }">

    </form>
</fieldset>

<?php
include './include/footer.php';
?>
