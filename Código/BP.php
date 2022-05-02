<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balanço Patrimonial</title>
    
</head>
<body>

<table action="" method="get" align="center"  class="tabela" border="1" margin="2">
<tr>

<td><b><h1>Ativo</h1></b></td>
<td><b><h1>Passivo</h1></b></td>
<td><b><h1>Patrimônio Líquido</h1></b></td>

<tr>


    <td><legend> <i><b>Ativo Circulante</b></i></legend>Caixa
    <input type="number" <?php if(isset($d1)){echo "Value = '$d1' ";}?> name="d1" placeholder="Valor 1"></td>

    <td><legend> <i><b>Passivo Circulante</b></i></legend>Fornecedores
    <input type="number" <?php if(isset($d1)){echo "Value = '$d1' ";}?> name="d1" placeholder="Valor 1"></td>
    
    <td><legend> <i><b>PL</b></i></legend>Capital Social
    <input type="number" <?php if(isset($d1)){echo "Value = '$d1' ";}?> name="d1" placeholder="Valor 1"></td>
    
    
</tr>

<tr>


    <td>Banco
    <input type="number" <?php if(isset($d1)){echo "Value = '$d1' ";}?> name="d1" placeholder="Valor 1"></td>

    <td>Contas a Pagar
    <input type="number" <?php if(isset($d1)){echo "Value = '$d1' ";}?> name="d1" placeholder="Valor 1"></td>
    
    <td>Capital Social a Integralizar
    <input type="number" <?php if(isset($d1)){echo "Value = '$d1' ";}?> name="d1" placeholder="Valor 1"></td>
   
    
</tr>

<tr>


    <td>Estoque
    <input type="number" <?php if(isset($d1)){echo "Value = '$d1' ";}?> name="d1" placeholder="Valor 1"></td>

    <td>Adiantamento de Clientes
    <input type="number" <?php if(isset($d1)){echo "Value = '$d1' ";}?> name="d1" placeholder="Valor 1"></td>
    
    <td>Reserva de Lucro
    <input type="number" <?php if(isset($d1)){echo "Value = '$d1' ";}?> name="d1" placeholder="Valor 1"></td>
    
    
</tr>

<tr>


    <td>Duplicatas a Receber
    <input type="number" <?php if(isset($d1)){echo "Value = '$d1' ";}?> name="d1" placeholder="Valor 1"></td>

    <td>Financiamento a Curto Prazo
    <input type="number" <?php if(isset($d1)){echo "Value = '$d1' ";}?> name="d1" placeholder="Valor 1"></td>
    
    <td>Outros
    <input type="number" <?php if(isset($d1)){echo "Value = '$d1' ";}?> name="d1" placeholder="Valor 1"></td>
    
    
</tr>

<tr>


    <td>Caixa
    <input type="number" <?php if(isset($d1)){echo "Value = '$d1' ";}?> name="d1" placeholder="Valor 1"></td>

    <td><legend> <i><b>Passivo Não Circulante</b></i></legend>Financiamento a Longo Prazo
    <input type="number" <?php if(isset($d1)){echo "Value = '$d1' ";}?> name="d1" placeholder="Valor 1"></td>
    
    
    
</tr>

<tr>


    <td>Adiantamento a Fornecedor
    <input type="number" <?php if(isset($d1)){echo "Value = '$d1' ";}?> name="d1" placeholder="Valor 1"></td>

    
    
    
</tr>

<tr>


    <td>Despesa Antecipada com Seguro
    <input type="number" <?php if(isset($d1)){echo "Value = '$d1' ";}?> name="d1" placeholder="Valor 1"></td>

    
    
    
</tr>

<tr>


    <td><legend> <i><b>Ativo Não Circulante</b></i></legend>
    
  
</tr>

<tr>

<td></td>
    
</tr>
<tr>


    <td><legend> <i><b>Realizável a Longo Prazo</b></i></legend>
    
    
</tr>
<tr>

<td></td>
    
</tr>

<tr>


    <td><legend> <i><b>Investimentos</b></i></legend>
    
    
</tr>

<tr>


    <td><legend> <i><b>Imobilizado</b></i></legend>Móveis
    <input type="number" <?php if(isset($d1)){echo "Value = '$d1' ";}?> name="d1" placeholder="Valor 1"></td>

    
</tr>

<tr>


    <td>Terreno
    <input type="number" <?php if(isset($d1)){echo "Value = '$d1' ";}?> name="d1" placeholder="Valor 1"></td>

    
</tr>

<tr>


    <td>Veículos
    <input type="number" <?php if(isset($d1)){echo "Value = '$d1' ";}?> name="d1" placeholder="Valor 1"></td>

    
</tr>

<tr>


    <td>Máquinas e Equipamentos
    <input type="number" <?php if(isset($d1)){echo "Value = '$d1' ";}?> name="d1" placeholder="Valor 1"></td>

    
</tr>

<tr>


    <td><legend> <i><b>Intangíveis</b></i></legend>Sistemas
    <input type="number" <?php if(isset($d1)){echo "Value = '$d1' ";}?> name="d1" placeholder="Valor 1"></td>

    
</tr>

<tr>


    <td>TOTAL:
    <input type="number" <?php if(isset($td)){echo "Value = '$td' ";}?> name="total_d" disabled=""></td>
    <button name="total_c">Total_Ativos</button>

    <td>TOTAL:
    <input type="number" <?php if(isset($td)){echo "Value = '$td' ";}?> name="total_d" disabled=""></td>
    <button name="total_c">Total Passivos</button>

    <td>TOTAL:
    <input type="number" <?php if(isset($td)){echo "Value = '$td' ";}?> name="total_d" disabled=""></td>
    <button name="total_c">Total_PL</button>
    
</tr>

<tr>


    <td>TOTAL de Ativos:
    <input type="number" <?php if(isset($td)){echo "Value = '$td' ";}?> name="total_d" disabled=""></td>
    <button name="total_c">Total_Comparativo_A</button>

    <td>TOTAL de Passivos e PL:
    <input type="number" <?php if(isset($td)){echo "Value = '$td' ";}?> name="total_d" disabled=""></td>
    <button name="total_c">Total_Comparativo_P_PL</button>
   
    
</tr>



</table><br>

<a href="principal.php">Volte a Página Principal</a><br>
</tr>
</body>
</html>