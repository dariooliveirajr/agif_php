<?php
include("../conexao/conexao.php");
include("banco_consultor.php");
// Sessão

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
$consultor=$_POST['consultor'];
$cpf=$_POST['cpf'];
$rg=$_POST['rg'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$cep=$_POST['cep'];
$rua=$_POST['rua'];
$numero=$_POST['numero'];
$bairro=$_POST['bairro'];
$cidade=$_POST['cidade'];
if (inserir_consultor($conexao, $consultor, $cpf, $rg, $tel, $email, $cep, $rua, $numero, $bairro, $cidade)){
	header( "Location: listar_consultor.php", true, 303);
	} else{
		echo $msg=mysqli_errno($conexao);
	}
?>