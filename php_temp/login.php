<?php 
    include 'connexion.php';
?>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="css/style.css"/>
		<title>connexion</title>   
	</head>

<body>
	<center>
	<h1>Connexion</h1>
	<div class="connexion">
		<form method="POST" action="connecter.php">  
        <div class="conteneur-contacte">   
			<p style="text-align: initial">  Email:</p>
            <input type="text" placeholder="Entrer votre Email " name="email" required>
            <p style="text-align: initial">  Mot de passe:</p>
            <input type="password" placeholder="Entrer votre mot de passe " name="mot_de_passe" required>
            <input class="login-button" type="submit"  value="Connexion">
        </div>   
		</form>     
	</div>
	</center>
</body>
</html>