<?php

function ouvertureCn()
 {
$host = "localhost";
$db_user = "root";
$db_pass = "root";
$db_name = "bts_laureaut";


 $con = new mysqli($host, $db_user, $db_pass,$db_name) or die("Erreur lors du connexion : %s\n". $con -> error);

 
 return $con;
 }
 
function fermetureCn($con)
 {
 $con -> close();
 }
   
?>