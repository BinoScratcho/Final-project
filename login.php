<?php include "./include/header.php";

?>
     <a href="./index.php">Retour à l'accueil</a><br>
<fieldset>
    
    <form action="./log_exec.php" method="POST">
        <label for="username">Nom d'Utilisateur</label>
        <input type="text" name="username" id="usname">
        <label for="user_pass">Mot de Passe</label>
        <input type="password"
            name="user_pass"><button type="submit" name="submit">Connection</button></form>
</fieldset><?php include "./include/footer.php";
?>
