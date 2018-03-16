<!DOCTYPE html>
<html>

<?php
 require_once('../session/startSession.php');
 ?>

<head>
   <title>Folha de Pagamento</title>
   <link rel="stylesheet" type="text/css" href="../css/sispag.css">
</head>

<body>
  <table>
    <caption class="titulo fonte"> <b>Calculo Salarial</b> </caption>
  <tr>
	  <td class="fundo"> <b>CPF</b> </td> 
	  <td> <?php echo $_SESSION['entradas']['_cpf']; ?> </td>
  </tr>
  <tr> 
  	  <td class="fundo"> <b>Funcionario</b> </td>
  	  <td> <?php echo $_SESSION['entradas']['_funcionario']; ?> </td>
  </tr>
  <tr> 
	  <td class="fundo"> <b>Idade</b> </td>
	  <td> <?php echo $_SESSION['entradas']['_idade']; ?> </td>
  </tr>
  <tr> 
	  <td class="fundo"> <b>Salario Base</b> </td> 
	  <td> <?php echo $_SESSION['entradas']['_salariobase']; ?> </td>
  </tr>
  <tr>
  	  <td class="fundo"> <b>Salario Familia</b> </td> 
  	  <td> <?php echo $_SESSION['entradas']['_salarioFamilia']; ?> </td>
  </tr>
  <tr>
  	  <td class="fundo"> <b>Abono</b> </td>
  	  <td> <?php echo $_SESSION['entradas']['_calculaAbono']; ?> </td>
  </tr>
  <tr>
  	  <td class="fundo"> <b>Salario Bruto</b> </td> 
  	  <td> <?php echo $_SESSION['entradas']['_salarioBruto']; ?> </td>
  </tr>
  <tr>
  	  <td class="fundo"> <b>INSS</b> </td> 
  	  <td> <?php echo $_SESSION['entradas']['_inss']; ?> </td>
  </tr>
  <tr>
  	<td class="fundo"> <b>Salario Líquido</b> </td> 
  	<td> <?php echo $_SESSION['entradas']['_salarioLiquido']; ?> </td>
  </tr>
  <tr>
  	 <td>  <a href='http://localhost/sispag-paula/session/destroySession.php'>Sair</a> </td>
  </tr>	 	
  </table>

</body>
</html>