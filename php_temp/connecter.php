<?php
	include 'connexion.php';
	$email = $_POST['email'];
	$mot_de_passe = $_POST['mot_de_passe'];
	$sql = "SELECT * FROM utilisateur where email = '$email' and mot_passe = '$mot_de_passe' ";

	$res=$conn->query($sql);
	if ( $res === true) {
		echo "Vous êtes connecté ";
	} else {
		echo "Le login ou le mot de passe est incorrect";
	}
?>