<?php
include("../conexao/conexao.php");
// Sessão
include("banco_implatacao_software.php");

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
if(isset($_GET['id'])):
	$id = mysqli_escape_string($conexao, $_GET['id']);
	$sql = "call buscar_implantacao_software('$id')";
	$resultado = mysqli_query($conexao, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>
	<!DOCTYPE html>
	<html>
	<head>
	<title> Editar implatacao_software </title>
	<?php
	include ("../css/head1.php");
	?>
	</head>
	<body id="body_editar">
	<center>
		<h3> Editar Implatacao Software </h3>
		<form action="editar_implatacao_software.php" method="POST">
			<input class="input_editar" type="hidden" name="id" value="<?php echo $dados['id_implantacao_software'];?>" id="id">
			<div>
				<label for="id_adm">ID ADM</label></br>
				<input class="input_editar" type="text" name="id_adm" value="<?php echo $dados['id_adm'];?>" id="id_adm">
			</div>

			<div>
				<label for="id_funcionario">ID Funcionario</label></br>
				<input class="input_editar" type="text" name="id_funcionario" value="<?php echo $dados['id_funcionario'];?>" id="id_funcionario">
			</div>

			<div>
				<label for="id_cliente">ID Cliente</label></br>
				<input class="input_editar" type="text" value="<?php echo $dados['id_cliente'];?>" name="id_cliente" id="id_cliente">
			</div>

			<div>
				<label for="id_software">ID Software</label></br>
				<input class="input_editar" type="text" value="<?php echo $dados['id_software'];?>" name="id_software" id="id_software">
			</div>
			
			<div>
				<label for="data_venda">Data de Venda</label></br>
				<input class="input_editar" type="date" name="data_venda" value="<?php echo $dados['data_venda'];?>" id="data_venda">
			</div>

			<div>
				<label for="data_implatacao">Data de Implatação</label></br>
				<input class="input_editar" type="date" name="data_implatacao" value="<?php echo $dados['data_implatacao'];?>" id="data_implatacao">
			</div>

			<div>
				<label for="valor_implatacao">Valor de Implatação</label></br>
				<input class="input_editar" type="text" value="<?php echo $dados['valor_implatacao'];?>" name="valor_implatacao" id="valor_implatacao">
			</div>

			<div>
				<label for="observacao">Observação</label></br>
				<input class="input_editar" type="text" value="<?php echo $dados['observacao'];?>" name="observacao" id="observacao">
			</div>
			

			<button id="submit_editar"  type="submit" name="btn-editar" class="btn">Editar</button>
			
		</form>	
<br />
<a href="listar_implatacao_software.php" class="universal_link"> Lista de implatacao_softwares </a>
<br />
<a href="listar_implatacao_software.php" class="universal_link">Voltar</a>
<br />
<a href="../login/logout.php" class="universal_link">Sair</a>
	</center>
	</body>
	</html>
<?php

