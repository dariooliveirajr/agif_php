<?php
// Sessão
include("banco_implatacao_software.php");

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
<title> Cadastro de Implantação Software </title>
</head>
<body id="body_cadastro">
<center>
<h1> Cadastro de Implantação Software </h1>
<br />
<br />
<table>
<form method="post" action="verifica_implatacao_software.php">
<tr><td>ID ADM:</td><td><input class="input_cadastro" type="text" name="id_adm"></td></tr>
<tr><td>ID Funcionario:</td><td><input class="input_cadastro" type="text" name="id_funcionario"></td></tr>
<tr><td>ID Cliente:</td><td><input class="input_cadastro" type="text" name="id_cliente"></td></tr>
<tr><td>ID Software:</td><td><input class="input_cadastro" type="text" name="id_software"></td></tr>
<tr><td>Data de Venda:</td><td><input class="input_cadastro" type="date" name="data_venda"></td></tr>
<tr><td>Data de Implantação:</td><td><input class="input_cadastro" type="date" name="data_implatacao"></td></tr>
<tr><td>Valor de Implantação:</td><td><input class="input_cadastro" type="text" name="valor_implatacao"></td></tr>
<tr><td>Observação:</td><td><input class="input_cadastro" type="text" name="observacao"></td></tr>
</table>
	<input id="submit_cadastro" type="submit" value="enviar" name="button"><br/>
</form>
<br />
<br />
<a href="listar_adm.php" class="universal_link">Voltar</a>
<br />
<a href="../login/logout.php" class="universal_link">Sair</a>
</center>
</body>
</html>


