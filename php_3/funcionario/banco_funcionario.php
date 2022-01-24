<?php
// Sessão
session_start();
// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
function inserir_funcionario($conexao, $funcionario, $cpf, $rg, $tel, $email, $cep, $rua, $numero, $bairro, $cidade){
	$sql="call inserir_funcionario ('$funcionario', '$cpf', '$rg', '$tel', '$email', '$cep', '$rua', '$numero', '$bairro', '$cidade')";
	return mysqli_query($conexao, $sql);
}
function buscar_funcionario($conexao,$id_funcionario){
	$sql="call buscar_funcionario ('$id_funcionario')";
    $sresultado = mysqli_query($conexao,$sql);
    return $sresultado;// comando mysql e o parametro de exclusão( id_funcionario)
}
function listar_funcionario($conexao){
	$lista= array();
	$sql="call listar_funcionario()";
	$resultado=mysqli_query($conexao,$sql);
	while ($funcionario=mysqli_fetch_assoc($resultado)){
		array_push($lista,$funcionario);
	}
	return $lista;
}
?>