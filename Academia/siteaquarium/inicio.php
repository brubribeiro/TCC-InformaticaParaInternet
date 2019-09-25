<?php
include_once("../admaquarium/controller/aulas.controller.php");
include_once("../admaquarium/controller/aplicativo.controller.php");
include_once("../admaquarium/controller/contato.controller.php");



?>
<!DOCTYPE html>
<html class="no-js"> 
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Academia Aquarium Fit</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

 
	<meta property="og:title" content=""/>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
	
	
	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="css/icomoon.css">
	
	<link rel="stylesheet" href="css/bootstrap.css">
	
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">


	
	<script src="js/modernizr-2.6.2.min.js"></script>
	
	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						
						<a href="inicio.php" class="logo"><img src="images/logo.png" width="250" height="150" alt=""></a>

						<!-- MENU -->
					
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li class="active">
									<a href="inicio.php">Inicio</a>
								</li>
								<li>
									<a href="aulas.php">Aulas</a>
								</li>		
								<li>
									<a href="galeria.php">Galeria</a>
								</li>												
								<li>
									<a href="sobre.php">Sobre</a>
								</li>
								<li>
									<a href="contato.php">Contato</a>
								</li>	
								<li>
									<span>
										<a class="btn btn-primary2" href="login.php"><font color="#1E90FF"><b>LOGIN</b></a></span></font>
								</li>															
							</ul>
						</nav>
						<!-- FIM MENU -->
					</div>
				</div>
			</header>		
		</div>
		<!-- TITULO PRINCIPAL -->
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/home-image.jpg);">
				<div class="desc animate-box">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<h2>Pensando <br>em você e em suas <b>Necessidades.</b></h2>
								<p><span>Na Aquarium Fit, você encontra atividades que foram desenvolvidas pensando em você e nas suas necessidades. <i class="icon-heart2"></i> <a href="http://freehtml5.co" class="fh5co-site-name"></a></span></p>
								<span><a class="btn btn-primary" href="aulas.php"><font color="#1E90FF">Saiba mais aqui.</a></span>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- FIM TITULO PRINCIPAL -->
		
		<!-- INÍCIO AULAS POR SEMANA -->
		<div id="fh5co-schedule-section" class="fh5co-lightgray-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="heading-section text-center animate-box">
							<br>
							<br>
							<h2>Horario de Aulas</h2>
							<p>Abaixo você pode conferir os horarios de aulas disponibilizados pelos professores e tambem algumas das aulas disponiveis semanalmente.</p>
						</div>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="schedule">
							<li><a href="#" class="active" data-sched="segunda">Segunda</a></li>
							<li><a href="#" data-sched="terca">Terça</a></li>
							<li><a href="#" data-sched="quarta">Quarta</a></li>
							<li><a href="#" data-sched="quinta">Quinta</a></li>
							<li><a href="#" data-sched="sexta">Sexta</a></li>
							<li><a href="#" data-sched="sabado">Sabado</a></li>
							
						</ul>
					</div>
					<div class="row text-center">

						<div class="col-md-12 schedule-container">

							<div class="schedule-content active" data-day="segunda">

								<?php
								foreach ($aul->ConsultarPorSemana("Segunda-feira") as $linha):
								?>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/<?php echo $linha->imgaula;?>" alt="">
										<small><?php echo $linha->horario;?></small>
										<h3><?php echo $linha->nomeaula;?></h3>
									

									</div>
								</div>
							<?php endforeach;?>
							</div>

							<div class="schedule-content" data-day="terca">

								<?php
								foreach ($aul->ConsultarPorSemana("Terça-feira") as $linha):
								?>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/<?php echo $linha->imgaula;?>" alt="">
										<small><?php echo $linha->horario;?></small>
										<h3><?php echo $linha->nomeaula;?></h3>
									

									</div>
								</div>
							<?php endforeach;?>
							</div>

							<div class="schedule-content" data-day="quarta">

								<?php
								foreach ($aul->ConsultarPorSemana("Quarta-feira") as $linha):
								?>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/<?php echo $linha->imgaula;?>" alt="">
										<small><?php echo $linha->horario;?></small>
										<h3><?php echo $linha->nomeaula;?></h3>
									

									</div>
								</div>
							<?php endforeach;?>
							</div>
							
							<div class="schedule-content" data-day="quinta">

								<?php
								foreach ($aul->ConsultarPorSemana("Quinta-feira") as $linha):
								?>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/<?php echo $linha->imgaula;?>" alt="">
										<small><?php echo $linha->horario;?></small>
										<h3><?php echo $linha->nomeaula;?></h3>
									

									</div>
								</div>
							<?php endforeach;?>
							</div>

							<div class="schedule-content" data-day="sexta">

								<?php
								foreach ($aul->ConsultarPorSemana("Sexta-feira") as $linha):
								?>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/<?php echo $linha->imgaula;?>" alt="">
										<small><?php echo $linha->horario;?></small>
										<h3><?php echo $linha->nomeaula;?></h3>
									

									</div>
								</div>
							<?php endforeach;?>
							</div>

							<div class="schedule-content" data-day="sabado">

								<?php
								foreach ($aul->ConsultarPorSemana("Sabado") as $linha):
								?>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/<?php echo $linha->imgaula;?>" alt="">
										<small><?php echo $linha->horario;?></small>
										<h3><?php echo $linha->nomeaula;?></h3>
									

									</div>
								</div>
							<?php endforeach;?>
							</div>					
						</div>
					</div>
				</div>
			</div>
			<!-- FIM AULAS POR SEMANA -->
		<br>
		<br>
			<!-- TITULO VENHA PARA A AQUARIUM -->
		<div class="fh5co-parallax" style="background-image: url(images/home-image-3.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
							<h1 class="text-center">Venha para Aquarium Fit.</h1>
							<p>Flexibilidade de horários, profissionais atenciosos e ambientes agradáveis completam nosso quadro de vantagem. O que você pretende para o seu físico, sua saúde e seu estilo de vida estão aqui!</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- FIM TITULO VENHA PARA A AQUARIUM -->

		<!-- INICIO INDICAÇÃO DE APLICATIVOS -->
		<div id="fh5co-programs-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="heading-section text-center animate-box">
							<br>
							<br>
							<h2>Indicação de aplicativos saúdaveis</h2>
							<p>Confira abaixo uma breve descrição dos aplicativos, e escolha a melhor para você.</p>
						</div>
					</div>
				</div>
				<div class="row text-center">

				<?php
				foreach ($apl->Consultar() as $linha):
				?>					

					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">							
							<h3><?php echo $linha->nomeapp;?></h3>
							<img src="images/<?php echo $linha->imgapp;?>">
							<p><?php echo $linha->descricaoapp;?></p>
							<p><?php echo $linha->plataforma;?></p>
							
						</div>
					</div>

				<?php endforeach;?>

				</div>
			</div>
		</div>
		<!-- FIM INDICAÇÃO DE APLICATIVOS -->
	</div>

	<!-- GOOGLE MAPS ENDEREÇO ACADEMIA-->
		<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;width:1500px;'><div id='gmap_canvas' style='height:440px;width:1500px;'></div><div><small><a href="embedgooglemaps.com/pt/">https://embedgooglemaps.com/pt/</a></small></div><div><small><a href="http://www.kumo-racing.nl/">bezoek website</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:19,center:new google.maps.LatLng(-23.35768354609015,-46.735713641069765),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-23.35768354609015,-46.735713641069765)});infowindow = new google.maps.InfoWindow({content:'<strong>Academia Aquarium FIT</strong><br>Rua Bahia, 86 - Caieiras,São Paulo<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
		<footer>

			<!-- INICIO RODAPÉ -->
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4 animate-box">
							<h3 class="section-title">Sobre</h3>
							<p>A Aquarium é uma academia situada na cidade de Caieiras. Possui como diferencial o respeito pelos alunos e funcionários, desenvolvendo um trabalho de qualidade através da natação e do fitness.</p>
						</div>

						<div class="col-md-4 animate-box">
							<h3 class="section-title">Endereço</h3>
							<ul class="contact-info">
								<li><i class="icon-map-marker"></i>R. Bahia, 86 - Nova Era, Caieiras - SP, 07724-060</li>
								<li><i class="icon-phone"></i> (11) 4442-5294</li>
								<li><i class="icon-envelope"></i><a href="#">aquariumfit.academia@gmail.com</a></li>
								<li><i class="icon-globe2"></i><a href="#">aquariumfit.com.br</a></li>
							</ul>
						</div>
						<!-- ENVIO DE CONTATO -->
						<div class="col-md-4 animate-box">
							<h3 class="section-title">Entre em contato.</h3>
							<form action="?<?php echo $acao= "acao=cadastrar_con";?>" method="post" role="form">
								<div class="form-group">
									<label for="nome" class="sr-only">Nome</label>
									<input type="nome" name="nome" class="form-control" id="nome" placeholder="Nome" required value="<?php echo $con->nome;?>">
								</div>
								<div class="form-group">
									<label for="email" class="sr-only">Email</label>
									<input type="email" name="email" class="form-control" id="email" placeholder="Email"
									required value="<?php echo $con->email;?>">
								</div>
								<div class="form-group">
									<label for="mensagem" class="sr-only">Mensagem</label>
									<textarea class="form-control" name="mensagem" id="mensagem" rows="7" placeholder="Mensagem" required value="<?php echo $con->mensagem;?>"></textarea>
								</div>
								<div class="form-group">

								<input type="hidden" name="codcontato" value="<?php echo $con->codcontato;?>">						
								<button type="submit" id="btn-submit" class="btn btn-send-message btn-md">Enviar Mensagem</button>
								</div>
							</form>
						</div>
						<!-- FIM ENVIO DE CONTATO -->
					</div>
					<!-- INICIO REDES SOCIAIS -->
				<div class="row copy-right">
					<div class="col-md-6 col-md-offset-3 text-center">
						<p class="fh5co-social-icons">								
						<a href="https://mobile.twitter.com/AquariumFit"><i class="icon-twitter2"></i></a>
						<a href="https://www.facebook.com/aquarium.fit.71"><i class="icon-facebook2"></i></a>
						<a href="https://www.instagram.com/academia.aquariumfit/"><i class="icon-instagram"></i></a>
						<a href="https://www.youtube.com/watch?v=Ce1B1DOT3RU"><i class="icon-youtube"></i></a>
					<!-- FIM REDES SOCIAIS -->			
							</p>
							<p>Copyright 2018 Todos os direitos reservados.
						</div>
					</div>
				</div>
			</div>
			<!-- FIM RODAPÉ -->
		</footer>
	</div>
	

	</div>
	


	<script src="js/jquery.min.js"></script>
	
	<script src="js/jquery.easing.1.3.js"></script>
	
	<script src="js/bootstrap.min.js"></script>

	<script src="js/jquery.waypoints.min.js"></script>

	<script src="js/jquery.stellar.min.js"></script>

	<script src="js/hoverIntent.js"></script>

	<script src="js/superfish.js"></script>
	
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<script src="js/main.js"></script>

	</body>
</html>

