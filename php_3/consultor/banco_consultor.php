<?php
// Sessão
session_start();

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
function inserir_consultor($conexao, $consultor, $cpf, $rg, $tel, $email, $cep, $rua, $numero, $bairro, $cidade){
	$sql="call inserir_consultor ('$consultor','$cpf','$rg','$tel','$email','$cep','$rua','$numero','$bairro','$cidade'	)";
	return mysqli_query($conexao, $sql);
}
function buscar_consultor($conexao,$id_consultor){
	$sql="call buscar_consultor ('$id_consultor')";
    $sresultado = mysqli_query($conexao,$sql);
    return $sresultado;// comando mysql e o parametro de exclusão( id_consultor)
}
function listar_consultor($conexao){
	$lista= array();
	$sql="call listar_consultor()";
	$resultado=mysqli_query($conexao,$sql);
	while ($consultor=mysqli_fetch_assoc($resultado)){
		array_push($lista,$consultor);
	}
	return $lista;
}
?>