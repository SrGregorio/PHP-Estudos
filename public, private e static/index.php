<?php
	include('exemplo.class.php');
	// Instancia de objeto
	
	$exemplo = new Exemplo();
	$exemplo->var1;

	//Imprindo variável private
	$exemplo2 = new Exemplo();
	$exemplo2->SetVar2('Show');
	echo $exemplo2->PegaVar2(); 
	
	//Para imprimir uma public utiliza o exemplo abaixo
	echo $exemplo->var1; 
	echo '<br>';
	
	//Para imprimir um public static utiliza o exemplo abaixo
	echo exemplo::$var3;
	
	// Exemplo imprimindo metodo static
	echo Exemplo::metodostatic();


?>