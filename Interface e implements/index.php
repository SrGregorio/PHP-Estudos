<?php
	include("interface.php");

	class Teste implements Interface1{

		public function PrintParametro($par){
			echo $par;
		}
		

	}

$teste = new Teste;
$teste->PrintParametro('Vamos nessa!');

?>