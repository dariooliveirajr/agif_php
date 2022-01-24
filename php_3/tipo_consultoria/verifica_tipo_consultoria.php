<?php
include("../conexao/conexao.php");
include("banco_tipo_consultoria.php");

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
$tipo_consultoria=$_POST['tipo_consultoria'];
$descricao=$_POST['descricao'];
if (inserir_tipo_consultoria($conexao, $tipo_consultoria, $descricao)){
	header( "Location: listar_tipo_consultoria.php", true, 303);
	} else{
		echo $msg=mysqli_errno($conexao);
	}
?>