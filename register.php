<?php
include "./include/header.php"
?>

<a class="liens" href="./index.php">Retour à l'accueil</a><br>

<fieldset class="ft2">

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


        <button class="btn btn-submit" type="submit">Inscription</button>

    </form>

</fieldset>
<br>

<fieldset>
    <legend>Déjà inscrit?</legend>
    <a class="deco2" id="ancre2" href="./login.php">Connexion</a>

    <a class="deco2" id="ancre2" href="./deconnect.php">Déconnexion</a>
</fieldset>

<?php
include './include/footer.php'
?>