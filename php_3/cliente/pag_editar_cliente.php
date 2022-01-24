<?php
include("../conexao/conexao.php");
// Sessão
include("banco_cliente.php");

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
if(isset($_GET['id'])):
	$id = mysqli_escape_string($conexao, $_GET['id']);
	$sql="call buscar_cliente ('$id')";
	$resultado = mysqli_query($conexao, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>
	<!DOCTYPE html>
	<html>
	<head>
	<title> Editar Cliente </title>
	<?php
	include ("../css/head1.php");
	?>
	</head>
	<body id="body_editar">
	<center>
		<h3> Editar Cliente </h3>
		<form action="editar_cliente.php" method="POST">
			<input class="input_editar" type="hidden" name="id" value="<?php echo $dados['id_cliente'];?>" id="id">
			<div>
				<label for="cliente">Cliente</label></br>
				<input class="input_editar" type="text" name="cliente" value="<?php echo $dados['cliente'];?>" id="cliente">
			</div>

			<div>
				<label for="cpf">CPF</label></br>
				<input class="input_editar" type="text" name="cpf" value="<?php echo $dados['cpf'];?>" id="cpf">
			</div>

			<div>
				<label for="rg">RG</label></br>
				<input class="input_editar" type="text" value="<?php echo $dados['rg'];?>" name="rg" id="rg">
			</div>

			<div>
				<label for="tel">Telefone</label></br>
				<input class="input_editar" type="text" value="<?php echo $dados['tel'];?>" name="tel" id="tel">
			</div>
			
			<div>
				<label for="email">E-mail</label></br>
				<input class="input_editar" type="text" name="email" value="<?php echo $dados['email'];?>">
			</div>

			<div>
				<label for="cep">Cep</label></br>
				<input class="input_editar" type="text" name="cep" value="<?php echo $dados['cep'];?>" id="cep">
			</div>

			<div>
				<label for="rua">Rua</label></br>
				<input class="input_editar" type="text" value="<?php echo $dados['rua'];?>" name="rua" id="rua">
			</div>

			<div>
				<label for="numero">Numero</label></br>
				<input class="input_editar" type="text" value="<?php echo $dados['numero'];?>" name="numero" id="numero">
			</div>
			
			<div>
				<label for="bairro">Bairro</label></br>
				<input class="input_editar" type="text" value="<?php echo $dados['bairro'];?>" name="bairro" id="bairro">
			</div>
			
			<div>
				<label for="cidade">Cidade</label></br>
				<input class="input_editar" type="text" value="<?php echo $dados['cidade'];?>" name="cidade" id="cidade">
			</div>

			<button id="submit_editar"  type="submit" name="btn-editar" class="btn">Editar</button>
			
		</form>	
<br />
<a href="listar_cliente.php" class="universal_link"> Lista de clientes </a>
<br />
<a href="listar_cliente.php" class="universal_link">Voltar</a>
<br />
<a href="../login/logout.php" class="universal_link">Sair</a>
	</center>
	</body>
	</html>
<?php

