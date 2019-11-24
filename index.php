<!DOCTYPE html>
<html>
	<head>
	<?php
	include("head1.php")
	?>
		<title>
		Agif Brasil
		</title>
		
	</head>
	<body>
		<?php
		include("header.php");
		?>
		
		<!-- Slideshow container -->
		<div class="slideshow-container">

		  <!-- Full-width images with number and caption text -->
		  <div class="mySlides fade">
				<table class="texto_carousel" id="texto1_carousel">
					<tr>
						<td>
							<center>
								<b id="texto1_carousel">AGIF BRASIL</b>
								<div id="traço_agif"></div>
								<div id="texto2_carousel">IMPLANTANDO SOLUÇÕES GERENCIADAS</div>
							</center>
						</td>
					</tr>
				</table>
			<img src="img/tech.jpg" style="width:100%; height:105.50%; object-fit: cover;">
		  </div>

			<div class="mySlides fade">
				<table class="texto_carousel" id="texto3_carousel">
					<tr>
						<td>
							<center>
								Nossa missão é investir continuamente em ferramentas de inovação, conhecimento e capacitação para atender as necessidades empreendedoras com soluções eficazes.
							</center>
						</td>
					</tr>
				</table>
			<img src="img/startup.jpg" style="width:100%; height:105.50%; object-fit: cover;">
		  </div>

		  <div class="mySlides fade">
				<table class="texto_carousel" id="texto4_carousel">
					<tr>
						<td>
							<center>
								Ser referência na Integração de processos de nossos clientes. Implantando e gerenciando soluções em Gestão de Processos, Automação Comercial e Contábil, Marketing Digital e Planejamento Estratégico.
							</center>
						</td>
					</tr>
				</table>
			<img src="img/mesa.jpg" style="width:100%; height:105.50%; object-fit: cover;">
		  </div>
		  
		  <div class="mySlides fade">
				<table class="texto_carousel" id="texto5_carousel">
					<tr>
						<td>
							<center>
								Ética, Transparência, Responsabilidade Social, Associativismo, Humanismo, Entusiasmo, Empatia, Fé, Solidariedade, Serenidade e Fidelidade.
							</center>
						</td>
					</tr>
				</table>
			<img src="img/universidade.jpg" style="width:100%; height:105.50%; object-fit: cover;">
		  </div>
		  
			<!-- The dots/circles -->
		<div style="text-align:center; position:relative;">
		  <span class="dot" onclick="currentSlide(1)"></span> 
		  <span class="dot" onclick="currentSlide(2)"></span> 
		  <span class="dot" onclick="currentSlide(3)"></span> 
		  <span class="dot" onclick="currentSlide(4)"></span>
		</div>
		
		  <!-- Next and previous buttons -->
		  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		  <a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		  	

		
		<div id="centro2" >
		<p id="texto_index_1" style="margin:0px;">
		Com a experiência de seus sócios fundadores após alguns anos dedicados a carreira de 
		Consultoria Empresarial em Planejamento Estratégico, nasce em 2004 a AGIF BRASIL.
		<a class="universal_link" href="sobre.php">Leia mais sobre a empresa...</a>
		</p>
		<br />
			<div id="div_img_centro_2"></div>
		<br />
		<p id="texto_index_2" style="margin:0px;">
		Quem detém informação tem consigo um grande aliado na tomada de decisão. Isto pode 
		lhe parecer clichê, porém o país saindo de um momento conturbado como está é extremamente 
		necessário que se invista nas mudanças das “rotinas” para implementação de processos
		<a class="universal_link" href="automacao.php">Leia mais sobre Automação Comercial...</a>
		</p>
		</div>
		
		<script>
		var slideIndex = 1;
		showSlides(slideIndex);

		// Next/previous controls
		function plusSlides(n) {
		  showSlides(slideIndex += n);
		}

		// Thumbnail image controls
		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}

		function showSlides(n) {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
		  if (n > slides.length) {slideIndex = 1} 
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
			  slides[i].style.display = "none"; 
		  }
		  for (i = 0; i < dots.length; i++) {
			  dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block"; 
		  dots[slideIndex-1].className += " active";
		}
		</script>
		
		<?php
		include("footer.php");
		?>
	</body>
</html>