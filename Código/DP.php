<?php

if(isset($_GET['soma'])){
    $s1 = $_GET['s1']; // salário bruto
    $s2 = $_GET['s2']; // percentual de previdência
    $s3 = $_GET['s3']; // pensão
    $s4 = $_GET['s4']; // consignado

    $s5 = $s1*0.08; // FGTS

    $s7 = $s1*($s2/100); // previdência

    $s9 = $s1-$s7;

    $s8 = $s9*($s3/100); // pensão

    $s6 = $s1 - $s7 - $s8 - $s4; // salário líquido
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DP</title>
    
</head>
<body  >

<form action="" method="get" align="center" boder="2">
<fieldset> 
<legend> <b> Folha de Pagamento</b></legend>   


<p>(+) Salário Bruto</p>
<input type="number" <?php if(isset($s1)){echo "Value = '$s1' ";}?> name="s1" placeholder="Valor 1"><br/>

<p>(-) Percentual de Previdência</p>
<input type="number" <?php if(isset($s2)){echo "Value = '$s2' ";}?> name="s2" placeholder="Valor 2"><br/>

<p>(-) Percentual de Pensão Alimentícia</p>
<input type="number" <?php if(isset($s3)){echo "Value = '$s3' ";}?> name="s3" placeholder="Valor 3"><br/>

<p>(-) Consignado</p>
<input type="number" <?php if(isset($s4)){echo "Value = '$s4' ";}?> name="s4" placeholder="Valor 4"><br/>

<p>(=) FGTS</p>
<input type="number" <?php if(isset($s5)){echo "Value = '$s5' ";}?> name="soma" disabled=""><br/>

<p>(=) Salário Líquido</p>
<input type="number" <?php if(isset($s6)){echo "Value = '$s6' ";}?> name="soma" disabled=""><br/>

<button name="soma">Resolver</button>
</fieldset><br>
</form>

<a href="principal.php">Volte a Página Principal</a><br>

</body>
</html>