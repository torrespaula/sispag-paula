<?php
# Sistema: SisPag
# Descrição: Página de Login do Sistema
# Nome do Programa: LoginFormularioController.php
# Programador(a): Paula Torres
# Data da criação: 07/03/2018


// Start the session
//session_start();

# Recebendo dados de Login

require_once('../library/library.php');
session_name("sispag");

session_start();
$_usuario = trim($_POST['_usuario']);
$_senha = trim($_POST['_senha']);

$_SESSION['_usuario']=$_usuario;
$_SESSION['_senha']=$_senha;

# Validação dos dados 

verificarLogin($_usuario,$_senha);

?>