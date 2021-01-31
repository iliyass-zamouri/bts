<?php

include 'connexion.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$password = $_POST['mp'];
$laureat = $_POST['laureat'];

// ouverture du connection
$con = ouvertureCn();
// verification du connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

$sql = "INSERT into users (nom, prenom, email, password, laureat) values ('".$nom."', '".$prenom."', '".$email."', '".$password."', '".$laureat."')";

if ($con->query($sql) === TRUE) {
    header("Location: ../include/merci.html");
    exit(); 
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

fermetureCn($con);
?>  