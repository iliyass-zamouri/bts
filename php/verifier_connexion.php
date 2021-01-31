<?php
include 'connexion.php';
$con = ouvertureCn();
echo "Connecté avec succès";
fermetureCn($con);
?>