<?php
// Sessão
include("banco_funcionario.php");
// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
?>
<!DOCTYPE html>
<html>
<head>
<?php
include ("../css/head1.php");
?>
<title> Cadastro de Funcionario </title>
</head>
<body id="body_cadastro">
<center>
<h1> Cadastro de Funcionario </h1>
<br />
<br />
<table>
<form method="post" action="verifica_funcionario.php">
	<tr><td>Funcionario:</td><td><input class="input_cadastro" type="text" name="funcionario"></td></tr>
	<tr><td>Cpf:</td><td><input class="input_cadastro" type="text" name="cpf"></td></tr>
	<tr><td>Rg:</td><td><input class="input_cadastro" type="text" name="rg"></td></tr>
	<tr><td>Tel:</td><td><input class="input_cadastro" type="text" name="tel"></td></tr>
	<tr><td>Email:</td><td><input class="input_cadastro" type="text" name="email"></td></tr>
	<tr><td>Cep:</td><td><input class="input_cadastro" type="text" name="cep"></td></tr>
	<tr><td>Rua:</td><td><input class="input_cadastro" type="text" name="rua"></td></tr>
	<tr><td>Número:</td><td><input class="input_cadastro" type="text" name="numero"></td></tr>
	<tr><td>Bairro:</td><td><input class="input_cadastro" type="text" name="bairro"></td></tr>
	<tr><td>Cidade:</td><td><input class="input_cadastro" type="text" name="cidade"></td></tr>
</table>
	<input id="submit_cadastro" type="submit" value="enviar" name="button"><br/>
</form>
<br />
<br />
<a href="listar_funcionario.php" class="universal_link">Voltar</a>
<br />
<a href="../login/logout.php" class="universal_link">Sair</a>
</center>
</body>
</html>