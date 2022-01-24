<?php
// Sessão
include("banco_implatacao_software.php");

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
include("../conexao/conexao.php");

if(isset($_POST['btn-editar'])):
	$id = mysqli_escape_string($conexao, $_POST['id']);
	$id_adm = mysqli_escape_string($conexao, $_POST['id_adm']);
	$id_funcionario = mysqli_escape_string($conexao, $_POST['id_funcionario']);
	$id_cliente = mysqli_escape_string($conexao, $_POST['id_cliente']);
	$id_software = mysqli_escape_string($conexao, $_POST['id_software']);
	$data_venda = mysqli_escape_string($conexao, $_POST['data_venda']);
	$data_implatacao = mysqli_escape_string($conexao, $_POST['data_implatacao']);
	$valor_implatacao = mysqli_escape_string($conexao, $_POST['valor_implatacao']);
	$observacao = mysqli_escape_string($conexao, $_POST['observacao']);

	$sql = "call alterar_implantacao_software('$id','$id_adm','$id_funcionario','$id_cliente','$id_software','$data_venda','$data_implatacao','$valor_implatacao','$observacao')";

	if(mysqli_query($conexao, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: listar_implatacao_software.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: listar_implatacao_software.php');
	endif;
endif;