<?php
// Sessão
include("banco_venda.php");

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
include("../conexao/conexao.php");

if(isset($_POST['btn-editar'])):
	$id = mysqli_escape_string($conexao, $_POST['id']);
	$id_adm = mysqli_escape_string($conexao, $_POST['id_adm']);
	$id_cliente = mysqli_escape_string($conexao, $_POST['id_cliente']);
	$id_produto = mysqli_escape_string($conexao, $_POST['id_produto']);
	$data_venda = mysqli_escape_string($conexao, $_POST['data_venda']);
	$valor_produto = mysqli_escape_string($conexao, $_POST['valor_produto']);
	$quantidade_produto = mysqli_escape_string($conexao, $_POST['quantidade_produto']);
	$valor_total = mysqli_escape_string($conexao, $_POST['valor_total']);
	
	$sql = "call alterar_venda('$id','$id_adm','$id_cliente','$id_produto','$data_venda','$valor_produto','$quantidade_produto','$valor_total')";

	if(mysqli_query($conexao, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: listar_venda.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: listar_venda.php');
	endif;
endif;