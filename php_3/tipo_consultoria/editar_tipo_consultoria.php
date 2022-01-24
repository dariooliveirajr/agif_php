<?php
// Sessão
include("banco_tipo_consultoria.php");

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
include("../conexao/conexao.php");

if(isset($_POST['btn-editar'])):
	$id = mysqli_escape_string($conexao, $_POST['id']);
	$tipo_consultoria = mysqli_escape_string($conexao, $_POST['tipo_consultoria']);
	$descricao = mysqli_escape_string($conexao, $_POST['descricao']);


	$sql = "call alterar_tipo_consultoria('$id','$tipo_consultoria','$descricao')";

	if(mysqli_query($conexao, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: listar_tipo_consultoria.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: listar_tipo_consultoria.php');
	endif;
endif;