<!DOCTYPE html>
<html>
	<head>
	<?php
	include("head1.php")
	?>
	<title>
	Orçamento
		</title>
	</head>
	<body>
		<?php
		include("header.php");
		?>
		
		<div id="centro1_orcamento">
		</div>
		<div id="centro_orcamento">
		<center>
		<table id="title_orcamento">
			<tr>
				<td>
					Orçamento
				</td>
			</tr>
		</table>
		
			<form id="orcamento_form">

					<label class="field a-field a-field_a2 page__field" style="margin-top:35px;">
					  <input class="field__input" placeholder="Digite seu nome completo" required>
					  <span class="field__label-wrap">
						<span class="field__label">Nome </span>
					  </span>
					</label>   
					
				<label class="field a-field a-field_a2 page__field" style="margin-top:35px;">
					  <input class="field__input" placeholder="Ex: 11123445678" required>
					  <span class="field__label-wrap">
						<span class="field__label">Telefone</span>
					  </span>
					</label> 
					
				<label class="field a-field a-field_a2 page__field" style="margin-top:35px;">
					  <input class="field__input" placeholder="Digite seu e-mail" required>
					  <span class="field__label-wrap">
						<span class="field__label">E-mail</span>
					  </span>
					</label> 	
					
					<label class="field a-field a-field_a3 page__field" style="margin-top:40px;">
					  <textarea class="field__input" placeholder="Faça seu pedido de orçamento" required style=" height:400px; resize: none;"></textarea>
					  <span class="field__label-wrap">
						<span class="field__label">Escreva Aqui</span>
					  </span>
					</label>

				<input id="submit_orcamento" type="submit" name="btn_orcamento"><br/>
			</form>
		</center>
		</div>
		
		<?php
		include("footer.php");
		?>
		
	</body>
</html>