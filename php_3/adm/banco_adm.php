<?php
session_start();
include("../conexao/conexao.php");
// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
function inserir_adm($conexao, $adm, $cpf, $rg, $tel, $email, $senha,  $cep, $rua, $numero, $bairro, $cidade){
	$sql="call inserir_adm('$adm','$cpf','$rg','$tel','$email','$senha','$cep','$rua','$numero','$bairro','$cidade')";
	return mysqli_query($conexao, $sql);
}

function buscar_adm($conexao,$id_adm){
	$sql="call buscar_adm ('$id_adm')";
    $sresultado = mysqli_query($conexao,$sql);
    return $sresultado;// comando mysql e o parametro de exclusão( id_adm)
}
function listar_adm($conexao){
	$lista= array();
	$sql="call listar_adm()";
	$resultado=mysqli_query($conexao,$sql);
	while ($adm=mysqli_fetch_assoc($resultado)){
		array_push($lista,$adm);
	}
	return $lista;
}
?>