<?php

// Conexão
include("./conexao/conexao.php");
// Sessão
session_start();

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ./login/index_adm.php');
endif;

// Dados
$id = $_SESSION['id_adm'];
$sql = "SELECT * FROM adm WHERE id_adm = '$id'";
$resultado = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($conexao);

?>

<html id="home_php">
<head>
	<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:700,900|Roboto:400,700,900" rel="stylesheet">
<link rel="icon" href="img/caveira.png">
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">

<link rel="stylesheet" type="text/css" href="css/style.css">

	<title>Página restrita</title>
	<meta charset="utf-8">
</head>
<body>
<a href="./login/logout.php">Sair</a>
<h1> Olá <?php echo $dados['adm']; ?> </h1>
<h2> Tabelas: </h2><br/>
<center>
<table id="botao_tabela">
	<tr>
		<td>
			<a href="./cliente/listar_cliente.php"><div> Clientes </div></a>
		</td>
		<td>
			<a href="./adm/listar_adm.php"><div> Administradores </div></a>
		</td>
		<td>
			<a href="./funcionario/listar_funcionario.php"><div> Funcionarios </div></a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="./consultor/listar_consultor.php"><div> Consultores </div></a>
		</td>
		<td>
			<a href="./produto/listar_produto.php"><div> Produtos </div></a>
		</td>
		<td>
			<a href="./implantacao_software/listar_implatacao_software.php"><div> Implatação de Software </div></a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="./software/listar_software.php"><div> Softwares </div></a>
		</td>
		<td>
			<a href="./tipo_servico/listar_tipo_servico.php"><div> Tipos de Serviço </div></a>
		</td>
		<td>
			<a href="./servico/listar_servico.php"><div> Serviços </div></a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="./tipo_consultoria/listar_tipo_consultoria.php"><div> Tipos de Consultoria </div></a>
		</td>
		<td>
			<a href="./consultoria/listar_consultoria.php"><div> Consultorias  </div></a>
		</td>
		<td>
			<a href="./venda/listar_venda.php"><div> Vendas </div></a>
		</td>
	</tr>
<table>
</center>
</body>
</html>