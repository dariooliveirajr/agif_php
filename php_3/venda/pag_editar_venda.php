<?php
include("../conexao/conexao.php");
// Sessão
include("banco_venda.php");

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
if(isset($_GET['id'])):
	$id = mysqli_escape_string($conexao, $_GET['id']);
	$sql = "call buscar_venda ('$id')";
	$resultado = mysqli_query($conexao, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>
	<!DOCTYPE html>
	<html>
	<head>
	<title> Editar Venda </title>
	<?php
	include ("../css/head1.php");
	?>
	</head>
	<body id="body_editar">
	<center>
		<h3> Editar Venda </h3>
		<form action="editar_venda.php" method="POST">
			<input class="input_editar" type="hidden" name="id" value="<?php echo $dados['id_venda'];?>" id="id">
			<div>
				<label for="id_adm">ID ADM</label></br>
				<input class="input_editar" type="text" name="id_adm" value="<?php echo $dados['id_adm'];?>" id="id_adm">
			</div>

			<div>
				<label for="id_cliente">ID Cliente</label></br>
				<input class="input_editar" type="text" name="id_cliente" value="<?php echo $dados['id_cliente'];?>" id="id_cliente">
			</div>

			<div>
				<label for="id_produto">ID Produto</label></br>
				<input class="input_editar" type="text" value="<?php echo $dados['id_produto'];?>" name="id_produto" id="id_produto">
			</div>

			<div>
				<label for="data_venda">Data de Venda</label></br>
				<input class="input_editar" type="date" value="<?php echo $dados['data_venda'];?>" name="data_venda" id="data_venda">
			</div>
			
			<div>
				<label for="valor_produto">Valor do Produto</label></br>
				<input class="input_editar" type="text" name="valor_produto" value="<?php echo $dados['valor_produto'];?>" id="valor_produto">
			</div>

			<div>
				<label for="quantidade_produto">Quantidade</label></br>
				<input class="input_editar" type="text" name="quantidade_produto" value="<?php echo $dados['quantidade_produto'];?>" id="quantidade_produto">
			</div>

			<div>
				<label for="valor_total">Valor Total</label></br>
				<input class="input_editar" type="text" value="<?php echo $dados['valor_total'];?>" name="valor_total" id="valor_total">
			</div>

			<button id="submit_editar"  type="submit" name="btn-editar" class="btn">Editar</button>
			
		</form>	
<br />
<a href="listar_venda.php" class="universal_link"> Lista de  Vendas </a>
<br />
<a href="listar_venda.php" class="universal_link">Voltar</a>
<br />
<a href="../login/logout.php" class="universal_link">Sair</a>
	</center>
	</body>
	</html>
<?php

