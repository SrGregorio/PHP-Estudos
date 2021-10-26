<?php

// Documentação: https://www.php.net/manual/pt_BR/function.date.php

    /*
        *Trabalhando com datas
    */

    //Função para definir fuso horário

    date_default_timezone_set('America/Sao_Paulo');

    //Variavel para definir padrão de data e horario

    $data = date('d/m/Y H:i:s');

    echo $data;



?>