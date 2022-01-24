<?php
include("../conexao/conexao.php");
// Sessão
include("banco_consultoria.php");

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
if(isset($_GET['id'])):
	$id = mysqli_escape_string($conexao, $_GET['id']);
	$sql = "call buscar_consultoria('$id')";
	$resultado = mysqli_query($conexao, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>
	<!DOCTYPE html>
	<html>
	<head>
	<title> Editar consultoria </title>
	<?php
	include ("../css/head1.php");
	?>
	</head>
	<body id="body_editar">
	<center>
		<h3> Editar consultoria </h3>
		<form action="editar_consultoria.php" method="POST">
			<input class="input_editar" type="hidden" name="id" value="<?php echo $dados['id_consultoria'];?>" id="id">
			<div>
				<label for="id_tipo_consultoria">id_tipo_consultoria</label></br>
				<input class="input_editar" type="text" name="id_tipo_consultoria" value="<?php echo $dados['id_tipo_consultoria'];?>" id="id_tipo_consultoria">
			</div>

			<div>
				<label for="id_consultor">id_consultor</label></br>
				<input class="input_editar" type="text" name="id_consultor" value="<?php echo $dados['id_consultor'];?>" id="id_consultor">
			</div>

			<div>
				<label for="id_cliente">id_cliente</label></br>
				<input class="input_editar" type="text" value="<?php echo $dados['id_cliente'];?>" name="id_cliente" id="id_cliente">
			</div>

			<div>
				<label for="id_adm">id_adm</label></br>
				<input class="input_editar" type="text" value="<?php echo $dados['id_adm'];?>" name="id_adm" id="id_adm">
			</div>
			
			<div>
				<label for="data_venda">E-mail</label></br>
				<input class="input_editar" type="text" name="data_venda" value="<?php echo $dados['data_venda'];?>">
			</div>

			<div>
				<label for="data_consultoria">Cep</label></br>
				<input class="input_editar" type="text" name="data_consultoria" value="<?php echo $dados['data_consultoria'];?>" id="data_consultoria">
			</div>

			<div>
				<label for="valor_consultoria">valor_consultoria</label></br>
				<input class="input_editar" type="text" value="<?php echo $dados['valor_consultoria'];?>" name="valor_consultoria" id="valor_consultoria">
			</div>

			<div>
				<label for="observacao">observacao</label></br>
				<input class="input_editar" type="text" value="<?php echo $dados['observacao'];?>" name="observacao" id="observacao">
			</div>

			<button id="submit_editar"  type="submit" name="btn-editar" class="btn">Editar</button>
			
		</form>	
<br />
<a href="listar_consultoria.php" class="universal_link"> Lista de consultorias </a>
<br />
<a href="listar_consultoria.php" class="universal_link">Voltar</a>
<br />
<a href="../login/logout.php" class="universal_link">Sair</a>
	</center>
	</body>
	</html>
<?php

