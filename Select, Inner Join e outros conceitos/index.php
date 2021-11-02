<?php
/*
 	Documentação PDO: https://www.php.net/manual/pt_BR/pdo.exec.php
 	Documentação PDO FETCH ASSOC: https://www.php.net/manual/pt_BR/pdostatement.fetch.php
*/

	$pdo = new PDO('mysql:host=localhost;dbname=estudo','root','');

/*	$sql = $pdo->prepare("SELECT * FROM posts");

	$sql->execute();

	$info = $sql->fetchAll();

	echo '<pre>';
	print_r($info);
	echo '</pre>';
*/

/*	foreach ($info as $key => $value) {
		echo 'Titulo: '.$value['titulo'].'<br>';
		echo 'Noticia: '.$value['conteudo'];
		echo '<hr>';
	}
*/

/*	for ($i=0; $i < count($info); $i++) { 
		echo 'Titulo: '.$info[$i]['titulo'].'<br>';
		echo 'Noticia: '.$info[$i]['conteudo'];
		echo '<hr>';
	}
*/

/*	$sql = $pdo->prepare("SELECT * FROM categorias");

	$sql->execute();

	$info = $sql->fetchAll();

	foreach ($info as $key => $value) {
		$categoria_id = $value['id'];
		echo 'Exibindo posts de: '.$value['nome'];
		echo '<br>';
		$sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = $categoria_id");
		$sql->execute();
		$infoPosts = $sql->fetchAll();
		foreach ($infoPosts as $key => $value) {
			echo 'Titulo: '.$value['titulo'].'<br>';
			echo 'Noticia: '.$value['conteudo'];
			echo '<hr>';
		}
	}
*/

	$sql = $pdo->prepare("SELECT `posts`.*, `categorias`.*, `posts`.`id` AS `post_id` FROM `posts` INNER JOIN `categorias` ON `posts`.`categoria_id`=`categorias`.`id`");

	$sql->execute();

	$info = $sql->fetchAll(PDO::FETCH_ASSOC);

	echo '<pre>';
	print_r($info);
	echo '</pre>';

?>