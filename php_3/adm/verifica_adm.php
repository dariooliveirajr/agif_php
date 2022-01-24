<?php
include("banco_adm.php");

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
include("../conexao/conexao.php");
$adm=$_POST['adm'];
$cpf=$_POST['cpf'];
$rg=$_POST['rg'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$senha=md5($_POST['senha']);
$cep=$_POST['cep'];
$rua=$_POST['rua'];
$numero=$_POST['numero'];
$bairro=$_POST['bairro'];
$cidade=$_POST['cidade'];
if (inserir_adm($conexao, $adm, $cpf, $rg, $tel, $email, $senha, $cep, $rua, $numero, $bairro, $cidade)){
	header('Location: listar_adm.php');
	} else{
		echo $msg=mysqli_errno($conexao);
	}
?>