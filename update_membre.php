<?php
include './include/header.php';
session_start();
$id = $_GET['id'];
if (!empty($_POST)) {
    $username = $_POST['username'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    require "./database.php";
    $req = $pdo->prepare("UPDATE users SET username = ? , nom = ?, prenom = ? WHERE id = ?");
    $req->execute(array($username, $nom, $prenom, $id));
    header('location: ./gest_membre.php');
}
?>

<fieldset>
    <legend>Modification</legend>

    <form action="#" method="POST">

        <label for="username">Nouveau Pseudo</label>
        <input type="text" name="username">

        <label for="nom">Nouveau Nom</label>
        <input type="text" name="nom">

        <label for="prenom">Nouveau prenom</label>
        <input type="text" name="prenom">

        <input name="Submit" type="submit" value="Confirmer le changement" onclick="if (confirm('Attention,la fiche du membre va être modifiée')) { return TRUE; } else  { return FALSE; }">

    </form>
</fieldset>

<?php
include './include/footer.php';
?>
