<?php
$pagina = 'tipo_consultoria';

include("../conexao/conexao.php");
include("banco_tipo_consultoria.php");
// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
?>


<!DOCTYPE html>
<html>
	<head>
		<?php include ("../css/head1.php"); ?>
		<title> Lista de Tipo de Consultoria </title>
	</head>
	<body id="body_listar">
	<center>
				<div id="titulo_1_table">
						Lista de Tipo de Consultoria
				</div>
				
					<div id="titulo_2_table">
							Listar todos os Tipo de Consultoria do banco de dados
					</div>

			<div id="div_busca">
						<form method="POST" id="buscar-clientes">
						<br/>
						<a href="listar_tipo_consultoria.php" id="voltar_listar">
							<i class="fas fa-undo-alt"></i>
							</a>
						<p class="buscar_texto">Buscar Cliente</p>
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
								$lista = listar_tipo_consultoria($conexao);
						}
						else{
						$id_cliente =$_POST['id_clientes'];
						$lista = buscar_tipo_consultoria($conexao, $id_cliente);}
					}
					else{
						$lista = listar_tipo_consultoria($conexao);
					}
					?>
					<tr>
						<td>ID</td>
						<td>Tipo de consultoria</td>
						<td>Descrição</td>

					</tr>
			<?php foreach($lista as $dados) { ?>
				<tr>
						<td><?php echo $dados['id_tipo_consultoria'];?></td>
						<td><?php echo $dados['tipo_consultoria'];?></td>
						<td><?php echo $dados['descricao'];?></td>
						<td><a href="pag_editar_tipo_consultoria.php?id=<?php echo $dados['id_tipo_consultoria'];?>"><i class="fas fa-pen"></i></a></td>
						<td><a href="deletar_tipo_consultoria.php?id=<?php echo $dados['id_tipo_consultoria'];?>"><i class="fas fa-trash-alt" ></i></a></td>

						</tr>
						<?php } ?>
		
		</table>
		<br/>
		<br/>
						<a href="cadastro_tipo_consultoria.php" class="universal_link"> Cadastrar Tipo de Consultoria </a>
						<br />
						<br />
						<a href="../login/logout.php" class="universal_link">Sair</a>
		</center>
		<script src="../js/btn-search.js"> </script>
	</body>
</html>