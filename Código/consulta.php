<?php

include_once("conexao.php");


$sql = "select * from usuarios";

$consulta = mysqli_query($conexao,$sql);

$registros = mysqli_num_rows($consulta);

mysqli_close($conexao);

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro</title>
    <link rel="stylesheet" type="text/css" href="t.css" media="screen">
</head>
<body>
<div class="container">
    <nav>
        <ul class="menu">
        <a href="index.php"><li>Consultar Cadastro</li></a>
            <a href="consultas.php"><li>Consultas</li></a>
        </ul>
    </nav>
    <section><h1>Consultas</h1><hr><br><br>
    
    <?php

    print "$registros registros encontrados.";
    ?>



</section>

</div>
    
</body>
</html>