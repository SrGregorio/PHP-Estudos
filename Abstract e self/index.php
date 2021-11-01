<?php

/*
Documentação: https://www.php.net/manual/pt_BR/language.oop5.abstract.php
Documentação: https://www.php.net/manual/pt_BR/language.oop5.paamayim-nekudotayim.php
*/

	abstract class Teste{
		
		public function func01(){
			echo 'Essa é a função 01';
		}
		
		public function func02(){
			echo 'Essa é a função 02';
		}
		
	}

	class Principal2{
		public static function Func05(){
			echo 'Metodo estático função 05';
		}

	}

	
	class Principal extends Teste{
		
		public static function func03(){
			echo 'Essa é a função 03';
		}
		public function func04(){
			//Principal::func03();
			self::func03();
			Principal2::func05();
		}

	}

	$principal = new Principal;
	$principal->func01();
	$principal->func02();
	Principal::func03();
	$principal->func04();
?>