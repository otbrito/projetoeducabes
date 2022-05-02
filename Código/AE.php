<?php

if(isset($_GET['soma'])){
    $ae1 = $_GET['ae1']; // ativo circulante
    $ae2 = $_GET['ae2']; // passivo circulante
    $ae3 = $ae1/$ae2; // liquidez corrente

    $ae4 = $_GET['ae4']; // Ativo Não Circulante Realizável a Longo Prazo
    $ae5 = $_GET['ae5']; // passivo não circulante
    $ae6 = ($ae1+$ae4)/($ae2+$ae5); // liquidez geral

    $ae7 = $_GET['ae7']; // Estoques
    $ae8 = ($ae1+$ae7)/($ae2); // liquidez seca

    $ae9 = $_GET['ae9']; // caixa
    $ae10 = $ae9/$ae2; // liquidez imediata

    $ae11 = $_GET['ae9']; // ativo não circulante
    $ae12 = ($ae1+$ae11)/($ae2+$ae5); // solvência geral

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análise Econômica</title>
    
</head>
<body>

<form action="" method="get" align="center" boder="2">
<fieldset> 
<legend><b>Liquidez e Solvência</b></legend>   

<p>Ativo Circulante</p>
<input type="number" <?php if(isset($ae1)){echo "Value = '$ae1' ";}?> name="ae1" placeholder="Valor 1"><br/>

<p>Passivo Circulante</p>
<input type="number" <?php if(isset($ae2)){echo "Value = '$ae2' ";}?> name="ae2" placeholder="Valor 2"><br/>

<p>Liquidez Corrente</p>
<input type="number" <?php if(isset($ae3)){echo "Value = '$ae3' ";}?> name="soma" disabled=""><br/>


<p>Ativo Não Circulante Realizável a Longo Prazo</p>
<input type="number" <?php if(isset($ae4)){echo "Value = '$ae4' ";}?> name="ae4" placeholder="Valor 3"><br/>

<p>Passivo Não Circulante</p>
<input type="number" <?php if(isset($ae5)){echo "Value = '$ae5' ";}?> name="ae5" placeholder="Valor 4"><br/>

<p>Liquidez Geral</p>
<input type="number" <?php if(isset($ae6)){echo "Value = '$ae6' ";}?> name="soma" disabled=""><br/>

<p>Estoques</p>
<input type="number" <?php if(isset($ae7)){echo "Value = '$ae7' ";}?> name="ae7" placeholder="Valor 5"><br/>


<p>Liquidez Seca</p>
<input type="number" <?php if(isset($ae8)){echo "Value = '$ae8' ";}?> name="soma" disabled=""><br/>


<p>Disponíveis (Caixa)</p>
<input type="number" <?php if(isset($ae9)){echo "Value = '$ae9' ";}?> name="ae9" placeholder="Valor 6"><br/>

<p>Liquidez Imediata</p>
<input type="number" <?php if(isset($ae10)){echo "Value = '$ae10' ";}?> name="soma" disabled=""><br/>

<p>Ativo Não Circuante</p>
<input type="number" <?php if(isset($ae11)){echo "Value = '$ae11' ";}?> name="ae11" placeholder="Valor 7"><br/>

<p>Solvência Geral</p>
<input type="number" <?php if(isset($ae12)){echo "Value = '$ae12' ";}?> name="soma" disabled=""><br/>

<button name="soma">Resolver</button>
</fieldset><br>
</form>

<a href="principal.php">Volte a Página Principal</a><br>

</body>
</html>