<!DOCTYPE html>
<html>
<head>
	<title>Projeto 01</title>
	<link rel="stylesheet" href="/estilo/font-awesome.min.css">
	<link href="estilo/all.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="palavras,chave,do,meu,site">
	<meta name="description" content="descricao do meu website">
	<meta charset="utf-8">
</head>
<body>
	<!--Inicio da Header-->
	<header>
		<div class="center">
			<div class="logo left">Logomarca</div><!--logo-->
			<nav class="desktop right">
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">Sobre</a></li>
					<li><a href="">Serviços</a></li>
					<li><a href="">Contato</a></li>
				</ul>
				
			</nav>

			<nav class="mobile right">
				<div class="botao-menu-mobile">
					<i class="fas fa-bars"></i>
				</div>
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">Sobre</a></li>
					<li><a href="">Serviços</a></li>
					<li><a href="">Contato</a></li>
				</ul>
				
			</nav>
			<div class="clear"></div>
		</div><!--center-->
	</header>


	<!--Seção de banner-->
	<section class="banner-principal">
		<div class="overlay"></div><!--overlay-->
		<div class="center">
			<form>
				<h2>Qual o seu melhor E-mail?</h2>
				<input type="email" name="email" required>
				<input type="submit" name="acao" value="Cadastrar!">
			</form>
		</div><!--center-->
	</section><!--banner-principal-->


	<!--Descrição do Autor-->
	<section class="descricao-autor">
		<div class="center">
			<div class="w50 left">
				<h2>Matheus Eufrásio</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur commodo elit eu libero ultricies imperdiet. Aenean et turpis velit. Sed aliquet, enim iaculis dictum semper, dui justo convallis odio, sit amet rutrum justo sapien sit amet ex. Praesent iaculis malesuada posuere. Donec at purus id lacus mollis pretium sed et leo. Etiam mollis vestibulum orci non varius. Sed nec venenatis lectus.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur commodo elit eu libero ultricies imperdiet. Aenean et turpis velit. Sed aliquet, enim iaculis dictum semper, dui justo convallis odio, sit amet rutrum justo sapien sit amet ex. Praesent iaculis malesuada posuere. Donec at purus id lacus mollis pretium sed et leo. Etiam mollis vestibulum orci non varius. Sed nec venenatis lectus.</p>
			</div><!--w50-->
			<div class="w50 left">
				<img class="right" src="images/pic2.jpg"/>
			</div><!--w50-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--descricao-autor-->


	<!--Especialidades-->
	<section class="especialidades">

		<div class="center">
			<h2 class="title">Especialidades</h2>
			<div class="w33 left box-especialidade">
				<h3><i class="fab fa-css3"></i></h3>
				<h4>CSS3</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur commodo elit eu libero ultricies imperdiet. Aenean et turpis velit. Sed aliquet</p>
			</div><!--box-especialidade-->
			<div class="w33 left box-especialidade">
				<h3><i class="fab fa-html5"></i></h3>
				<h4>HTML5</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur commodo elit eu libero ultricies imperdiet. Aenean et turpis velit. Sed aliquet</p>
			</div><!--box-especialidade-->
			<div class="w33 left box-especialidade">
				<h3><i class="fab fa-js-square"></i></h3>
				<h4>JAVASCRIPT</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur commodo elit eu libero ultricies imperdiet. Aenean et turpis velit. Sed aliquet</p>
			</div><!--box-especialidades-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--especialidades-->
	

	<!--EXTRAS-->
	<section class="extras">

		<div class="center">
			<div class="w50 left depoimentos-container">
				<h2 class="title">Depoimentos dos nossos clientes</h2>
				<div class="depoimento-single">
					<p class="depoimento-descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur commodo elit eu libero ultricies imperdiet. Aenean et turpis velit. Sed aliquet, enim iaculis dictum semper, dui justo convallis odio</p>
					<p class="nome-autor">Larissa Eufrásio</p>
				</div><!--depoimento-single-->
				<div class="depoimento-single">
					<p class="depoimento-descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur commodo elit eu libero ultricies imperdiet. Aenean et turpis velit. Sed aliquet, enim iaculis dictum semper, dui justo convallis odio</p>
					<p class="nome-autor">Larissa </p>
				</div><!--depoimento-single-->
				<div class="depoimento-single">
					<p class="depoimento-descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur commodo elit eu libero ultricies imperdiet. Aenean et turpis velit. Sed aliquet, enim iaculis dictum semper, dui justo convallis odio</p>
					<p class="nome-autor">Eufrásio</p>
				</div><!--depoimento-single-->
			</div> <!--w50-->


			<div class="w50 left servicos-container">
				<h2 class="title">Serviços</h2>
				<div class="servicos">
					<ul>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur commodo elit eu libero ultricies imperdiet. Aenean et turpis velit.</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur commodo elit eu libero ultricies imperdiet. Aenean et turpis velit.</li>
						<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur commodo elit eu libero ultricies imperdiet. Aenean et turpis velit.</li>
					</ul>
				</div><!--servicos-->
			</div> <!--w50-->
			<div class="clear"></div>
		</div> <!--center-->
	</section> <!--extras-->

	<footer>
		<div class="center">
			<p>Eufrásio Company - Todos os direitos reservados</p>	
		</div><!--center-->
		
	</footer>

</body>
</html>