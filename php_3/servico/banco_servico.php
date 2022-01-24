<?php
// Sessão
session_start();

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;

function inserir_servico($conexao, $id_adm, $id_cliente, $id_tipo_servico, $data_implatacao, $data_venda, $valor, 
$forma_pagamento, $cep, $rua, $numero, $bairro, $cidade, $observacao){
	$sql="call inserir_servico ('$id_adm','$id_cliente','$id_tipo_servico','$data_implatacao','$data_venda','$valor',
	'$forma_pagamento','$cep','$rua','$numero','$bairro','$cidade','$observacao')";
	return mysqli_query($conexao, $sql);
}
function buscar_servico($conexao,$id_servico){
	$sql="call buscar_servico ('$id_servico')";
    $sresultado = mysqli_query($conexao,$sql);
    return $sresultado;
}
function listar_servico($conexao){
	$lista= array();
	$sql="call listar_servico()";
	$resultado=mysqli_query($conexao,$sql);
	while ($servico=mysqli_fetch_assoc($resultado)){
		array_push($lista,$servico);
	}
	return $lista;
}
?>