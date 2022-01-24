<?php
// Sessão
session_start();

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
function inserir_tipo_consultoria($conexao, $tipo_consultoria, $descricao){
	$sql="call inserir_tipo_consultoria ('$tipo_consultoria','$descricao')";
	return mysqli_query($conexao, $sql);
}
function buscar_tipo_consultoria($conexao,$id_tipo_consultoria){
	$sql="call buscar_tipo_consultoria ('$id_tipo_consultoria')";
    $sresultado = mysqli_query($conexao,$sql);
    return $sresultado;// comando mysql e o parametro de exclusão( id_tipo_consultoria)
}
function listar_tipo_consultoria($conexao){
	$lista= array();
	$sql="call listar_tipo_consultoria()";
	$resultado=mysqli_query($conexao,$sql);
	while ($tipo_consultoria=mysqli_fetch_assoc($resultado)){
		array_push($lista,$tipo_consultoria);
	}
	return $lista;
}
?>