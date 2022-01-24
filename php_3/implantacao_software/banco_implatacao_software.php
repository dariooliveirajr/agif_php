<?php
// Sessão
session_start();

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
function inserir_implatacao_software($conexao, $id_adm, $id_funcionario, $id_cliente, $id_software, $data_venda, $data_implatacao, $valor_implatacao, $observacao){
	$sql="call inserir_implatacao_software('$id_adm','$id_funcionario','$id_cliente','$id_software','$data_venda','$data_implatacao','$valor_implatacao','$observacao')";
	return mysqli_query($conexao, $sql);
}
function buscar_implatacao_software($conexao,$id_implatacao_software){
	$sql="call buscar_implantacao_software('$id_implatacao_software')";
    $sresultado = mysqli_query($conexao,$sql);
    return $sresultado;// comando mysql e o parametro de exclusão( id_implatacao_software)
}
function listar_implatacao_software($conexao){
	$lista= array();
	$sql="call listar_implantacao_software()";
	$resultado=mysqli_query($conexao,$sql);
	while ($implatacao_software=mysqli_fetch_assoc($resultado)){
		array_push($lista,$implatacao_software);
	}
	return $lista;
}
?>