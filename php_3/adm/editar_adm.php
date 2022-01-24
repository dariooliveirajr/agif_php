<?php
// Sessão
include("banco_adm.php");

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
include("../conexao/conexao.php");

if(isset($_POST['btn-editar'])):
	$id = mysqli_escape_string($conexao, $_POST['id']);
	$adm = mysqli_escape_string($conexao, $_POST['adm']);
	$cpf = mysqli_escape_string($conexao, $_POST['cpf']);
	$rg = mysqli_escape_string($conexao, $_POST['rg']);
	$tel = mysqli_escape_string($conexao, $_POST['tel']);
	$email = mysqli_escape_string($conexao, $_POST['email']);
	$senha = mysqli_escape_string($conexao, $_POST['senha']);
	$cep = mysqli_escape_string($conexao, $_POST['cep']);
	$rua = mysqli_escape_string($conexao, $_POST['rua']);
	$numero = mysqli_escape_string($conexao, $_POST['numero']);
	$bairro = mysqli_escape_string($conexao, $_POST['bairro']);
	$cidade = mysqli_escape_string($conexao, $_POST['cidade']);

	$sql = "call alterar_adm('$id','$adm','$cpf','$rg','$tel','$email','$senha','$cep','$rua','$numero','$bairro','$cidade')";

	if(mysqli_query($conexao, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: listar_adm.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: listar_adm.php');
	endif;
endif;