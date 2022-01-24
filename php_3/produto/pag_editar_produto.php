<?php
include("../conexao/conexao.php");
// Sessão
include("banco_produto.php");

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
if(isset($_GET['id'])):
	$id = mysqli_escape_string($conexao, $_GET['id']);
	$sql = "call buscar_produto ('$id')";
	$resultado = mysqli_query($conexao, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>
	<!DOCTYPE html>
	<html>
	<head>
	<title> Editar Produto </title>
	<?php
	include ("../css/head1.php");
	?>
	</head>
	<body id="body_editar">
	<center>
		<h3> Editar Produto </h3>
		<form action="editar_produto.php" method="POST">
			<input class="input_editar" type="hidden" name="id" value="<?php echo $dados['id_produto'];?>" id="id">

			<div>
				<label for="produto">Produto</label></br>
				<input class="input_editar" type="text" name="produto" value="<?php echo $dados['produto'];?>" id="produto">
			</div>
			
			<div>
				<label for="valor">Valor</label></br>
				<input class="input_editar" type="text" name="valor" value="<?php echo $dados['valor'];?>" id="valor">
			</div>
			
			
			<div>
				<label for="descricao">Descrição</label></br>
				<input class="input_editar" type="text" name="descricao" value="<?php echo $dados['descricao'];?>" id="descricao">
			</div>


			<button id="submit_editar"  type="submit" name="btn-editar" class="btn">Editar</button>
			
		</form>	
<br />
<a href="listar_produto.php" class="universal_link"> Lista dos produtos </a>
<br />
<a href="listar_produto.php" class="universal_link">Voltar</a>
<br />
<a href="../login/logout.php" class="universal_link">Sair</a>
	</center>
	</body>
	</html>
<?php

