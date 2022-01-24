<?php
// Sessão
include("banco_venda.php");

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
<title> Cadastro de Venda </title>
</head>
<body id="body_cadastro">
<center>
<h1> Cadastro de Venda </h1>
<br />
<br />
<table>
<form method="post" action="verifica_venda.php">
<tr><td>ID ADM:</td><td><input class="input_cadastro" type="text" name="id_adm"></td></tr><br/>
<tr><td>ID Cliente:</td><td><input class="input_cadastro" type="text" name="id_cliente"></td></tr><br/>
<tr><td>ID Produto:</td><td><input class="input_cadastro" type="text" name="id_produto"></td></tr><br/>
<tr><td>Data de Venda:</td><td><input class="input_cadastro" type="date" name="data_venda"></td></tr><br/>
<tr><td>Valor do Produto:</td><td><input class="input_cadastro" type="text" name="valor_produto"></td></tr><br/>
<tr><td>Quantidade do Produto:</td><td><input class="input_cadastro" type="text" name="quantidade_produto"></td></tr><br/>
<tr><td>Valor Total:</td><td><input class="input_cadastro" type="text" name="valor_total"></td></tr><br/>
</table>
	<input id="submit_cadastro" type="submit" value="enviar" name="button"><br/>
</form>
<br />
<br />
<a href="listar_cliente.php" class="universal_link">Voltar</a>
<br />
<a href="../login/logout.php" class="universal_link">Sair</a>
</center>
</body>
</html>

