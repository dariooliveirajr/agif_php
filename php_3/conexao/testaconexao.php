<?php
include("conexao.php");
if (!$conexao){
	echo "Nao foi possivel conectar ao banco de daods. Por favor tente novamente mais tarde";
exit;}
	else{
		echo "Conexao efetuada com sucesso";
	}
?>