<?php
include("../conexao/conexao.php");
include("banco_venda.php");

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
$id_adm=$_POST['id_adm'];
$id_cliente=$_POST['id_cliente'];
$id_produto=$_POST['id_produto'];
$data_venda=$_POST['data_venda'];
$valor_produto=$_POST['valor_produto'];
$quantidade_produto=$_POST['quantidade_produto'];
$valor_total=$_POST['valor_total'];
if (inserir_venda($conexao, $id_adm, $id_cliente, $id_produto, $data_venda, $valor_produto, $quantidade_produto, $valor_total)){
	header( "Location: listar_venda.php", true, 303);
	} else{
		echo $msg=mysqli_errno($conexao);
	}
?>