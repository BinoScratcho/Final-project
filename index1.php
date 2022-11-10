<?php
include "./include/header.php"
?>

<a href="./accueil.php">Retour à l'accueil</a><br>

<fieldset>

    <legend>Bienvenue</legend>
    <form id="inscription" action="./insc.php" method="POST">

        <label for="username">Nom d'utilisateur</label>
        <input type="text" name="username" id="username" required>

        <label for="nom">Nom</label>
        <input type="text" name="nom" id="name" required>

        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prename" required>

        <label for="user_pass">Mot de Passe</label>
        <input type="password" name="user_pass" id="uspass" required>

        <label for="confirm_pass">Confirmez le mot de Passe</label>
        <input type="password" name="confirm_pass" id="confpass" required>


        <button type="submit">Inscription</button>

    </form>

</fieldset>
<br>

<fieldset>
    <legend>Déjà inscrit?</legend>
    <a href="./login.php">Connexion</a>

    <a href="./deconnect.php">Déconnexion</a>
</fieldset>

<?php
include './include/footer.php'
?>