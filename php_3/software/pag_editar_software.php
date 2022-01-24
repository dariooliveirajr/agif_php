<?php
include("../conexao/conexao.php");
// Sessão
include("banco_software.php");

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
if(isset($_GET['id'])):
	$id = mysqli_escape_string($conexao, $_GET['id']);
	$sql = "call buscar_software ('$id')";
	$resultado = mysqli_query($conexao, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>
	<!DOCTYPE html>
	<html>
	<head>
	<title> Editar Software </title>
	<?php
	include ("../css/head1.php");
	?>
	</head>
	<body id="body_editar">
	<center>
		<h3> Editar Software </h3>
		<form action="editar_software.php" method="POST">
			<input class="input_editar" type="hidden" name="id" value="<?php echo $dados['id_software'];?>" id="id">
			
			<div>
				<label for="software">Software</label></br>
				<input class="input_editar" type="text" name="software" value="<?php echo $dados['software'];?>" id="software">
			</div>
			
			
			<div>
				<label for="descricao">Descrição</label></br>
				<input class="input_editar" type="text" name="descricao" value="<?php echo $dados['descricao'];?>" id="descricao">
			</div>


			<button id="submit_editar"  type="submit" name="btn-editar" class="btn">Editar</button>
			
		</form>	
<br />
<a href="listar_software.php" class="universal_link"> Lista dos Softwares </a>
<br />
<a href="listar_software.php" class="universal_link">Voltar</a>
<br />
<a href="../login/logout.php" class="universal_link">Sair</a>
	</center>
	</body>
	</html>
<?php

