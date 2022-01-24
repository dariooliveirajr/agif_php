<?php
include("../conexao/conexao.php");
include("banco_implatacao_software.php");

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
$id_adm=$_POST['id_adm'];
$id_funcionario=$_POST['id_funcionario'];
$id_cliente=$_POST['id_cliente'];
$id_software=$_POST['id_software'];
$data_venda=$_POST['data_venda'];
$data_implatacao=$_POST['data_implatacao'];
$valor_implatacao=$_POST['valor_implatacao'];
$observacao=$_POST['observacao'];
if (inserir_implatacao_software($conexao, $id_adm, $id_funcionario, $id_cliente, $id_software, $data_venda, $data_implatacao, $valor_implatacao, $observacao)){
	header( "Location: listar_implatacao_software.php", true, 303);
	} else{
		echo $msg=mysqli_errno($conexao);
	}
?>