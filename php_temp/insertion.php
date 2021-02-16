<?php
	include 'connexion.php';
	if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$mot_de_passe = $_POST['mot_de_passe'];
	$telephone = $_POST['telephone'];
	$codem = $_POST['codem'];
	
	$rep = $conn->prepare('INSERT INTO utilisateur(codem,email,nom, prenom, mot_passe ,telephone)
		                   VALUES(:codem,:email, :nom, :prenom, :mot_de_passe, :telephone)');
	$rep->execute(array('nom' => $nom,
							'prenom' => $prenom,
							'email' => $email,
							'mot_de_passe' => $mot_de_passe,
							'telephone' => $telephone,
							'codem' => $codem));
							
	echo 'l utilisateur est ajouté !';
	}
?>