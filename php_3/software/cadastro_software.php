<?php
// Sessão
session_start();

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
<title> Cadastro Software </title>
</head>
<body id="body_cadastro">
<center>
<h1> Cadastro Software </h1>
<br />
<br />
<table>
<form method="post" action="verifica_software.php">
	<tr><td>Tipo Software:</td><td><input class="input_cadastro" type="text" name="tipo_software"></td></tr>
	<tr><td>Software:</td><td><input class="input_cadastro" type="text" name="software"></td></tr>
	<tr><td>Descrição:</td><td><input class="input_cadastro" type="text" name="descricao"></td></tr>
</table>
	<input id="submit_cadastro" type="submit" value="enviar" name="button"><br/>
</form>
<br />
<br />
<a href="listar_software.php" class="universal_link">Voltar</a>
<br />
<a href="../login/logout.php" class="universal_link">Sair</a>
</center>
</body>
</html>