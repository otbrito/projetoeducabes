<?php

if(isset($_GET['soma'])){
    $v1 = $_GET['v1']; //Receita Operacional Bruta
    $v2 = $_GET['v2']; //Deduções da Receita Operacional Bruta
    $r = $v1-$v2; //Receita Operacional Líquida
    $v3 = $_GET['v3']; //CMV
    $r2 = $r - $v3; //Resultado Operacional Bruto
    $v4 = $_GET['v4'];//Despesas Operacionais
    $v5 = $_GET['v5'];//Despesas Financeiras Líquidas
    $v6 = $_GET['v6'];//Outras Receitas
    $v7 = $_GET['v7'];//Outras Despesas
    $r3 = $r2 - $v4 - $v5 + $v6 - $v7;//resultado Operacional Antes do IR e CSLL (LAIR)
    $v8 = $_GET['v8'];//Provisão para IR e CSLL
    $r4 = $r3 - $v8;//Lucro Liquido Antes das Participações
    $v9 = $_GET['v9'];//Pro Labore
    $r5 = $r4 - $v9;//Resultado Líquido do Exercício
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DRE</title>
</head>
<body text="black" >
    
<form action="" method="get" align="center" boder="2">
<fieldset> 
<legend> <b> Demonstração do Resultado do Exercício - DRE</b></legend>   
<p >Receita Operacional Bruta</p>
<input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/>
<p>Deduções da Receita Operacional Bruta (-)</p>
<input type="number" <?php if(isset($v2)){echo "Value = '$v2' ";}?> name="v2" placeholder="Valor 2"><br/>
<p>Receita Operacional Líquida (=)</p>
<input type="number" <?php if(isset($r)){echo "Value = '$r' ";}?> name="soma" disabled=""><br/>

<p>CMV - Custos das Vendas (-)</p>
<input type="number" <?php if(isset($v3)){echo "Value = '$v3' ";}?> name="v3" placeholder="Valor 3"><br/>

<p>Resultado Operacional Bruto (=)</p>
<input type="number" <?php if(isset($r2)){echo "Value = '$r2' ";}?> name="soma" disabled=""><br/>

<p>Despesas Operacionais (-)</p>
<input type="number" <?php if(isset($v4)){echo "Value = '$v4' ";}?> name="v4" placeholder="Valor 4"><br/>

<p>Despesas Financeiras Líquidas (-)</p>
<input type="number" <?php if(isset($v5)){echo "Value = '$v5' ";}?> name="v5" placeholder="Valor 5"><br/>

<p>Outras Receitas (+)</p>
<input type="number" <?php if(isset($v6)){echo "Value = '$v6' ";}?> name="v6" placeholder="Valor 6"><br/>

<p>Outras Despesas (-)</p>
<input type="number" <?php if(isset($v7)){echo "Value = '$v7' ";}?> name="v7" placeholder="Valor 7"><br/>

<p>Resultado Operacional Bruto (=)</p>
<input type="number" <?php if(isset($r3)){echo "Value = '$r3' ";}?> name="soma" disabled=""><br/>

<p>Provisão para IR e CSLL (-)</p>
<input type="number" <?php if(isset($v8)){echo "Value = '$v8' ";}?> name="v8" placeholder="Valor 8"><br/>

<p>Lucro Líquido Antes das Participações (=)</p>
<input type="number" <?php if(isset($r4)){echo "Value = '$r4' ";}?> name="soma" disabled=""><br/>

<p>Prolabore (-)</p>
<input type="number" <?php if(isset($v9)){echo "Value = '$v9' ";}?> name="v9" placeholder="Valor 9"><br/>

<p>Resultado Líquido do Exercício (=)</p>
<input type="number" <?php if(isset($r5)){echo "Value = '$r5' ";}?> name="soma" disabled=""><br/>

<button name="soma">Resolver</button>
</fieldset><br>

<a href="principal.php">Volte a Página Principal</a><br>
  
</body>
</html>


</body>
</html>