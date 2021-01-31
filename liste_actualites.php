<?php

	$cn =  mysqli_connect('localhost', 'root','','bts_laureaut');
	mysqli_set_charset($cn, "utf8");
	/* Vérification de la connexion */
	if (mysqli_connect_errno()) {
	 printf("Échec de connexion : %s\n", mysqli_connect_error());
	  exit();
	 }
 $sql="SELECT * FROM actualite";
	$result = mysqli_query($cn, $sql);

	echo '<div class="Act">';
    echo '<a class="a-titre" href="#">';
      echo '<div class="Act-titre">';
	  echo $row['titre'];
		echo '</div>';
    echo '</a>';
        echo '<div class="Act-body">';
		echo '<p>'.$row['resume'].'</p>';
        echo '</div>';
        echo '<a class="a-lire" href="#">Lire</a>';
    echo '</div>';
    echo '<div class="Act">';
    echo '<a class="a-titre" href="#">';
      echo '<div class="Act-titre">';
	  echo $row['titre'];
		echo '</div>';
    echo '</a>';
        echo '<div class="Act-body">';
		echo '<p>'.$row['resume'].'</p>';
        echo '</div>';
        echo '<a class="a-lire" href="#">Lire</a>';
    echo '</div>';
    echo '<div class="Act">';
    echo '<a class="a-titre" href="#">';
      echo '<div class="Act-titre">';
        echo $row['titre'];
    echo '</div>';
    echo '</a>';
        echo '<div class="Act-body">';
         echo '<p>'.$row['resume'].'</p>';
        echo '</div>';
?>
