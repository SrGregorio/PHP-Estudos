<?php

/*
Documentação for: https://www.php.net/manual/pt_BR/control-structures.for.php 
Documentação while: https://www.php.net/manual/pt_BR/control-structures.while.php
Documentação do while: https://www.php.net/manual/pt_BR/control-structures.do.while.php
*/

// Laço de repetição

/* for($contador=0;$contador<10;$contador++){
 	echo "Conta BB";
 	echo "<hr>";

 }
 */
 	
 /*	$contador = 0;
 	while($contador < 10){
 		echo "Conta Maloka";
 		echo "<hr>";
 		$contador++;
 	}
 */
 	$contador = 11;
 	do{
 		echo "Vamo nessa","<br>";
 		$contador++;
 	}while($contador < 10);
 	
 /*
 O ultimo exemplo executa o comando uma vez antes de verificar a condição, se for verdadeiro continua no loop, se for falso retorna uma unica execão.
*/
?>
