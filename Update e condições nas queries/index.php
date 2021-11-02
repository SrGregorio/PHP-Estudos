<?php
	
	$pdo = new PDO('mysql:host=localhost;dbname=estudo','root','');

	$id = 1;
	$nome = 'Heitor';
	$sobrenome = 'Gregório';

	$sql = $pdo->prepare("UPDATE `clientes` SET nome=?, sobrenome=? WHERE id=$id");

	if($sql->execute(array($nome, $sobrenome))){
		echo 'Meu cliente foi atualizado com exito!';
	}
?>