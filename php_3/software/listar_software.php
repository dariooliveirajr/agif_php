<?php

include("../conexao/conexao.php");
include("banco_software.php");
// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
?>

<!DOCTYPE html>
<html>
	<head>
		<?php include ("../css/head1.php"); ?>
		<title> Lista de Softwares </title>
	</head>
	<body id="body_listar">
	<center>
				<div id="titulo_1_table">
						Lista de Softwares
				</div>
				
					<div id="titulo_2_table">
							Listar todos os Softwares do banco de dados
					</div>

			<div id="div_busca">
						<form method="POST" id="buscar-clientes">
						<br/>
						<a href="listar_software.php" id="voltar_listar">
							<i class="fas fa-undo-alt"></i>
							</a>
						<p class="buscar_texto">Buscar Software</p>
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
								$lista = listar_software($conexao);
						}
						else{
						$id_cliente =$_POST['id_clientes'];
						$lista = buscar_software($conexao, $id_cliente);}
					}
					else{
						$lista = listar_software($conexao);
					}
					?>
					<tr>
						<td>ID</td>
						<td>Software</td>
						<td>Descrição</td>

					</tr>
			<?php foreach($lista as $dados) { ?>
				<tr>
						<td><?php echo $dados['id_software'];?></td>
						<td><?php echo $dados['software'];?></td>
						<td><?php echo $dados['descricao'];?></td>
						<td><a href="pag_editar_software.php?id=<?php echo $dados['id_software'];?>"><i class="fas fa-pen"></i></a></td>
						<td><a href="deletar_software.php?id=<?php echo $dados['id_software'];?>"><i class="fas fa-trash-alt" ></i></a></td>

						</tr>
						<?php } ?>
		
		</table>
		<br/>
		<br/>
						<a href="cadastro_software.php" class="universal_link"> Cadastrar Software </a>
						<br />
						<br />
						<a href="../login/logout.php" class="universal_link">Sair</a>
	</center>
		<script src="../js/btn-search.js"> </script>
	</body>
</html>