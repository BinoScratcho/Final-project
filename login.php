<?php include "./include/header.php";

?>
     <a class="liens" href="./index.php">Retour à l'accueil</a><br>
<fieldset class="ft2">
    
    <form action="./log_exec.php" id="formulaire" method="POST">
        <label id="usname" for="username"> Nom d'utilisateur </label>&nbsp;&nbsp;
        <input id="utilisateur" type="text" name="username">
        <label for="user_pass">Mot de passe</label>&nbsp;&nbsp;
        <input type="password" name="user_pass" id="mdp">
        <button type="submit" name="submit" id="co">&nbsp;Connexion</button></form>
</fieldset>
<?php include "./include/footer.php";
// Height #slogan ligne 421
// mb #logo ligne 328

?>