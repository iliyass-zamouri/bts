<?php 
    include 'connexion.php';
?>
<html>
<head>
	<meta charset="character_set">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style.css"/>
	<title>Inscription</title>
</head>

<body>
	<center>
		<h1>Inscription des lauréats de BTS</h1>
		<div class="formuler">
			<form action="insertion.php" method="POST">
				<input type="text" placeholder="Code Massar " name="codem" required />
				<input type="text" placeholder="Nom " name="nom" required />
				<input type="text" placeholder="Prénom " name="prenom" required>
				<input type="text" placeholder="GSM " name="telephone" required>
				<input type="text" placeholder="E-mail" name="email" required>
				<input type="password" placeholder="Mot de passe " name="mot_de_passe" required>
				<input type="password" placeholder="Confirmation " name="confirmation" required>
			<input type="submit" value="S'inscrire" name="submit">
			</form>
		</div>
	</center>
</body>
</html>