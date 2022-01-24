<?php
$pagina = 'venda';

include("../conexao/conexao.php");
include("banco_venda.php");
// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
?>

<!DOCTYPE html>
<html>
	<head>
		<?php include ("../css/head1.php"); ?>
		<title> Lista de Vendas </title>
	</head>
	<body id="body_listar">
	<center>
				<div id="titulo_1_table">
						Lista de Vendas
				</div>
				
					<div id="titulo_2_table">
							Listar todos as Vendas do banco de dados
					</div>

			<div id="div_busca">
						<form method="POST" id="buscar-clientes">
						<br/>
						<a href="listar_venda.php" id="voltar_listar">
							<i class="fas fa-undo-alt"></i>
							</a>
						<p class="buscar_texto">Buscar Vendas</p>
						<br/>
								<input type="text" name="id_clientes" placeholder="Coloque o ID aqui" id="input_listar">
								<a href="javascript:{}" id="btn-search"><i class="fas fa-search"></i></a>


					</form>
			</div>
		<br />		
		<table id="table_listar">	
					<?php
					if($_POST){
						if($_POST['id_clientes']=="" ){
								$lista = listar_venda($conexao);
						}
						else{
						$id_cliente =$_POST['id_clientes'];
						$lista = buscar_venda($conexao, $id_cliente);}
					}
					else{
						$lista = listar_venda($conexao);
					}
					?>
					<tr>
						<td>ID</td>
						<td>ID ADM</td>
						<td>ID Cliente</td>
						<td>ID Produto</td>
						<td>Data de Venda</td>
						<td>Valor do Produto</td>
						<td>Quantidade</td>
						<td>Valor Total</td>
					</tr>
			<?php foreach($lista as $dados) { ?>
				<tr>
						<td><?php echo $dados['id_venda'];?></td>
						<td><?php echo $dados['id_adm'];?></td>
						<td><?php echo $dados['id_cliente'];?></td>
						<td><?php echo $dados['id_produto'];?></td>
						<td><?php echo $dados['data_venda'];?></td>
						<td><?php echo $dados['valor_produto'];?></td>
						<td><?php echo $dados['quantidade_produto'];?></td>
						<td><?php echo $dados['valor_total'];?></td>
						<td><a href="pag_editar_venda.php?id=<?php echo $dados['id_venda'];?>"><i class="fas fa-pen"></i></a></td>
						<td><a href="deletar_venda.php?id=<?php echo $dados['id_venda'];?>"><i class="fas fa-trash-alt" ></i></a></td>

						</tr>
						<?php } ?>
		
		</table>
		<br/>
		<br/>
						<a href="cadastro_venda.php" class="universal_link"> Cadastrar Venda </a>
						<br />
						<br />
						<a href="../login/logout.php" class="universal_link">Sair</a>
	</center>
		<script src="../js/btn-search.js"> </script>
	</body>
</html>