<?php
// Sessão
include("banco_consultoria.php");

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
<title> Cadastro de Consultoria </title>
</head>
<body id="body_cadastro">
<center>
<h1> Cadastro de Consultoria </h1>
<br />
<br />
<table>
<form method="post" action="verifica_consultoria.php">
<tr><td>id tipo consultoria:</td><td><input class="input_cadastro" type="text" name="id_tipo_consultoria"></td></tr><br/>
<tr><td>id consultor:</td><td><input class="input_cadastro" type="text" name="id_consultor"></td></tr><br/>
<tr><td>id cliente:</td><td><input class="input_cadastro" type="text" name="id_cliente"></td></tr>
<tr><td>id adm:</td><td><input class="input_cadastro" type="text" name="id_adm"></td></tr>
<tr><td>data_venda:</td><td><input class="input_cadastro" type="date" name="data_venda"></td></tr>
<tr><td>data_consultoria:</td><td><input class="input_cadastro" type="date" name="data_consultoria"></td></tr>
<tr><td>valor_consultoria:</td><td><input class="input_cadastro" type="text" name="valor_consultoria"></td></tr>
<tr><td>cobservacao:</td><td><input class="input_cadastro" type="text" name="observacao"></td></tr>
</table>
	<input id="submit_cadastro" type="submit" value="enviar" name="button"><br/>
</form>
<br />
<br />
<a href="listar_consultoria.php" class="universal_link">Voltar</a>
<br />
<a href="../login/logout.php" class="universal_link">Sair</a>
</center>
</body>
</html>