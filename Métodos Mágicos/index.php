<?php

//Documentação Métodos Mágicos: https://www.php.net/manual/pt_BR/language.oop5.magic.php
	
	include('Class1.php');
	$teste = new Class1('Renato',27);

	echo $teste->getNome();
	echo $teste->getIdade();

?>