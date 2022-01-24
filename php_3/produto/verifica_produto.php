<?php
include("../conexao/conexao.php");
include("banco_produto.php");

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
$produto=$_POST['produto'];
$valor=$_POST['valor'];
$descricao=$_POST['descricao'];
if (inserir_produto($conexao, $produto, $valor, $descricao)){
	header( "Location: listar_produto.php", true, 303);
	} else{
		echo $msg=mysqli_errno($conexao);
	}
?>