<?php
	$dbname = "pjmt";
	$usuario="root";
	$senha = "ifpe";
// $dbname = "id5464648_camila";
// $usuario="id5464648_root";
// $senha = "camila123";
	
try {
	  	$conn = new PDO("mysql:host=localhost;dbname=$dbname", $usuario, $senha);
	  	// $conn = new PDO("mysql:host=localhost:3306;dbname=id5794465_camila","id5794465_root","24682468"); //conexão webhost
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}
 
?>