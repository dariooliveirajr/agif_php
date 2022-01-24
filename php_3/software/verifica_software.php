<?php
include("../conexao/conexao.php");
include("banco_software.php");

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
$software=$_POST['software'];
$descricao=$_POST['descricao'];
if (inserir_software($conexao, $software, $descricao)){
	header( "Location: listar_software.php", true, 303);
	} else{
		echo $msg=mysqli_errno($conexao);
	}
?>