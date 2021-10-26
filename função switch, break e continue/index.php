<?php

/*
Documentação switch: https://www.php.net/manual/pt_BR/control-structures.switch.php
Documentação continue: https://www.php.net/manual/pt_BR/control-structures.continue.php
Documentação break: https://www.php.net/manual/pt_BR/control-structures.break.php    
*/


// Exemplo 1
$i = "cake";

switch ($i) {
    case "apple":
        echo "i is apple";
        break;
    case "bar":
        echo "i is bar";
        break;
    case "cake":
        echo "i is cake";
        break;

}
echo "<br>";

// Exemplo 2
$nome = "Renato";

switch ($nome) {
    case "Joao":
        echo "Nome é João";
        break;
    case "Renato":
        echo "Nome é Renato";
        break;    

}

//Exemplo continue
$contador = 0;
 	for($contador = 0; $contador < 10; $contador++){
        if($contador == 5) 
            continue;
        echo "$contador";
        echo "<hr>";  
     
 	}


// Exemplo break

     $contador = 0;
 	for($contador = 0; $contador < 10; $contador++){
        if($contador == 5) 
            break;
        echo "$contador";
        echo "<hr>";
     }
?>