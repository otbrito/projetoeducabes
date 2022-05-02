<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$profissao = $_POST['profissao'];

$sql = "insert into usuarios (nome, email, profissao) values ('$nome','$email','$profissao')";

$salvar = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Cadastro</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" media="screen">
</head>
<body>
<div class="container">
    <nav>
        <ul class="menu">
        <a href="index.php"><li>Cadastro</li></a>
        <a href="principal.php"><li>Demonstrações Contábeis</li></a>
        </ul>
    </nav>
    <section><h1>Confirmação de Cadastro</h1><hr><br><br>
    
    <?php
    if($linhas == 1){
        print "Cadastro efetuado com sucesso!";
    }else{
        print "Cadastro não efetuado.";
    }


    ?>


</section>

</div>
    
</body>
</html>