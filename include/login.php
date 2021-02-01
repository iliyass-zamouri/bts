<?php
session_start();
$message="";
if(count($_POST)>0) {
 $con = mysqli_connect('localhost','root','','bts_laureat') or die('Unable To connect');
$result = mysqli_query($con,"SELECT * FROM login_user WHERE user_name='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['id'];
$_SESSION["name"] = $row['name'];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["id"])) {
header("Location:index.php");
}
?>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="..\css\default.css">
	<link rel="stylesheet" href="..\css\login.css">
	<title>Se Connecter</title>
</head>
<body>
    <h1>Login</h1>
    <div id="login-main-div" class="login-div">
        <form>  
          <div class="conteneur-mp">   
              <label class="lbl-login">Email : </label><br> 
              <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required><br> 
              <label class="lbl-login">Mots de passe : </label><br>  
              <input type="password" placeholder="Entrer le mot de passe" name="password" required><br>
              <div class="message"><?php if($message!="") { echo $message; } ?></div>
              <a id="mp-oublier" href="#"> Mot de passe oublié? </a>
              <button class="login-button" type="submit">Se connecter</button>
          </div>   
      </form>     
    </div>
    <table class="t-merci">
        <tr>
            <td>
                Vous-avez un problème?<a href="contact.html">contactez-nous</a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="../index.php" id="btn-acceuil">Acceuil</a>
            </td>
        </tr>
    </table>
</body>
</html>