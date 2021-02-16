<?php
	Try {
		$conn = new PDO('mysql:host=localhost;dbname=bts_laureaut;
			charset=utf8','root','root');
	}
	catch (Exception $e) {
		die('Erreur : ' . $e->getMessage()); 
	}
?>