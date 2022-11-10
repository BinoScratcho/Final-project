<?php
include './fonction.php'; //j inclus la fonction "valid données" dans le fichier 


$errors = array(); // on crée une variable "errors" , pour gérer les erreurs durant l'execution du script



if(!empty($_POST) && !empty($_FILES)){
    // Si ma superglobale POST n'est pas vide,(le ! signifie le contraire) et que la superglobale files n'est pas vide,alors on execute ce qu'il y a dans le if à la suite

    if( 
        !isset($_POST['legumes']) || 
        ( !isset($_POST["prix"]) && !is_int($_POST["prix"]) && $_POST["prix"] < 1 ) || 
        !isset($_FILES["photo"])
        ){
        // Si mon champ avec le nom "legumes" est vide ou si mon prix est inférieur à 1 on met une erreur

        $errors[] = "Champs \"Légumes\" vide ou prix inférieur à 1"; // On ajoute l'erreur dans le tableau 

    }else {
        // Si mon champ avec le nom "legumes" n'est pas vide est si mon prix est supérieur à 1 on execute ce qu'il y a dans le else

        $titre = valid_donnees($_POST['legumes']); // On appel la fonction valid_donnees() dans le fichier fonction.php sur le champ "legumes"
        
        //array(1) { ["photo"]=> array(6) { ["name"]=> string(7) "pdt.jpg" ["full_path"]=> string(7) "pdt.jpg" ["type"]=> string(10) "image/jpeg" ["tmp_name"]=> string(27) "C:\Windows\Temp\php692E.tmp" ["error"]=> int(0) ["size"]=> int(90850) } } 
        
        $available_ext = ["jpg", "png", "jpeg"]; // On défini les extentions acceptées
        $ext = end(explode(".", $_FILES["photo"]["name"])); // On explode le nom de la photo avec le "." comme séparateur puis on prend le dernier élément du tableau pour récupérer l'extention de l'image


        if (in_array(strtolower($ext), $available_ext))
        {
            // Si l'extention de l'image se trouve dans le tableau des ext. acceptées on continue
            require "./database.php";

            $req = $pdo->prepare("INSERT INTO produits SET legumes = ?, prix = ?, photo = ?");
            $req->execute([$_POST['legumes'],$_POST['prix'],[$_POST['photo']]]);
        }
        else
        {
            // Si l'ext. de l'image ne se trouve pas dans le tableau des ext. acceptées on met une erreur, ce n'est pas une image
        }
    }
}

if(isset($errors)){
    $_SESSION['erreur'] = $errors;
}

header('location: ./index_membre.php');

exit();


/*
<?php
$uploads_dir = '/uploads';
foreach ($_FILES["photo"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["photo"]["tmp_name"][$key];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["photo"]["name"][$key]);
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
    }
}
?>
*/




/*

true OU false => TRUE  
true true => TRUE
false false => FALSE
false true => TRUE

true ET false => false
true true => true
false false => FALSE
false true => false

*/
