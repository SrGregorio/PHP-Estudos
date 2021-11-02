<?php
	
	$pdo = new PDO('mysql:host=localhost;dbname=estudo','root','');

	$id = 8;

	$sql = $pdo->prepare("UPDATE `clientes` SET nome='Heitor', sobrenome='Gregório' WHERE id=$id");

	if($sql->execute()){
		echo 'Meu cliente foi atualizado com exito!';
	}


?>