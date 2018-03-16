<?php  

# Sistema: SisPag
# Descrição: Este programa calcula o salário de funcionários
# Nome do Programa: FormularioFuncionarioController.php
# Programador(a): Paula Torres
# Data da criação: 05/03/2018

# Recebendo dados do formulário
#print_r($_POST);
#exit;
require_once('../session/startSession.php');



$_cpf = $_POST['_cpf'];
$_funcionario = $_POST['_funcionario'];
$_anoNascimento = $_POST['_anonascimento'];
$_salarioBase = $_POST['_salariobase'];
$_qntFilhos = $_POST['_qntfilhos'];

include'../library/library.php';

# Validação de dados

if ( strlen($_cpf) != 11 )
{
	urlPrincipal();
}

if ( empty( trim($_funcionario) ) )
{
    urlPrincipal();
}
if (1905>$_anoNascimento || $_anoNascimento>date('Y'))
{
	urlPrincipal();
}
if ($_qntFilhos<0) 
{
	urlPrincipal();
}

# Processando os dados recebidos

$_inss = inss($_salarioBase);
$_idade = idade($_anoNascimento);
$_abono = calculaAbono($_idade);
$_salarioFamilia = salarioFamilia($_qntFilhos);
$_salarioBruto = salarioBruto($_salarioBase, $_abono, $_salarioFamilia);
$_salarioLiquido = salarioLiquido($_salarioBruto, $_inss);



/*$_SESSION['_cpf'] = $_POST['_cpf'];
$_SESSION['_funcionario'] = $_POST['_funcionario'];
$_SESSION['_anonascimento'] = $_POST['_anonascimento'];
$_SESSION['_salariobase'] = $_POST['_salariobase'];
$_SESSION['_qntfilhos'] = $_POST['_qntfilhos'];*/

$_SESSION['entradas']=array('_cpf'=>$_cpf, '_funcionario'=>$_funcionario, '_anonascimento'=>$_anoNascimento, '_salariobase'=>$_salarioBase, '_qntFilhos'=>$_qntFilhos, '_calculaAbono'=>$_abono, '_inss'=>$_inss, '_idade'=>$_idade, '_salarioFamilia'=>$_salarioFamilia, '_salarioBruto'=>$_salarioBruto, '_salarioLiquido'=>$_salarioLiquido);

# Exibição dos dados
require_once('../view/ReciboFormularioFuncionario.php');

?>