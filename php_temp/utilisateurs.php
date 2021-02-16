<?php  include 'connexion.php'; ?>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="css/style.css"/>
		<title>users</title>
	</head>
<body>
	<center>
	<h1>Liste des <br> Utilisateurs</h1>
	<form method="POST" action="">  
		<table>
		<tr>
			<td>Code Massar</td>
			<td>Nom</td>
			<td>Prénom</td>
			<td>E-mail</td>
			<td>Téléphone</td>
			<td>Action</td>
		</tr>
		<tr>
		<?php  
			$reponse = $conn->query("SELECT * FROM utilisateur ");
			while ($donnees = $reponse->fetch()) {
		?>
		<?php echo "
			<tr>
				<td> ". $donnees['codem'] ."</td>
				<td> ". $donnees['nom']."</td>
				<td> ". $donnees['prenom']." </td> 
				<td> ". $donnees['email'] ."</td>
				<td> ". $donnees['telephone']."</td>			
				<td> <a href='sup.php?codem=$donnees[codem]' >supprimer</a></td>
			</tr>"
		;?>
				
		<?php } ?>
		</tr>
		</table>         
	</form>   
	</center>
</body>
</html>