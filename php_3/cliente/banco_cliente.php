<?php
// Sessão
session_start();

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
function inserir_cliente($conexao, $cliente, $cpf, $rg, $tel, $email, $cep, $rua, $numero, $bairro, $cidade){
	$sql="call inserir_cliente ('$cliente','$cpf','$rg','$tel','$email','$cep','$rua','$numero','$bairro','$cidade')";
	return mysqli_query($conexao, $sql);
}
function buscar_cliente($conexao,$id_cliente){
	$sql="call buscar_cliente ('$id_cliente')";
    $sresultado = mysqli_query($conexao,$sql);
    return $sresultado;// comando mysql e o parametro de exclusão( id_cliente)
}
function listar_cliente($conexao){
	$lista= array();
	$sql="call listar_cliente()";
	$resultado=mysqli_query($conexao,$sql);
	while ($cliente=mysqli_fetch_assoc($resultado)){
		array_push($lista,$cliente);
	}
	return $lista;
}
?>