<?php
	
	$pdo = new PDO('mysql:host=localhost;dbname=estudo','root','');

	$id =1;

	$sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");

	if($sql->execute(array($id))){
		echo 'Meu cliente foi excluído com exito!';
	}


?>