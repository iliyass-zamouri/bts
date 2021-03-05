<!DOCTYPE html>
<html lang="fr">
<head>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="utf-8"/>
    <link rel="stylesheet" href="css\default.css">
    <link rel="stylesheet" href="css\navigateur.css">
    <script src="js\dropdown.js" type="javascript"></script>
    <link rel="icon" href="images\favicon.ico" sizes="16x16" type="image/png">
    <title>Association des lauréats de BTS</title>
<div class="header">
    <iframe src="include\header.html" name="header" allowTransparency="true" scrolling="no" frameborder="0" >
    </iframe>
  </div>
  </head>
<body>
    <div class="nav">
        <div class="deroulant">
            <button class="btn-deroulant"><a href="include\acceuil.php" target="main">Acceuil</a></button>
        </div>
        <div class="deroulant">
          <button class="btn-deroulant">Association</button>
          <div class="contenu-deroulant">
            <a href="include\presentation.html" target="main">Présentation</a>
            <a href="include\qui-sommes.html" target="main">Qui-somme nous?</a>
          </div>
        </div>
        <div class="deroulant">
            <button class="btn-deroulant">Offres</button>
            <div class="contenu-deroulant">
              <a href="include\stage.html" target="main">Stage</a>
              <a href="include\recrutement.html" target="main">Recrutement</a>
              <a href="include\formation.html" target="main">Formation</a>
            </div>
          </div>
          <div class="deroulant">
            <button class="btn-deroulant">Contact</button>
            <div class="contenu-deroulant">
              <a href="include\contact.html" target="main">Ecrivez-nous</a>
            </div>   
        </div>
        <div class="deroulant">
            <button class="btn-deroulant"><a href="include\inscription.html" target="main">Inscription</a></button>
        </div>
        <div id="deroulant-mobile" class="deroulant">
            <button onclick="" class="btn-deroulant"><a>XXX</a></button>
        </div>
    </div>
    <section class="contenue">
<iframe src="include\acceuil.php" name="main" allowTransparency="true" scrolling="yes" frameborder="0" ></iframe>
    </section>
    <section class="actualite">
      <div class="login-div">
          <?php
          session_start();
          $nom_prenom = 'Iliyass ZAMOURI';
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
          echo '<a href="/profile" class="logedin">'.$nom_prenom.'</a>
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