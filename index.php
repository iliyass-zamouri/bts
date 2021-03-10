<!DOCTYPE html>
<html lang="fr">
<head>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="utf-8"/>
    <link rel="stylesheet" href="css\default.css">
    <link rel="stylesheet" href="css\navigateur.css">
    <script src="js\dropdown.js" type="javascript"></script>
    <link rel="icon" href="images\favicon.ico" sizes="16x16" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Association des lauréats de BTS</title>
<div class="header">
    <iframe src="include\header.html" name="header" allowTransparency="true" scrolling="no" frameborder="0" >
    </iframe>
  </div>
  </head>
<body>
    <div class="topnav" id="myTopnav">
        <a href="include\acceuil.php" class="active" target="main"><i class="fa fa-home" aria-hidden="true"></i></a>
        <div class="dropdown">
            <button class="dropbtn">Association
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="include\presentation.html" target="main">Présentation</a>
                <a href="include\qui-sommes.html" target="main">Qui-somme nous?</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Offres
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="include\stage.html" target="main">Stage</a>
                <a href="include\recrutement.html" target="main">Recrutement</a>
                <a href="include\formation.html" target="main">Formation</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Contact
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="include\contact.html" target="main">Ecrivez-nous</a>
            </div>
        </div>
        <a href="include\inscription.html" id="inscription" class="active" target="main"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="dropDownFunction()">&#9776;</a>
        <script>
            function dropDownFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>
    </div>

    <section class="contenue">
<iframe src="include\acceuil.php" name="main" allowTransparency="true" scrolling="yes" frameborder="0" ></iframe>
    </section>
    <section class="actualite">
      <div class="login-div">
          <?php
          session_start();
          $nom = 'ZAMOURI';
          $prenom = 'Iliyass';
          if (session_status() == PHP_SESSION_NONE) {
          echo '<form>  
          <div class="conteneur-mp">   
              <label class="lbl-login">Email : </label><br> 
              <input type="text" placeholder="Entrer le nom d utilisateur" name="username" required><br> 
              <label class="lbl-login">Mots de passe : </label><br>  
              <input type="password" placeholder="Entrer le mot de passe" name="password" required><br>
              <a id="mp-oublier" href="#"> Mot de passe oublié? </a>
              <button class="login-button" type="submit" name="connecter">Se connecter</button>
        </form>';
         } else {
          echo '<a href="/profile" class="logedin">'.$nom.' '.$prenom.'</a>
      <button id="btn-logout" class="login-button">Déconection</button>';
         }
      ?>      
        </div>   
    </form>     
  </div>
    </section>
</body>
<footer>
<div class="footer">
  <iframe src="include\footer.html" name="footer" allowTransparency="true" scrolling="no" frameborder="0" >
  </iframe>
</div>
</footer>
</html>