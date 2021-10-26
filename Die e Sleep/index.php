<?php

/*
Documentação Sleep: https://www.php.net/manual/pt_BR/function.sleep.php
Documentação die : https://www.php.net/manual/pt_BR/function.die.php
*/

	//função para o código dormir por x segundos

		/*sleep(1);

		echo 'um';

		sleep(2);

		echo 'dois';

		sleep(3);

	 	echo 'tres';
	*/

	// função die = morrer o código  não executa nada após

		$nome = 'Renato';

		if($nome == 'joão'){
		echo 'tudo certo';
		}else{
			die();
		}


		sleep(1);

		echo 'um';

		sleep(2);

		echo 'dois';

		sleep(3);

		echo 'tres';

?>
