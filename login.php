<?php include "./include/header.php";

?>
     <a href="./index.php">Retour à l'accueil</a><br>
<fieldset>
    
    <form action="./log_exec.php" id="formulaire" method="POST">
        <label id="usname" for="username"> Nom d'utilisateur </label>
        <input id="utilisateur" type="text" name="username"><br>
        <label for="user_pass">Mot de passe</label>
        <input type="password" name="user_pass" id="mdp"><br>
        <button type="submit" name="submit" id="co">Connexion</button></form>
</fieldset>
<?php include "./include/footer.php";
?>
