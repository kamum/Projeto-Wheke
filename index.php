<?php
$msg=0;
@$msg= $_REQUEST['msg'];
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Wheke seu Negócio de Maneira Inteligente</title>
		<meta name="description" content="Empresa Especializada em Serviço de Atendimento ao Cliente.">
		<meta name="Keywords" content="Atendimento ao Cliente, Marketing, Gestão">
		<meta name="robots" content="index, follow">
		<meta name="author" content="Jonathan Magalhães">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="libs/animate.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<link rel="icon" href="images/icon.png">
	</head>
	<body>

		<header class="cabecalho">
			<a href="index.html" class="logo">Wheke</a>
			<input type="checkbox" id="btn-menu">
			<label class="icon-menu" for="btn-menu"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></label>
			<nav class="menu">
				<ul>
					<li class="click"><a href="#home">Home</a></li>
					<li class="click"><a href="#internet">A Internet</a></li>
					<li class="click"><a href="#atendimento">Atendimento</a></li>
					<li class="click"><a href="#social">Social Listening</a></li>
					<li class="click"><a href="#gestao">Gestão</a></li>
					<li class="click"><a href="#contato">Contato</a></li>
				</ul>
			</nav>
		</header>
		<!-- FIM DE CABECALHO -->
		<a name="home">
			<div id="banner">
				<h2 class="wow fadeInDown">Wheke Smart Business</h2>
				<div class="title">
					<h3 class="wow fadeIn" data-wow-duration="2s" data-wow-delay=".6s">EMPATIA E EFICIÊNCIA</h3>
					<h4 class="wow fadeIn" data-wow-duration="2s" data-wow-delay=".6s">Aumente suas vendas, entenda sua clientela e torne-se referência.</h4>
				</div>
				<div class="buttons wow bounceIn" data-wow-duration="2s" data-wow-delay="1s">
					<a href="#" class="btn-saiba">Saiba mais</a>
				</div>
			</div>
			<!-- FIM DE BANNER -->
		</a>
		<!-- FIM DA ANCORA HOME -->
		<main class="conteudo">
			<a name="internet">
				<article class="resumo">
					<h2 class="wow zoomIn"><strong>A INTERNET O E-COMMERCE E OS DADOS</strong></h2>
					<div class="imagens-resumo wow lightSpeedIn">
						<img src="images/smartphone-512.png" alt="Smartphones">
						<p>No Brasil, para cada quatro habitantes,<br>temos 5 telefones</p>
						<img src="images/televisao.png" alt="Televisao">
						<p>Passamos maistempo olhando para<br> a tela do smartphonedo que para a TV</p>
						<img src="images/social-media.png" alt="Redes Sociais">
						<p>76% dos usuários usam Facebook<br> 86% dos usuários usam WhatsApp</p>
						<img src="images/money.png" alt="Dinheiro">
						<p>Em 2015, o e-commerce no <br>Brasil conseguiu faturar R$ 41,3 bilhões</p>
						<img src="images/curtir.png" alt="curtir">
						<p>Aumento na confiança em <br>negócios online  38% da população<br> afirma comprar mensalmente</p>
						<img src="images/gold.png" alt="crecimento">
						<p>Mesmo em ano de crise,<br> o comércio eletrônico cresceu 15,3%<br> contra o tradicional</p>
					</div>
				</article>
				<!-- FIM DE RESUMO -->
			</a>
			<!-- FIM DA ANCORA INTERNET -->
			<a name="atendimento">
				<article class="servicos">
					<h2 class="wow zoomIn"><strong>ATENDIMENTO DIGITAL</strong></h2>
					<div class="imagens-servicos">
						<h3 class="wow fadeInLeft"><strong>como é feito</strong></h3>
						<img class="wow fadeInLeft" src="images/grupo1.png" alt="Serviços comuns">
						<h3 class="wow fadeInRight"><strong>como fazemos</strong></h3>
						<img class="wow fadeInRight" src="images/grupo2.png" alt="Nossos serviços">
					</div>
				</article>
				<!-- FIM DE SRVIÇOS -->
			</a>
			<!-- FIM DA ANCORA ATENDIMENTO -->
			<a name="social">
				<article class="sociais">
					<h2 class="wow zoomIn"><strong>SOCIAL LISTENING</strong></h2>
					<div class="imagens wow lightSpeedIn">
						<img class="facebook" src="images/facebook1.png" alt="facebook">	
						<img class="whatsapp" src="images/whatsapp01.png" alt="whatsapp">
						<img class="twitter" src="images/twitter01.png" alt="twitter">
						<img class="instagram" src="images/instagram01.png" alt="instagram">
						<img class="google" src="images/google01.png" alt="google">
					</div>
				</article>
				<!-- FIM DE SOCIAIS -->
			</a>
			<!-- FIM DA ANCORA SOCIAL -->
			<a name="gestao">
				<article class="gestao">
					<h2 class="wow zoomIn"><strong>GESTÃO DA CLIENTELA</strong></h2>
					<h3 class="wow zoomIn" data-wow-delay=".5s">Dados armazenados e bem organizados<br/> facilitam a compreenção<br/> das suas vendas e da sua clientela</h3>
					<div class="imagens-g wow fadeIn">
						<img class="grafico1" src="images/grafico01.png" alt="grafico">
						<img class="grafico2" src="images/grafico02.jpg" alt="grafico-pizza">
						<img class="grafico3" src="images/grafico03.jpg" alt="grafico-coluna">
					</div>
				</article>
				<!-- FIM DE GESTAO -->
			</a>
			<!-- FIM DA ANCORA GESTAO-->
			<a name="contato">
				<section class="contato">
					<h2 class="wow zoomIn"><strong>Fale com a gente!</strong></h2>
					<h3>telefone</h3>
					<p>55 21 99933 0396</p>
					<h3>e-mail</h3>
					<p>contato@wheke.net</p>
					<?php if($msg==enviado): ?>
						<h1>Mensagem Enviada!</h1>
					<?php else: ?>
						<form action="processaForm.php" method="post">
							<p><b>Nome:</b><br>
							<input type=text name="nome" required></p><br>
							<p><b>Email:</b><br>
							<input type=text name="email" required></p><br>
							<p><b>Assunto:</b><br>
							<input type=text name="assunto"></p><br>
							<p><b>Mensagem:</b><br>
							<textarea name="mensagem" rows="10" cols="30" required></textarea></p><br>
							<p><input class="submit" type="submit" value="Enviar!"></p>				
						</form>
					<?php endif; ?>
				</section>
				<!-- FIM DE CONTATO -->
			</a>
			<!-- FIM DA ANCORA CONTATO -->
			<footer class="rodape">
				<div class="social-icons">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
				</div>
				<p>Copyright © Wheke 2016 todos os direitos reservados.Criado por Jonathan Magalhães</p>
			</footer>
			<!-- FIM DE RODAPE -->
		</main>
		<!-- FIM DE CONTEUDO -->

		<!-- JQUERY -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
		<!-- EFEITOS.JS -->
		<script type="text/javascript" src="js/efeitos.js"></script>
		<!-- WOW.JS -->
		<script src="js/wow.min.js"></script>
		<script>
            new WOW().init();
        </script>
	</body>
</html>
