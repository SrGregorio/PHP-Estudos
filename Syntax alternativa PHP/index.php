<?php
	
// Documentação: https://www.php.net/manual/pt_BR/control-structures.alternative-syntax.php

	$nome = 'Renato';

	if($nome == 'Renato'):
		echo 'verdade';
	endif;
	echo '<br>';

	$contador = 0;
	while($contador<10):
		$contador ++;
		echo 'Oi';
		echo '<br>';
	endwhile;

	$array = array();
	foreach ($array as $key => $value):

	endforeach;

	for($i=0;$i<5;$i++):
		echo 'oi';
		echo '<hr>';
	endfor;	

?>