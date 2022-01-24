<?php
include("../conexao/conexao.php");
// Sessão
include("banco_tipo_consultoria.php");

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
if(isset($_GET['id'])):
	$id = mysqli_escape_string($conexao, $_GET['id']);
	$sql = "call buscar_tipo_consultoria ('$id')";
	$resultado = mysqli_query($conexao, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>
	<!DOCTYPE html>
	<html>
	<head>
	<title> Editar Tipo de Consultoria </title>
	<?php
	include ("../css/head1.php");
	?>
	</head>
	<body id="body_editar">
	<center>
		<h3> Editar Tipo de Consultoria </h3>
		<form action="editar_tipo_consultoria.php" method="POST">
			<input class="input_editar" type="hidden" name="id" value="<?php echo $dados['id_tipo_consultoria'];?>" id="id">

			<div>
				<label for="tipo_consultoria">Tipo de Consultoria</label></br>
				<input class="input_editar" type="text" name="tipo_consultoria" value="<?php echo $dados['tipo_consultoria'];?>" id="tipo_consultoria">
			</div>
			
			<div>
				<label for="descricao">Descrição</label></br>
				<input class="input_editar" type="text" name="descricao" value="<?php echo $dados['descricao'];?>" id="descricao">
			</div>


			<button id="submit_editar"  type="submit" name="btn-editar" class="btn">Editar</button>
			
		</form>	
<br />
<a href="listar_tipo_consultoria.php" class="universal_link"> Lista dos Tipos de Consultorias </a>
<br />
<a href="listar_tipo_consultoria.php" class="universal_link">Voltar</a>
<br />
<a href="../login/logout.php" class="universal_link">Sair</a>
	</center>
	</body>
	</html>
<?php

