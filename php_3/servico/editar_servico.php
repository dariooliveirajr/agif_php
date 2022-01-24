<?php
// Sessão
include("banco_servico.php");

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
include("../conexao/conexao.php");

if(isset($_POST['btn-editar'])):
	$id = mysqli_escape_string($conexao, $_POST['id']);
	$id_adm = mysqli_escape_string($conexao, $_POST['id_adm']);
	$id_cliente = mysqli_escape_string($conexao, $_POST['id_cliente']);
	$id_tipo_servico = mysqli_escape_string($conexao, $_POST['id_tipo_servico']);
	$data_implatacao = mysqli_escape_string($conexao, $_POST['data_implatacao']);
	$data_venda = mysqli_escape_string($conexao, $_POST['data_venda']);
	$valor = mysqli_escape_string($conexao, $_POST['valor']);
	$forma_pagamento = mysqli_escape_string($conexao, $_POST['forma_pagamento']);
	$cep = mysqli_escape_string($conexao, $_POST['cep']);
	$rua = mysqli_escape_string($conexao, $_POST['rua']);
	$numero = mysqli_escape_string($conexao, $_POST['numero']);
	$bairro = mysqli_escape_string($conexao, $_POST['bairro']);
	$cidade = mysqli_escape_string($conexao, $_POST['cidade']);
	$observacao = mysqli_escape_string($conexao, $_POST['observacao']);

	$sql = "call alterar_servico('$id','$id_adm','$id_cliente','$id_tipo_servico','$data_implatacao','$data_venda','$valor','$forma_pagamento','$cep','$rua','$numero','$bairro','$cidade','$observacao')";

	if(mysqli_query($conexao, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: listar_servico.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: listar_servico.php');
	endif;
endif;