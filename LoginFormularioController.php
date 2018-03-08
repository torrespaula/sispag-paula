<?php
# Sistema: SisPag
# Descrição: Página de Login do Sistema
# Nome do Programa: LoginFormularioController.php
# Programador(a): Paula Torres
# Data da criação: 07/03/2018

# Recebendo dados de Login

require_once('library.php');

$_usuario = trim($_POST['_usuario']);
$_senha = trim($_POST['_senha']);

# Validação dos dados 

if ($_usuario=='paula' && $_senha=='123456')
{
  urlPrincipal();
}
else
{
  header('Location: http://localhost/sispag-paula/LoginFormulario.html');
}
?>