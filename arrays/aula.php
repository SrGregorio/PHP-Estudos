<?php

// Documentação: https://www.php.net/manual/pt_BR/language.types.array.php



	$pessoal1 = array(
		"nome" => 'Renato',
		"idade" => '27 anos',
		"sexo" => 'Masculino'
	);
	//echo $pessoal1["nome"];


	// Forma para percorrer array com o for
	
	$pessoal2 = array('Renato','27 anos','Masculino');

	$total = count($pessoal2);
		
		for($i = 0; $i < $total; $i++){
			echo $pessoal2[$i];
			echo '<br>';

		}


?>
