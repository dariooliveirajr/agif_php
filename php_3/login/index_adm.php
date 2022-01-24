<?php


// Conexão
include("../conexao/conexao.php");

// Sessão
session_start();

// Botão enviar
if(isset($_POST['btn-entrar'])):
	$erros = array();
	$login = mysqli_escape_string($conexao, $_POST['login']);
	$senha = mysqli_escape_string($conexao, $_POST['senha']);

	if(isset($_POST['lembrar-senha'])):

		setcookie('login', $login, time()+3600);
		setcookie('senha', md5($senha), time()+3600);
	endif;

	if(empty($login) or empty($senha)):
		$erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
	else:
		// 105 OR 1=1 
	    // 1; DROP TABLE teste

		$sql = "SELECT email FROM adm WHERE email = '$login'";
		$resultado = mysqli_query($conexao, $sql);		

		if(mysqli_num_rows($resultado) > 0):
		$senha = md5($senha);       
		echo $senha;
		$sql = "SELECT * FROM adm WHERE email = '$login' AND senha = '$senha'";




		$resultado = mysqli_query($conexao, $sql);

			if(mysqli_num_rows($resultado) == 1):
				$dados = mysqli_fetch_array($resultado);
				mysqli_close($conexao);
				$_SESSION['logado'] = true;
				$_SESSION['id_adm'] = $dados['id_adm'];
				header('Location: ../home.php');
			else:
				$erros[] = "<li> Usuário e senha não conferem </li>";
			endif;

		else:
			$erros[] = "<li> Usuário inexistente </li>";
		endif;

	endif;

endif;
?>

<html id="html_index_adm">
	<head>
		<?php include("../css/head1.php"); ?>
		<title>Login</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	
	<body id="index_adm">
		<center>
			<table id="centro_login">
				<tr>
					<td>
					<center>
						<b style="color:#002036;font-family: 'Montserrat', sans-serif;font-size:3vw;"> LOGIN </b>
						
						<?php 
						if(!empty($erros)):
							foreach($erros as $erro):
								echo $erro;
							endforeach;
						endif;
						?>
						
				
				
						<form id="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
						
							<label class="field a-field a-field_a2 page__field" style="margin-top:35px;">
							<input class="field__input" placeholder="Digite seu e-mail" required type="text" name="login" value="<?php echo isset($_COOKIE['login']) ? $_COOKIE['login'] : '' ?>">
							<span class="field__label-wrap">
							<span class="field__label">Login</span>
							</span>
							</label> 
							<br/>

							<label class="field a-field a-field_a2 page__field" style="margin-top:35px;">
							<input class="field__input" placeholder="Digite sua senha" required type="password" name="senha">
							<span class="field__label-wrap">
							<span class="field__label">Senha</span>
							</span>
							</label> 
							<br/>
							<br/>

							<label style="color:#7a7a7a;margin-top:35px;font-family: 'Montserrat', sans-serif;font-size:1.2vw;">
							Lembrar Usuario: <input type="checkbox" name="lembrar-senha">
							</label>
							<br/>
							<button id="submit_formulario" type="submit" name="btn-entrar"> Entrar </button>
							
						
						</form>
						<label style="font-size:1vw;"><a href="../adm/cadastro_adm.php">Não possui cadastro?</a></label>
						</center>
					</td>
				</tr>
			</table>
			
		</center>

	</body>
</html>