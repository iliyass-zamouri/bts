<?php

include 'connexion.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$password = $_POST['mp'];
$laureat = $_POST['laureat'];

if(!empty($nom) || !empty($prenom) || !empty($email) || !empty($password)) {

$con = ouvertureCn();

    $SELECT = "SELECT email from users where email = ? Limit 1"; 
    $INSERT = "INSERT into users (nom , penom , email , mp, laureat) values (? , ? , ? , ? , ? )";
    $stmt = $con->prepare($SELECT);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum = $stmt->num_rows;
    
    if($rnum==0){
        $stmt->close();
        
        $stmt = $con->prepare($INSERT);
        $stmt->bind_param("ssss", $nom , $prenom , $email , $password);
        $stmt->execute();
        echo("nouvelle enregistrement"); 
    } else {
        echo("Email deja utiliser");
    }
    $stmt->close();
    fermetureCn($con);
    }
} else {
    echo "TOUS LES ZONES SONT IMPORTANT";
    die();
}
?>