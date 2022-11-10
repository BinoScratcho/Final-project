<?php
       

       if(!empty($_POST)){$errors=array();

       if(empty($_POST['username'])){
           echo 'pseudo absent';
       }

       else if(empty($_POST['nom'])){
       echo 'nom absent';
       }
       else if(empty($_POST['prenom'])){
       echo 'prenom absent';
       }
      

       else if(strlen($_POST['user_pass'])<6){
       echo 'mot de passe trop court';
       }

       else if(empty($_POST['user_pass'])){
       echo 'mot de passe absent';
       }
       elseif(($_POST['user_pass'])!=($_POST['confirm_pass'])){
       echo 'les mots de pass ne correspondent pas';    
   }
   else {
       include './fonction.php';
       $username= valid_donnees($_POST['username']);
       $nom = valid_donnees($_POST['nom']);
       $prenom=valid_donnees($_POST['prenom']);


       require "./database.php";
       $req= $pdo->prepare("INSERT INTO users SET username= ?,nom =?,prenom=?,user_pass =?");
       $password= password_hash($_POST['user_pass'],PASSWORD_BCRYPT);
       session_start();
       $_SESSION['username']  =$_POST['username'];
       $_SESSION['nom'] =$result['nom'];
       $_SESSION['prenom'] =$result['prenom'];
   $req->execute([ $username, $nom, $prenom, $password]);
   header('location: ./conf.php');
   exit();
   }
}




?>