<?php
	class Pessoa{

		private $nome = 'Renato';
		private $idade = '27';
		private $peso = '120KG';

		public function comer(){
			echo 'Estou me alimentando!';
		}
		public function assistir(){
			echo 'Eu estou assisistindo!';
			
		}
	}

//Instanciar
		$pessoa = new Pessoa;
		$pessoa->comer();
		$pessoa->assistir();

	



?>