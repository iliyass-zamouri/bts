<?php
	include 'connexion.php';
	$codem =$_GET['codem'];
	$sql_sup="delete from utilisateur where codem='$codem'";
	if ($conn->query($sql_sup)){
		echo"Les données de l'étudiants sont supprimées ";
	}
?>