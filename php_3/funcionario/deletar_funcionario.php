<?php
// Sessão
// Sessão
include ("../conexao/conexao.php");
include("banco_funcionario.php");
// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;


if(isset($_GET['id'])):
	$id = mysqli_escape_string($conexao, $_GET['id']);

	$sql = "call excluir_funcionario('$id')";

	if(mysqli_query($conexao, $sql)):
		$_SESSION['mensagem'] = "Deletado com sucesso!";
		header('Location: listar_funcionario.php');
	else:
		$_SESSION['mensagem'] = "Erro ao deletar";
		header('Location: listar_funcionario.php');
	endif;
endif;