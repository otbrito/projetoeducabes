<?php

if(isset($_GET['soma'])){

    $g1 = $_GET['g1'];
    $g2 = $_GET['g2']; 
    $g3 = $g1-$g2; 

    $g4 = $_GET['g4']; 

    $g5 = $g3-$g4; 

    $g6 = $_GET['g6']; 

    $g7 = $g5-$g6;

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DVA</title>
    
</head>
<body>

<form action="" method="get" align="center" boder="2">
<fieldset> 
<legend> <b> Demonstração do Valor Adicionado - DVA</b></legend>   


<p>(+) RECEITAS</p>
<input type="number" <?php if(isset($g1)){echo "Value = '$g1' ";}?> name="g1" placeholder="Valor 1"><br/>

<p>(-) INSUMOS ADQUIRIDOS DE TERCEIROS</p>
<input type="number" <?php if(isset($g2)){echo "Value = '$g2' ";}?> name="g2" placeholder="Valor 2"><br/>

<p>(=) VALOR ADICIONADO BRUTO</p>
<input type="number" <?php if(isset($g3)){echo "Value = '$g3' ";}?> name="soma" disabled=""><br/>

<p>(-) DEPRECIAÇÃO, AMORTIZAÇÃO E EXAUSTÃO</p>
<input type="number" <?php if(isset($g4)){echo "Value = '$g4' ";}?> name="g4" placeholder="Valor 3"><br/>

<p>(=) VALOR ADICIONADO LÍQUIDO</p>
<input type="number" <?php if(isset($g5)){echo "Value = '$g5' ";}?> name="soma" disabled=""><br/>


<p>(-) VALOR ADICIONADO RECEBIDO EM TRANSFERÊNCIA</p>
<input type="number" <?php if(isset($g6)){echo "Value = '$g6' ";}?> name="g6" placeholder="Valor 4"><br/>


<p>(=) VALOR ADICIONADO TOTAL A DISTRIBUIR</p>
<input type="number" <?php if(isset($g7)){echo "Value = '$g7' ";}?> name="soma" disabled=""><br/>

<button name="soma">Resolver</button>
</fieldset><br>
</form>

<a href="principal.php">Volte a Página Principal</a><br>

</body>
</html>