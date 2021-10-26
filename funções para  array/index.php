<?php

//Documentação funções array: https://www.php.net/manual/pt_BR/ref.array.php

//Junção dos arrays e grava em um novo array sem valores duplicados

$array1 = array("cor" => "vermelho", 2, 4);
$array2 = array("a", "b", "cor" => "verde", "forma" => "trapezoide", 4);
$result = array_merge($array1, $array2);
$result1 = array_unique($result);
print_r($result1);


?>