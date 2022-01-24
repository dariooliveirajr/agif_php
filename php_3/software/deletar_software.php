<?php
// Sessão
// Sessão
include ("../conexao/conexao.php");
include("banco_software.php");

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;


if(isset($_GET['id'])):
	$id = mysqli_escape_string($conexao, $_GET['id']);

	$sql = "call excluir_software('$id')";

	if(mysqli_query($conexao, $sql)):
		$_SESSION['mensagem'] = "Deletado com sucesso!";
		header('Location: listar_software.php');
	else:
		$_SESSION['mensagem'] = "Erro ao deletar";
		header('Location: listar_software.php');
	endif;
endif;