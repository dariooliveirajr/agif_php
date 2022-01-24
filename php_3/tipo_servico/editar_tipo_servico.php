<?php
// Sessão
include("banco_tipo_servico.php");

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
include("../conexao/conexao.php");

if(isset($_POST['btn-editar'])):
	$id = mysqli_escape_string($conexao, $_POST['id']);
	$tipo_servico = mysqli_escape_string($conexao, $_POST['tipo_servico']);
	$descricao = mysqli_escape_string($conexao, $_POST['descricao']);


	$sql = "call alterar_tipo_servico('$id','$tipo_servico','$descricao')";

	if(mysqli_query($conexao, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: listar_tipo_servico.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: listar_tipo_servico.php');
	endif;
endif;