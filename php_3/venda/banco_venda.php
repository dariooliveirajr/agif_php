<?php
// Sessão
session_start();

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;

function inserir_venda($conexao, $id_adm, $id_cliente, $id_produto, $data_venda, $valor_produto, $quantidade_produto, $valor_total){
	$sql="call inserir_venda('$id_adm','$id_cliente','$id_produto','$data_venda','$valor_produto','$quantidade_produto','$valor_total')";
	return mysqli_query($conexao, $sql);
}

function buscar_venda($conexao,$id_venda){
	$sql="call buscar_venda ('$id_venda')";
    $sresultado = mysqli_query($conexao,$sql);
    return $sresultado;// comando mysql e o parametro de exclusão( id_venda)
}
function listar_venda($conexao){
	$lista= array();
	$sql="call listar_venda()";
	$resultado=mysqli_query($conexao,$sql);
	while ($venda=mysqli_fetch_assoc($resultado)){
		array_push($lista,$venda);
	}
	return $lista;
}
?>