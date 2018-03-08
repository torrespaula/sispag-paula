<!DOCTYPE html>
<html>
<head>
  <title>Folha de Pagamento</title>
  <link rel="stylesheet" type="text/css" href="sispag.css">
</head>
 
<body>
  <table>
  <form action="FormularioFuncionarioController.php" method= "POST">
   <caption class="titulo fonte"> <b>Calculo Salarial</b> </caption>
  
  <tr>
    <td class="fundo"> <b>CPF</b> </td>  
    <td> <input type="text" name="_cpf" size="20" maxlength="11" placeholder="Apenas numeros"> </td> 
  </tr>
  <tr>
    <td class="fundo"> <b>Funcionario</b> </td>
    <td> <input type="text" name="_funcionario"> </td>
  </tr>
  <tr>
    <td class="fundo"> <b>Ano/Nascimento</b> </td>
    <td> <input type="text" name="_anonascimento"> </td> 
  </tr>
  <tr>
    <td class="fundo"> <b>Salario Base</b> </td> 
    <td> <input type="text" name="_salariobase" placeholder="R$">  </td>
  </tr>
  <tr>
     <td class="fundo"> <b>Qnt. Filhos</b> </td> 
     <td> <input type="number" name="_qntfilhos" min="0" max="70"></td>
  </tr>
  <tr> 
     <td colspan="2"><input type="submit" value="calcular"> </td>
  </tr>
  </form>
  </table>
   
</body>
</html>
