<!DOCTYPE html>
<html>
<!-- Página de login- Sispag -->
    <head>
    	<title>Pagina de Login</title>
        <link rel="stylesheet" type="text/css" href="sispag.css">
    </head>
 <body>
     <table>
     <form action="LoginFormularioController.php" method= "POST">
     <caption class="titulo fonte"> <b>Login</b> </caption>
     <tr>
        <div class="container">
        <td><b>Usuario</b></td>
        <td><input type="text" placeholder="nome/usuario" name="_usuario" required></td>
    </tr>    
    <tr>
        <div class="container">
        <td><b>Senha</b></td>
        <td><input type="password" name="_senha" required></td>
    </tr>  
    <tr> 
        <td colspan="2"><input type="submit" value="entrar"> </td>
    </tr>
    <tr>
        <td colspan="2"><a href='http://www.google.com.br'>Esqueceu a senha?</a> </td>
    </tr>
     </table>
 </body>
</html>