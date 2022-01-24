<?php
include("../conexao/conexao.php");
// Sessão
include("banco_servico.php");

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
if(isset($_GET['id'])):
	$id = mysqli_escape_string($conexao, $_GET['id']);
	$sql = "call buscar_servico ('$id')";
	$resultado = mysqli_query($conexao, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>
	<!DOCTYPE html>
	<html>
	<head>
	<title> Editar Servico </title>
	<?php
	include ("../css/head1.php");
	?>
	</head>
	<body id="body_editar">
	<center>
		<h3> Editar Servico </h3>
		<form action="editar_servico.php" method="POST">
			<input class="input_editar" type="hidden" name="id" value="<?php echo $dados['id_servico'];?>" id="id">
			<div>
				<label for="id_adm">id_adm</label></br>
				<input class="input_editar" type="text" name="id_adm" value="<?php echo $dados['id_adm'];?>" id="id_adm">
			</div>

			<div>
				<label for="id_cliente">id_cliente</label></br>
				<input class="input_editar" type="text" name="id_cliente" value="<?php echo $dados['id_cliente'];?>" id="id_cliente">
			</div>

			<div>
				<label for="id_tipo_servico">id_tipo_servico</label></br>
				<input class="input_editar" type="text" value="<?php echo $dados['id_tipo_servico'];?>" name="id_tipo_servico" id="id_tipo_servico">
			</div>

			<div>
				<label for="data_implatacao">data_implatacao</label></br>
				<input class="input_editar" type="text" value="<?php echo $dados['data_implatacao'];?>" name="data_implatacao" id="data_implatacao">
			</div>
			
			<div>
				<label for="data_venda">data_venda</label></br>
				<input class="input_editar" type="text" name="data_venda" value="<?php echo $dados['data_venda'];?>">
			</div>

			<div>
				<label for="valor">valor</label></br>
				<input class="input_editar" type="text" name="valor" value="<?php echo $dados['valor'];?>" id="valor">
			</div>

			<div>
				<label for="forma_pagamento">forma_pagamento</label></br>
				<input class="input_editar" type="text" value="<?php echo $dados['forma_pagamento'];?>" name="forma_pagamento" id="forma_pagamento">
			</div>

			<div>
				<label for="cep">cep</label></br>
				<input class="input_editar" type="text" value="<?php echo $dados['cep'];?>" name="cep" id="cep">
			</div>
			
			<div>
				<label for="rua">Bairro</label></br>
				<input class="input_editar" type="text" value="<?php echo $dados['rua'];?>" name="rua" id="rua">
			</div>
			
			<div>
				<label for="numero">numero</label></br>
				<input class="input_editar" type="text" value="<?php echo $dados['numero'];?>" name="numero" id="numero">
			</div>
			
			<div>
				<label for="bairro">bairro</label></br>
				<input class="input_editar" type="text" value="<?php echo $dados['bairro'];?>" name="bairro" id="bairro">
			</div>
			
			<div>
				<label for="cidade">Cidade</label></br>
				<input class="input_editar" type="text" value="<?php echo $dados['cidade'];?>" name="cidade" id="cidade">
			</div>
			
			<div>
				<label for="observacao">Observação</label></br>
				<input class="input_editar" type="text" value="<?php echo $dados['observacao'];?>" name="observacao" id="observacao">
			</div>

			<button id="submit_editar"  type="submit" name="btn-editar" class="btn">Editar</button>
			
		</form>	
<br />
<a href="listar_servico.php" class="universal_link"> Lista de Serviços </a>
<br />
<a href="listar_servico.php" class="universal_link">Voltar</a>
<br />
<a href="../login/logout.php" class="universal_link">Sair</a>
	</center>
	</body>
	</html>
<?php

