<?php
// Sessão
include("banco_produto.php");

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
<title> Cadastro Produto </title>
</head>
<body id="body_cadastro">
<center>
<h1> Cadastro Produto </h1>
<br />
<br />
<table>
<form method="post" action="verifica_produto.php">
	<tr><td>Produto:</td><td><input class="input_cadastro" type="text" name="produto"></td></tr>
	<tr><td>Valor:</td><td><input class="input_cadastro" type="text" name="valor"></td></tr>
	<tr><td>Descrição:</td><td><input class="input_cadastro" type="text" name="descricao"></td></tr>
</table>
	<input id="submit_cadastro" type="submit" value="enviar" name="button"><br/>
</form>
<br />
<br />
<a href="listar_produto.php" class="universal_link">Voltar</a>
<br />
<a href="../login/logout.php" class="universal_link">Sair</a>
</center>
</body>
</html>