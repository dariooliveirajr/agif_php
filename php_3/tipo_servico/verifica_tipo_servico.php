<?php
include("../conexao/conexao.php");
include("banco_tipo_servico.php");

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
$tipo_servico=$_POST['tipo_servico'];
$descricao=$_POST['descricao'];
if (inserir_tipo_servico($conexao, $tipo_servico, $descricao)){
	header( "Location: listar_tipo_servico.php", true, 303);
	} else{
		echo $msg=mysqli_errno($conexao);
	}
?>