<?php
include("../conexao/conexao.php");
include("banco_servico.php");

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
$id_adm=$_POST['id_adm'];
$id_cliente=$_POST['id_cliente'];
$id_tipo_servico=$_POST['id_tipo_servico'];
$data_implatacao=$_POST['data_implatacao'];
$data_venda=$_POST['data_venda'];
$valor=$_POST['valor'];
$forma_pagamento=$_POST['forma_pagamento'];
$cep=$_POST['cep'];
$rua=$_POST['rua'];
$numero=$_POST['numero'];
$bairro=$_POST['bairro'];
$cidade=$_POST['cidade'];
$observacao=$_POST['observacao'];
if (inserir_servico($conexao, $id_adm, $id_cliente, $id_tipo_servico, $data_implatacao, $data_venda, $valor, 
$forma_pagamento, $cep, $rua, $numero, $bairro, $cidade, $observacao)){
	header( "Location: listar_servico.php", true, 303);
	} else{
		echo $msg=mysqli_errno($conexao);
	}
?>