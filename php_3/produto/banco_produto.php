<?php
// Sessão
session_start();

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;

function inserir_produto($conexao, $produto, $valor, $descricao){
	$sql="call inserir_produto ('$produto','$valor','$descricao')";
	return mysqli_query($conexao, $sql);
}
function buscar_produto($conexao,$id_produto){
	$sql="call buscar_produto ('$id_produto')";
    $sresultado = mysqli_query($conexao,$sql);
    return $sresultado;// comando mysql e o parametro de exclusão( id_produto)
}
function listar_produto($conexao){
	$lista= array();
	$sql="call listar_produto()";
	$resultado=mysqli_query($conexao,$sql);
	while ($produto=mysqli_fetch_assoc($resultado)){
		array_push($lista,$produto);
	}
	return $lista;
}
?>