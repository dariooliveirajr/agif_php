<?php
$pagina = 'servico';

include("../conexao/conexao.php");
include("banco_servico.php");
// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
?>

<!DOCTYPE html>
<html>
	<head>
		<?php include ("../css/head1.php"); ?>
		<title> Lista de Serviços </title>
	</head>
	<body id="body_listar">
	<center>
				<div id="titulo_1_table">
						Lista de Serviços
				</div>
				
					<div id="titulo_2_table">
							Listar todos os Serviços do banco de dados
					</div>

			<div id="div_busca">
						<form method="POST" id="buscar-clientes">
						<br/>
						<a href="listar_servico.php" id="voltar_listar">
							<i class="fas fa-undo-alt"></i>
							</a>
						<p class="buscar_texto">Buscar Serviço</p>
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
								$lista = listar_servico($conexao);
						}
						else{
						$id_cliente =$_POST['id_clientes'];
						$lista = buscar_servico($conexao, $id_cliente);}
					}
					else{
						$lista = listar_servico($conexao);
					}
					?>
					<tr>
						<td>ID</td>
						<td>ID Adm</td>
						<td>ID Cliente</td>
						<td>ID Tipo de Serviço</td>
						<td>Data de Implatação</td>
						<td>Data de Venda</td>
						<td>Valor</td>
						<td>Forma de Pagamento</td>
						<td>CEP</td>
						<td>Rua</td>
						<td>Numero</td>
						<td>Bairro</td>
						<td>Cidade</td>
						<td>Observação</td>

					</tr>
			<?php foreach($lista as $dados) { ?>
				<tr>
						<td><?php echo $dados['id_servico'];?></td>
						<td><?php echo $dados['id_adm'];?></td>
						<td><?php echo $dados['id_cliente'];?></td>
						<td><?php echo $dados['id_tipo_servico'];?></td>
						<td><?php echo $dados['data_implatacao'];?></td>
						<td><?php echo $dados['data_venda'];?></td>
						<td><?php echo $dados['valor'];?></td>
						<td><?php echo $dados['forma_pagamento'];?></td>
						<td><?php echo $dados['cep'];?></td>
						<td><?php echo $dados['rua'];?></td>
						<td><?php echo $dados['numero'];?></td>
						<td><?php echo $dados['bairro'];?></td>
						<td><?php echo $dados['cidade'];?></td>
						<td><?php echo $dados['observacao'];?></td>
						<td><a href="pag_editar_servico.php?id=<?php echo $dados['id_servico'];?>"><i class="fas fa-pen"></i></a></td>
						<td><a href="deletar_servico.php?id=<?php echo $dados['id_servico'];?>"><i class="fas fa-trash-alt" ></i></a></td>

						</tr>
						<?php } ?>
		
		</table>
		<br/>
		<br/>
						<a href="cadastro_servico.php" class="universal_link"> Cadastrar Serviço </a>
						<br />
						<br />
						<a href="../login/logout.php" class="universal_link">Sair</a>
		</center>
		<script src="../js/btn-search.js"> </script>
	</body>
</html>