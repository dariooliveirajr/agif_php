<?php
// Sessão
session_start();

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;

function inserir_tipo_servico($conexao, $tipo_servico, $descricao){
	$sql="call inserir_tipo_servico('$tipo_servico','$descricao')";
	return mysqli_query($conexao, $sql);
}
function buscar_tipo_servico($conexao,$id_tipo_servico){
	$sql="call buscar_tipo_servico ('$id_tipo_servico')";
    $sresultado = mysqli_query($conexao,$sql);
    return $sresultado;// comando mysql e o parametro de exclusão( id_tipo_servico)
}
function listar_tipo_servico($conexao){
	$lista= array();
	$sql="call listar_tipo_servico()";
	$resultado=mysqli_query($conexao,$sql);
	while ($tipo_servico=mysqli_fetch_assoc($resultado)){
		array_push($lista,$tipo_servico);
	}
	return $lista;
}
?>