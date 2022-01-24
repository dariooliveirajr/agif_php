<?php
// Sessão
session_start();

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;

function inserir_consultoria($conexao, $id_tipo_consultoria, $id_consultor, $id_cliente, $id_adm, $data_venda, $data_consultoria, 
$valor_consultoria, $observacao){
	$sql="call inserir_consultoria('$id_tipo_consultoria','$id_consultor','$id_cliente','$id_adm','$data_venda','$data_consultoria',
	'$valor_consultoria','$observacao')";
	return mysqli_query($conexao, $sql);
}
function buscar_consultoria($conexao,$id_cliente){
	$sql="call buscar_consultoria ('$id_cliente')";
    $sresultado = mysqli_query($conexao,$sql);
    return $sresultado;// comando mysql e o parametro de exclusão( id_cliente)
}
function listar_consultoria($conexao){
	$lista= array();
	$sql="call listar_consultoria()";
	$resultado=mysqli_query($conexao,$sql);
	while ($consultoria=mysqli_fetch_assoc($resultado)){
		array_push($lista,$consultoria);
	}
	return $lista;
}
?>