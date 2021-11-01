<?php

/*
Documentação herança de objetos: https://www.php.net/manual/pt_BR/language.oop5.inheritance.php
Documentação final class: https://www.php.net/manual/pt_BR/language.oop5.final.php	
*/

	class Pai{
		private function MostrarOla() {
			echo 'Olá Mundo!';
		}

		public function MostrarBy(){
			echo 'Mostrar by!';
			$this->MostrarOla();
		}

	}

	final class Filha extends Pai{
		public function MostrarTchau(){
			echo 'Tchau Mundão!';
		}
	}

	$filha = new Filha;
	$filha->MostrarBy();
	$filha->MostrarTchau();


?> 