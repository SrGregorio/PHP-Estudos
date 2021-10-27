<!--
Documentação $_GET: https://www.php.net/manual/pt_BR/reserved.variables.get.php
Documentação $_POST: https://www.php.net/manual/pt_BR/reserved.variables.post.php
Documnetação isset: https://www.php.net/manual/pt_BR/function.isset.php
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <?php
    /* if(isset($_GET['acao'])){
        $nome = $_GET['nome'];
        $email = $_GET['email'];
    
        echo $nome;
        echo '<br>';
        echo $email;
    }
    */
    /*if(isset($_POST['acao'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
    
        echo $nome;
        echo '<br>';
        echo $email;
    }*/

    if(isset($_POST['acao'])){  
       foreach ($_POST['valor'] as $key => $value) {
        echo $key;
        echo '=>';
        echo $value;
        echo '<hr>';
       }
            
        }
   
    ?>
    
    <form method="POST">
        <input type="checkbox" name="valor[]" value="10">10
        <input type="checkbox" name="valor[]" value="20">20
        <input type="checkbox" name="valor[]" value="30">30
        <input type="checkbox" name="valor[]" value="40">40
        <input type="submit" name= "acao" value="enviar">
    </form>

 <!--  <form method="POST">
        <input type="text" name="nome">
        <input type="text" name="email">
        <input type="submit" name= "acao" value="enviar">
    </form>
   
-->   
</body>
</html>

