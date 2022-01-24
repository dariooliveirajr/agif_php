<?php
include("../conexao/conexao.php");
// Sessão
include("banco_tipo_servico.php");

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
if(isset($_GET['id'])):
	$id = mysqli_escape_string($conexao, $_GET['id']);
	$sql = "call buscar_tipo_servico ('$id')";
	$resultado = mysqli_query($conexao, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>
	<!DOCTYPE html>
	<html>
	<head>
	<title> Editar Tipo de Serviço </title>
	<?php
	include ("../css/head1.php");
	?>
	</head>
	<body id="body_editar">
	<center>
		<h3> Editar Tipo de Serviço </h3>
		<form action="editar_tipo_servico.php" method="POST">
			<input class="input_editar" type="hidden" name="id" value="<?php echo $dados['id_tipo_servico'];?>" id="id">

			<div>
				<label for="tipo_servico">Tipo de Serviço</label></br>
				<input class="input_editar" type="text" name="tipo_servico" value="<?php echo $dados['tipo_servico'];?>" id="tipo_servico">
			</div>
			
			<div>
				<label for="descricao">Descrição</label></br>
				<input class="input_editar" type="text" name="descricao" value="<?php echo $dados['descricao'];?>" id="descricao">
			</div>


			<button id="submit_editar"  type="submit" name="btn-editar" class="btn">Editar</button>
			
		</form>	
<br />
<a href="listar_tipo_servico.php" class="universal_link"> Lista dos Tipos de Serviços </a>
<br />
<a href="listar_tipo_servico.php" class="universal_link">Voltar</a>
<br />
<a href="../login/logout.php" class="universal_link">Sair</a>
	</center>
	</body>
	</html>
<?php

