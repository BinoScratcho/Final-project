<?php

include './fonction.php';







session_start();
 if(isset($_SESSION['username'])){
    $photoname = $_FILES['photo']['name'];
    $sessuser = $_SESSION['username'];
    if(!empty($_POST)) {
        $errors = array();



        if(empty($_POST['legumes'])){
            echo'insérer un nom de legume';
        }
        elseif(empty($_FILES['photo'])){
            echo'insérer une photo';
        }
        elseif(empty($_POST['prix'])){
            echo'Prix du produit a ajouter';
        }
       
        else {
            require './database.php';

            if (copy($_FILES['photo']['tmp_name'],'uploads/'. $photoname )){
                $req = $pdo->prepare("INSERT INTO produits SET legumes = ?,  photo = ?, prix = ? ");
                $req->execute([$_POST['legumes'],  $_FILES['photo'] = $photoname, $_POST['prix']]);
                header('location: ./index_membre.php');
                exit();
            }else{
                echo'échec envoi photo';
            }
        }
    }
}else {
    header('location: ./index_membre.php');
}
