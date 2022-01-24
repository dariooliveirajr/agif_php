<?php
// Sessão
include("banco_servico.php");

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
<title> Cadastro de serviço </title>
</head>
<body id="body_cadastro">
<center>
<h1> Cadastro de serviço </h1>
<br />
<br />
<table>
<form method="post" action="verifica_servico.php">
<tr><td>id_adm:</td><td><input class="input_cadastro" type="text" name="id_adm"></td></tr><br/>
<tr><td>id_cliente:</td><td><input class="input_cadastro" type="text" name="id_cliente"></td></tr><br/>
<tr><td>id_tipo_servico:</td><td><input class="input_cadastro" type="text" name="id_tipo_servico"></td></tr><br/>
<tr><td>data_implatacao:</td><td><input class="input_cadastro" type="date" name="data_implatacao"></td></tr>
<tr><td>data_venda:</td><td><input class="input_cadastro" type="date" name="data_venda"></td></tr>
<tr><td>valor:</td><td><input class="input_cadastro" type="text" name="valor"></td></tr>
<tr><td>forma_pagamento:</td><td><input class="input_cadastro" type="text" name="forma_pagamento"></td></tr>
<tr><td>cep:</td><td><input class="input_cadastro"type="text" name="cep"></td></tr>
<tr><td>rua:</td><td><input class="input_cadastro" type="text" name="rua"></td></tr>
<tr><td>numero:</td><td><input class="input_cadastro" type="text" name="numero"></td></tr>
<tr><td>bairro:</td><td><input class="input_cadastro" type="text" name="bairro"></td></tr>
<tr><td>cidade:</td><td><input class="input_cadastro" type="text" name="cidade"></td></tr>
<tr><td>observacao:</td><td><input class="input_cadastro" type="text" name="observacao"></td></tr>
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



