<?php

require './database.php';

if(isset($_POST["submit"]))
{
    if(empty($_POST['username']) || empty($_POST['user_pass']))
    {
        echo 'Veuillez verifier votre nom d utilisateur et votre mot de passe';
    }

    else {
        $query ="SELECT * FROM users WHERE username= :username LIMIT 1";
        $statement =$pdo->prepare($query);
        $statement-> execute(
            array(
                'username' =>$_POST['username']
            )
            );
            $count =$statement->rowcount();
            if($count > 0)
            {
            $result = $statement->fetch(PDO::FETCH_ASSOC);
             
              if(password_verify($_POST['user_pass'],$result['user_pass'])){ 
                session_start();
                $_SESSION['username']  =$_POST['username'];
                $_SESSION['nom'] =$result['nom'];
                $_SESSION['prenom'] =$result['prenom'];


                $_SESSION['user_kind'] =$result['user_kind'];
                exit(header('location: espace_gestion.php'));
              }else{
                  echo 'Veuillez verifier votre mot de passe';
                  header('location: login.php');
              }
            }
            else {
                echo 'Veuillez verifier votre nom d utilisateur et votre mot de passe';
            }
        }
    }

    ?>

