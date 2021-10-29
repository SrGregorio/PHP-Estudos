<?php
	class Pessoa{

		private $nome = 'Renato';
		private $idade = '27';
		private $peso = '120KG';

		private function jogar(){
			echo 'Estou jogando WYD!';
		}
		private function estudar(){
			echo 'Estou estudando para aprimorar meus conhecimentos!';
		}
		
		function master(){
        $this->jogar();
        $this->estudar();
    	}
	}

	//Instanciar
		$pessoa = new Pessoa;
		$pessoa->master();	

?>