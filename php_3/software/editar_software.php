<?php
// Sessão
include("banco_software.php");

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
include("../conexao/conexao.php");

if(isset($_POST['btn-editar'])):
	$id = mysqli_escape_string($conexao, $_POST['id']);
	$software = mysqli_escape_string($conexao, $_POST['software']);
	$descricao = mysqli_escape_string($conexao, $_POST['descricao']);


	$sql = "call alterar_software('$id','$software','$descricao')";

	if(mysqli_query($conexao, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: listar_software.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: listar_software.php');
	endif;
endif;