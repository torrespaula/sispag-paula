<?php
session_name('sispag');
session_start();
session_destroy();
header('Location: ../view/LoginFormulario.php');
exit;
?>