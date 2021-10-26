<?php

/*
Documentação foreach: https://www.php.net/manual/pt_BR/control-structures.foreach.php
Documentação for: https://www.php.net/manual/pt_BR/control-structures.for.php 
*/



	$pessoal = array(
		"Nome: " => 'Renato',
		"Idade: " => '27 anos',
		"Sexo: " => 'Masculino'
	);
	foreach ($pessoal as $key => $value) {
		echo $key;
		echo $value;
		echo '<hr>';

	}

	// Forma para percorrer array com o for
	$pessoal2 = array('Renato','27 anos','Masculino');

	$total = count($pessoal2);
		
		for($i = 0; $i < $total; $i++){
			echo $pessoal2[$i];
			echo '<br>';

		}

?>
