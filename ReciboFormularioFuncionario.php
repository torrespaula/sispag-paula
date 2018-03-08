<!DOCTYPE html>
<html>
<head>
   <title>Folha de Pagamento</title>
   <link rel="stylesheet" type="text/css" href="sispag.css">
</head>

<body>
  <table>
    <caption class="titulo fonte"> <b>Calculo Salarial</b> </caption>
  <tr>
	  <td class="fundo"> <b>CPF</b> </td> 
	  <td> <?php echo $_cpf; ?> </td>
  </tr>
  <tr> 
  	  <td class="fundo"> <b>Funcionario</b> </td>
  	  <td> <?php echo $_funcionario; ?> </td>
  </tr>
  <tr> 
	  <td class="fundo"> <b>Idade</b> </td>
	  <td> <?php echo $_idade; ?> </td>
  </tr>
  <tr> 
	  <td class="fundo"> <b>Salario Base</b> </td> 
	  <td> <?php echo $_salarioBase; ?> </td>
  </tr>
  <tr>
  	  <td class="fundo"> <b>Salario Familia</b> </td> 
  	  <td> <?php echo $_salarioFamilia; ?> </td>
  </tr>
  <tr>
  	  <td class="fundo"> <b>Abono</b> </td>
  	  <td> <?php echo $_abono; ?> </td>
  </tr>
  <tr>
  	  <td class="fundo"> <b>Salario Bruto</b> </td> 
  	  <td> <?php echo $_salarioBruto; ?> </td>
  </tr>
  <tr>
  	  <td class="fundo"> <b>INSS</b> </td> 
  	  <td> <?php echo $_inss; ?> </td>
  </tr>
  <tr>
  	<td class="fundo"> <b>Salario Líquido</b> </td> 
  	<td> <?php echo $_salarioLiquido; ?> </td>
  </tr>
  <tr>
  	 <td>  <a href='http://localhost/sispag-paula/FormularioFuncionario.php'>Calcular novo salario</a> </td>
  </tr>	 	
  </table>

</body>
</html>