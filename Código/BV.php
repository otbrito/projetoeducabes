<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balancete de Verificação</title>
    
</head>


<body>
   <table action="" method="get" align="center"  class="tabela" border="1" margin="2">

<tr>

<td><b><h1>Contas</h1></b></td>
<td><b><h1>Débito</h1></b></td>
<td><b><h1>Crédito</h1></b></td>

</tr>

</tr>
<tr>

    <td><legend> <i><b>Contas de Resultado</b></i></legend>Receitas de Vendas</td>
    <td><input type="number" <?php if(isset($d1)){echo "Value = '$d1' ";}?> name="d1" placeholder="Valor 1"><br/></td>
    
    <td><input type="number" <?php if(isset($c1)){echo "Value = '$c1' ";}?> name="c1" placeholder="Valor 1"><br/></td>

</tr>

<tr>

    <td>CMV</td>
    <td><input type="number" <?php if(isset($d2)){echo "Value = '$d2' ";}?> name="d2" placeholder="Valor 2"><br/></td>
    
    <td><input type="number" <?php if(isset($c2)){echo "Value = '$c2' ";}?> name="c2" placeholder="Valor 2"><br/></td>
    
</tr><br>

<tr>

    <td>Despesa com Salários</td>
    <td><input type="number" <?php if(isset($d3)){echo "Value = '$d3' ";}?> name="d3" placeholder="Valor 3"><br/></td>
    
    <td><input type="number" <?php if(isset($c3)){echo "Value = '$c3' ";}?> name="c3" placeholder="Valor 3"><br/></td>
    
</tr><br>

<tr>

    <td>Despesas com Encargos Sociais</td>
    <td><input type="number" <?php if(isset($d4)){echo "Value = '$d4' ";}?> name="d4" placeholder="Valor 4"><br/></td>
    
    <td><input type="number" <?php if(isset($c4)){echo "Value = '$c4' ";}?> name="c4" placeholder="Valor 4"><br/></td>
    
</tr><br>

<tr>

    <td>Despesas com Água</td>
    <td><input type="number" <?php if(isset($d5)){echo "Value = '$d5' ";}?> name="d5" placeholder="Valor 5"><br/></td>
    
    <td><input type="number" <?php if(isset($c5)){echo "Value = '$c5' ";}?> name="c5" placeholder="Valor 5"><br/></td>
    
</tr><br>

<tr>

    <td>Despesas com Propaganda</td>
    <td><input type="number" <?php if(isset($d6)){echo "Value = '$d6' ";}?> name="d6" placeholder="Valor 6"><br/></td>
    
    <td><input type="number" <?php if(isset($c6)){echo "Value = '$c6' ";}?> name="c6" placeholder="Valor 6"><br/></td>
    
</tr><br>

<tr>

    <td>Despesas com Encargos Aluguel</td>
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
</tr><br>

<tr>

    <td>Outras Despesas</td>
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
</tr><br>

<tr>

    <td>Outras Receitas</td>
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
</tr><br>

<tr>

    <td><legend> <i><b>Contas de Patrimoniais</b></i></legend>Caixa</td>
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
</tr><br>

<tr>

    <td>Banco</td>
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
</tr><br>

<tr>

    <td>Duplicatas a Receber</td>
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
</tr><br>

<tr>

    <td>Máquinas e Equipamentos</td>
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
</tr><br>

<tr>

    <td>Móveis</td>
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
</tr><br>

<tr>

    <td>Veículos</td>
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
</tr><br>

<tr>

    <td>Banco</td>
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
</tr><br>

<tr>

    <td>Estoque</td>
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
</tr><br>

<tr>

    <td>Sistemas</td>
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
</tr><br>

<tr>

    <td>Terreno</td>
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
</tr><br>

<tr>

    <td>Despesa Antecipada com Seguro</td>
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
</tr><br>

<tr>

    <td>Adiantamento a Fornecedor</td>
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
</tr><br>

<tr>

    <td>Adiantamento de Clientes</td>
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
</tr><br>

<tr>

    <td>Fornecedores</td>
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
</tr><br>

<tr>

    <td>Capital Social</td>
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
</tr><br>

<tr>

    <td>Capital Social a Integralizar</td>
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
</tr><br>

<tr>

    <td>Financiamento a Curto Prazo</td>
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
</tr><br>

<tr>

    <td>Outros Ativos</td>
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
</tr><br>

<tr>

    <td>Outros Passivos</td>
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
    <td><input type="number" <?php if(isset($v1)){echo "Value = '$v1' ";}?> name="v1" placeholder="Valor 1"><br/></td>
    
</tr><br>

<tr>

    <td><i><h2>Total</h2></i></td>
    <td><input type="number" <?php if(isset($td)){echo "Value = '$td' ";}?> name="soma" disabled=""></td>
    <button  name="soma">Resolver_Débito</button>
    
    <td><input type="number" <?php if(isset($tc)){echo "Value = '$tc' ";}?> name="soma" disabled=""></td>
    <button name="soma">Resolver_Crédito</button>
    
</tr><br>



</table><br><br>



<a href="principal.php">Volte a Página Principal</a><br>
</body>
</html>