<?php
// Sessão
include("banco_consultoria.php");

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
include("../conexao/conexao.php");

if(isset($_POST['btn-editar'])):
	$id = mysqli_escape_string($conexao, $_POST['id']);
	$id_tipo_consultoria = mysqli_escape_string($conexao, $_POST['id_tipo_consultoria']);
	$id_consultor = mysqli_escape_string($conexao, $_POST['id_consultor']);
	$id_cliente = mysqli_escape_string($conexao, $_POST['id_cliente']);
	$id_adm = mysqli_escape_string($conexao, $_POST['id_adm']);
	$data_venda = mysqli_escape_string($conexao, $_POST['data_venda']);
	$data_consultoria = mysqli_escape_string($conexao, $_POST['data_consultoria']);
	$valor_consultoria = mysqli_escape_string($conexao, $_POST['valor_consultoria']);
	$observacao = mysqli_escape_string($conexao, $_POST['observacao']);

	$sql = "call alterar_consultoria('$id','$id_tipo_consultoria','$id_consultor','$id_cliente','$id_adm','$data_venda','$data_consultoria','$valor_consultoria','$observacao')";

	if(mysqli_query($conexao, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: listar_consultoria.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: listar_consultoria.php');
	endif;
endif;