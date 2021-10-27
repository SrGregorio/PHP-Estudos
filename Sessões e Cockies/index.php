<?php
/*
	Documentação session: https://www.php.net/manual/pt_BR/book.session.php
	Documentação setcookies; php.net/manual/pt_BR/function.setcookie.php
*/

    session_start();
    //$_SESSION['nome'] = 'Renato';
    setcookie('nome', 'Renato', time() + (60*60*24), '/');
    echo $_COOKIE['nome'];
 
?>