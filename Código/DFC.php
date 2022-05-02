<?php

if(isset($_GET['soma'])){

    $p1= $_GET['p1']; //bloco de operações
    $p2= $_GET['p2'];
    $p3= $_GET['p3'];
    $p4= $_GET['p4'];
    $p5= $_GET['p5'];
    $p6= $_GET['p6'];
    $p7= $_GET['p7'];
    $p8= $_GET['p8'];

    $p9=$p1+$p2+$p3+$p4+$p5+$p6+$p7+$p8;

    $p10= $_GET['p10']; //bloco de investimentos
    $p11= $_GET['p11'];

    $p12= $p10-$p11;

    $p13= $_GET['p13']; //bloco de financiamento
    $p14= $_GET['p14'];
    $p15= $_GET['p15'];
    $p16= $_GET['p16'];
    $p17= $_GET['p17'];

    $p18= $p13+$p14-$p15-$p16-$p17;

    $p19= $p9+$p12+$p18; //fluxo de caixa

}

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DFC</title>
    
</head>
<body>

<form action="" method="get" align="center" boder="2">
<fieldset> 
<legend> <b> Demonstração do Fluxo de Caixa - DFC</b></legend>   
<h2><b>Atividades Operacionais</b></h2>

<p>(+) Recebimento de venda de produtos</p>
<input type="number" <?php if(isset($p1)){echo "Value = '$p1' ";}?> name="p1" placeholder="Valor 1"><br/>

<p>(-) Pagamento de impostos sobre faturamento</p>
<input type="number" <?php if(isset($p2)){echo "Value = '$p2' ";}?> name="p2" placeholder="Valor 2"><br/>

<p>(-) Pagamento a fornecedores</p>
<input type="number" <?php if(isset($p3)){echo "Value = '$p3' ";}?> name="p3" placeholder="Valor 3"><br/>

<p>(-) Pagamento de salários</p>
<input type="number" <?php if(isset($p4)){echo "Value = '$p4' ";}?> name="p4" placeholder="Valor 4"><br/>

<p>(-) Pagamento de impostos e encargos</p>
<input type="number" <?php if(isset($p5)){echo "Value = '$p5' ";}?> name="p5" placeholder="Valor 5"><br/>

<p>(-) Pagamento de custos indiretos</p>
<input type="number" <?php if(isset($p6)){echo "Value = '$p6' ";}?> name="p6" placeholder="Valor 6"><br/>

<p>(-) Pagamento de juros</p>
<input type="number" <?php if(isset($p7)){echo "Value = '$p7' ";}?> name="p7" placeholder="Valor 7"><br/>

<p>(-) Pagamento de despesas operacionais</p>
<input type="number" <?php if(isset($p8)){echo "Value = '$p8' ";}?> name="p8" placeholder="Valor 8"><br/>

<p>(=) Subtotal</p>
<input type="number" <?php if(isset($p9)){echo "Value = '$p9' ";}?> name="soma" disabled=""><br/>


<h2><b>Atividades de Investimento</b></h2>

<p>(+) Recebimento da venda de ativos imobilizados</p>
<input type="number" <?php if(isset($p10)){echo "Value = '$p10' ";}?> name="p10" placeholder="Valor 1"><br/>

<p>(-) Pagamento da compra de ativos imobilizados</p>
<input type="number" <?php if(isset($p11)){echo "Value = '$p11' ";}?> name="p11" placeholder="Valor 2"><br/>

<p>(=) Subtotal</p>
<input type="number" <?php if(isset($p12)){echo "Value = '$p12' ";}?> name="soma" disabled=""><br/>

<h2><b>Atividades de Financiamento</b></h2>

<p>(+) Captação de empréstimos</p>
<input type="number" <?php if(isset($p13)){echo "Value = '$p13' ";}?> name="p13" placeholder="Valor 1"><br/>

<p>(+) Aportes de capital</p>
<input type="number" <?php if(isset($p14)){echo "Value = '$p14' ";}?> name="p14" placeholder="Valor 2"><br/>

<p>(-) Amortização de empréstimos</p>
<input type="number" <?php if(isset($p15)){echo "Value = '$p15' ";}?> name="p15" placeholder="Valor 3"><br/>

<p>(-) Reduções de capital</p>
<input type="number" <?php if(isset($p16)){echo "Value = '$p16' ";}?> name="p16" placeholder="Valor 4"><br/>

<p>(-) Pagamento de dividendos</p>
<input type="number" <?php if(isset($p17)){echo "Value = '$p17' ";}?> name="p17" placeholder="Valor 5"><br/>

<p>(=) Subtotal</p>
<input type="number" <?php if(isset($p18)){echo "Value = '$p18' ";}?> name="soma" disabled=""><br/>

<h2><b>Fluxo de Caixa Total</b></h2>


<p>(=) Total</p>
<input type="number" <?php if(isset($p19)){echo "Value = '$p19' ";}?> name="soma" disabled=""><br/>



<button name="soma">Resolver</button>
</fieldset><br>
</form>

<a href="principal.php">Volte a Página Principal</a><br>

</body>
</html>