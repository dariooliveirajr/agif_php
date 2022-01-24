<?php
include("../conexao/conexao.php");
include("banco_consultoria.php");

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
$id_tipo_consultoria=$_POST['id_tipo_consultoria'];
$id_consultor=$_POST['id_consultor'];
$id_cliente=$_POST['id_cliente'];
$id_adm=$_POST['id_adm'];
$data_venda=$_POST['data_venda'];
$data_consultoria=$_POST['data_consultoria'];
$valor_consultoria=$_POST['valor_consultoria'];
$observacao=$_POST['observacao'];
if (inserir_consultoria($conexao, $id_tipo_consultoria, $id_consultor, $id_cliente, $id_adm, $data_venda, $data_consultoria, 
$valor_consultoria, $observacao)){
	header( "Location: listar_consultoria.php", true, 303);
	} else{
		echo $msg=mysqli_errno($conexao);
	}
?>