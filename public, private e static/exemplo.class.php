<?php
	/**
		Esta classe é de exemplo
	 */
	class Exemplo{
		public $var1 = 'Renato';
		private $var2;
		public static $var3 = 'Lindo';

		public function SetVar2($var2){
			$this->var2 = $var2;
		}

		public function PegaVar2(){
			return $this->var2;
		}

		private function metodo2(){

		}

		public static function metodostatic(){
			echo 'Metódo estático';
		}


	}

?>