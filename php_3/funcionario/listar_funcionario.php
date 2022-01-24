<?php

include("../conexao/conexao.php");
include("banco_funcionario.php");
// Verificação
// Sessão
if(!isset($_SESSION['logado'])):
	header('Location: ../login/index_adm.php');
endif;
?>

<!DOCTYPE html>
	<head>
		<?php include ("../css/head1.php"); ?>
		<title> Lista de Funcionarios </title>
	</head>
	<body id="body_listar">
	<center>
				<div id="titulo_1_table">
						Lista de Funcionarios
				</div>
				
					<div id="titulo_2_table">
							Listar todos os Funcionarios do banco de dados
					</div>
				<div id="div_busca">
						<form method="POST" id="buscar-clientes">
						<br/>
						<a href="listar_funcionario.php" id="voltar_listar">
							<i class="fas fa-undo-alt"></i>
							</a>
						<p class="buscar_texto">Buscar Funcionario</p>
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
								$lista = listar_funcionario($conexao);
						}
						else{
						$id_cliente =$_POST['id_clientes'];
						$lista = buscar_funcionario($conexao, $id_cliente);}
					}
					else{
						$lista = listar_funcionario($conexao);
					}
					?>
					<tr>
						<td>ID</td>
						<td>Funcionario</td>
						<td>CPF</td>
						<td>RG</td>
						<td>Telefone</td>
						<td>Email</td>
						<td>CEP</td>
						<td>Rua</td>
						<td>Numero</td>
						<td>Bairro</td>
						<td>Cidade</td>
					</tr>
			<?php foreach($lista as $dados) { ?>
				<tr>
						<td><?php echo $dados['id_funcionario'];?></td>
						<td><?php echo $dados['funcionario'];?></td>
						<td><?php echo $dados['cpf'];?></td>
						<td><?php echo $dados['rg'];?></td>
						<td><?php echo $dados['tel'];?></td>
						<td><?php echo $dados['email'];?></td>
						<td><?php echo $dados['cep'];?></td>
						<td><?php echo $dados['rua'];?></td>
						<td><?php echo $dados['numero'];?></td>
						<td><?php echo $dados['bairro'];?></td>
						<td><?php echo $dados['cidade'];?></td>
						<td><a href="pag_editar_funcionario.php?id=<?php echo $dados['id_funcionario'];?>"><i class="fas fa-pen"></i></a></td>
						<td><a href="deletar_funcionario.php?id=<?php echo $dados['id_funcionario'];?>"><i class="fas fa-trash-alt" ></i></a></td>

						</tr>
					<?php } ?>
			</table>
		<br/>
		<br/>
						
		
			<a href="cadastro_funcionario.php" class="universal_link"> Cadastrar Funcionario </a>
				<br />
				<br />
			<a href="../login/logout.php" class="universal_link">Sair</a>
	</center>
			
		<script src="../js/btn-search.js"> </script>
	</body>
</html>