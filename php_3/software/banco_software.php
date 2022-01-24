<?php
// Sessão
session_start();

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
function inserir_software($conexao, $software, $descricao){
	$sql="call inserir_software('$software','$descricao')";
	return mysqli_query($conexao, $sql);
}
function buscar_software($conexao,$id_software){
	$sql="call buscar_software ('$id_software')";
    $sresultado = mysqli_query($conexao,$sql);
    return $sresultado;// comando mysql e o parametro de exclusão( id_software)
}
function listar_software($conexao){
	$lista= array();
	$sql="call listar_software()";
	$resultado=mysqli_query($conexao,$sql);
	while ($software=mysqli_fetch_assoc($resultado)){
		array_push($lista,$software);
	}
	return $lista;
}
?>