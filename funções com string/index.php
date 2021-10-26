<?php

// Documentação do tema: https://www.php.net/manual/pt_BR/ref.strings.php

//https://www.lipsum.com/ Gerador de textos aleatórios.

    $conteudo = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pretium lectus non tellus commodo ornare. Curabitur nisl sapien, eleifend id sagittis in, varius facilisis ipsum. Duis finibus malesuada massa non rutrum. Nunc tincidunt condimentum libero, eu fermentum justo sodales in. Duis sit amet justo quis neque mollis iaculis at vitae eros. Integer sit amet mauris nec ligula blandit rhoncus quis at nisl. In mattis ultricies ipsum, bibendum lacinia metus efficitur vitae. Donec at metus sed justo tempus iaculis.';

    // Serve para recortar uma string com base nos parametros(variavel,inicio e fim)

 //   echo substr($conteudo,0,22);

    // Serve para criar um array com base no delimitador no caso o espaço

    $nome = 'Renato Gregorio';

    $nomes = explode(' ',$nome);

//    print_r($nomes);

    // Serve para juntar um array com base no delimitador usado no caso espaço

    $nomes = implode(' ',$nomes);

//    echo $nomes;


    // Retira as tags HTML e PHP de uma string

    $conteudo = '<h1>Renato Gregorio</h1>';

//    echo strip_tags($conteudo);

    //htmlentities — Converte todos os caracteres aplicáveis em entidades html.

    echo htmlentities('<div></div>');






?>