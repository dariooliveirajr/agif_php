<?php
// Sessão
include("banco_produto.php");

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
include("../conexao/conexao.php");

if(isset($_POST['btn-editar'])):
	$id = mysqli_escape_string($conexao, $_POST['id']);
	$produto = mysqli_escape_string($conexao, $_POST['produto']);
	$valor = mysqli_escape_string($conexao, $_POST['valor']);
	$descricao = mysqli_escape_string($conexao, $_POST['descricao']);


	$sql = "call alterar_produto('$id','$produto','$valor','$descricao')";

	if(mysqli_query($conexao, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: listar_produto.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: listar_produto.php');
	endif;
endif;