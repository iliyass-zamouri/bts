<html>
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="..\css\slideshow.css">
<link rel="stylesheet" href="..\css\acceuil.css">
<script type="text/javascript" src="..\js\slideshow.js"></script>
</head>
<body>
<h2 class="body-head">Actualités<h2>
  <div class="slideshow-container">
    <div class="mySlides fade">
      <div class="numbertext"></div>
      <img src="../images/tour3.jpg" style="width:100%">
      <div class="text">Actualités du management touristique</div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext"></div>
      <img src="../images/Film2.png" style="width:100%">
      <div class="text">Actualités du commerce et gestion</div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext"></div>
      <img src="../images/Tech1.jpg" style="width:100%">
      <div class="text">Actualités des techniciens</div>
    </div>
    </div>
    <div class="dots" style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
    </div>    
    <script>showSlides();</script>
	<div class="actualite-body">
    <?php
    
    $cn =  mysqli_connect('localhost','root','','bts_laureat');
    mysqli_set_charset($cn, "utf8");
    /* Vérification de la connexion */
    if (mysqli_connect_errno()) {
     printf("Échec de connexion : %s\n", mysqli_connect_error());
      exit();
     }
   $sql="SELECT titre, resume FROM actualite";
    $result = mysqli_query($cn, $sql);
    while ($row=mysqli_fetch_assoc($result)) {
    echo '<div class="Act">';
      echo '<a class="a-titre" href="#">';
        echo '<div class="Act-titre">';
      echo $row['titre'];
      echo '</div>';
      echo '</a>';
          echo '<div class="Act-body">';
          echo "<p>";
          echo $row['resume'];
          echo "</p>";
          echo '</div>';
          echo '<a class="a-lire" href="#">Lire</a>';
      echo '</div>';
        }
  ?>
    <a class="autres-btn" href="#"><div class="autres-act">
  Autres
  </div></a>
  </div>
  <div class="contenue2">
    <h2 class="body-head">Pourquoi l'utiliser?</h2>
  <p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions,
     et empêche de se concentrer sur la mise en page elle-même.
      L'avantage du Lorem Ipsum sur un texte générique comme 'Du texte. 
      Du texte. Du texte.' est qu'il possède une distribution de lettres plus ou moins normale, 
      et en tout cas comparable avec celle du français standard.
       De nombreuses suites logicielles de mise en page ou éditeurs de 
       sites Web ont fait du Lorem Ipsum leur faux texte par défaut, 
       et une recherche pour 'Lorem Ipsum' vous conduira vers de nombreux 
       sites qui n'en sont encore qu'à leur phase de construction.
        Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement 
    (histoire d'y rajouter de petits clins d'oeil, voire des phrases embarassantes).</p>
  </div>
	</body> 
	</html>