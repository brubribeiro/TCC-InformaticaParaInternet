<?php
ob_start();
session_start();
if(!isset($_SESSION['codusuario']))//verificar não existe a sessão
{
    header("location:inicio.php");//volta para o login
}

include_once("../admaquarium/controller/cliente.controller.php");
include_once("../admaquarium/controller/contato.controller.php");
include_once("../admaquarium/controller/usuario.controller.php");
	
?>
<!DOCTYPE html>
<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Academia Aquarium Fit</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  
	<meta property="og:title" content=""/>
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
								<li>
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
								
								<?php 
								//session_start();
								if(!isset($_SESSION['codusuario']))//verificar não existe a sessão 
								{
								?>
								<li>
									<span>
										<a class="btn btn-primary2" href="login.php"><font color="#1E90FF"><b>LOGIN</b></a></span></font>
								</li>
								<?php
								}
								else
								{
								?>
								<li>
									<span>
										<a class="btn btn-primary2" href="../admaquarium/controller/sair.php"><font color="#e21414"><b>Sair</b></a></span></font>
								</li>
								<?php } ?>							

							</ul>
						</nav>
						<!-- FIM MENU -->
					</div>
				</div>
			</header>		
		</div>
		<!-- INICIO TITULO PRINCIPAL -->
		<div class="fh5co-parallax" style="background-image: url(images/home-image-4.jpg);" data-stellar-background-ratio="0.4">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
							<h1 class="text-center">Bem vindo <?php echo $_SESSION['nomeusuario']; ?>.</h1>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- FIM TITULO PRINCIPAL  -->

		<!-- INICIO AREA DO ALUNO  -->
		<div id="fh5co-contact">
			<div class="container">
				<form action="#" method="POST" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-7 animate-box">
							<h4 class="section-title">Matrícula: <?php echo $_SESSION['codusuario'];  ?> 
							<h3 class="section-title">Ficha de treino</h3>	

							
					<?php $usu = $usu->RetornarDados($_SESSION['codusuario']); ?>
							

							<a href="images/<?php echo $usu->imgficha;?>" rel="lightbox"><img border="0" src="images/<?php echo $usu->imgficha;?>" style="height: 370px; width: 630px;" /></a>  <br><br>

							
							<div class="row">
								<li>
									<a class="section-title" href="cadastro.php">Atualizar dados</a>
								</li>
								<li>
									<a class="section-title" href="alterarusuesenha.php">Mudar senha e usuário</a>
								</li>
							</div>		
						</div>
						<!-- INICIO CALCULO DE IMC -->
						<div class="col-md-5 animate-box">
						<form name="calc" method="POST" enctype="multipart/form-data" action="" class="form">
							<h3 class="section-title">Cálculo de IMC</h3>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="peso" placeholder="Digite seu peso" size="25"><br><br>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="altura" placeholder="Digite sua altura" size="25"><br><br>
									</div>
								</div>								
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" class="btn btn-primary" name="envia" value="Calcular">
										<input type="reset" class="btn btn-primary" value="Limpar">		
									</div>


									<div id="resultado">									
							        <?php 

							        if(!empty($_POST['peso'])){

									$peso = $_POST['peso'];
									$altura = $_POST['altura'];
									
									$conta1 = $altura*$altura;
									$conta2 = $peso/$conta1;
									
									$resultado = number_format($conta2);

									
									
									
									if(isset($resultado) && $resultado != '0'){;	
										echo '<h3>Seu IMC é:  '.$resultado.' </h3>';									
									}else{
										echo '<h1>Por favor, utilize apenas números!</h1>';	
									}


									if ($resultado < 17) {
										echo "<h3>Condição: Muito abaixo do peso</h3>";
									}
									if (($resultado >= 17) & ($resultado <= 18.49)) {
										echo "<h3>Condição: Abaixo do peso</h3>";
									}
									if (($resultado >= 18.5) & ($resultado <= 24.99)) {
										echo "<h3>Condição: Peso normal</h3>";
									}
									if (($resultado >= 25) & ($resultado <= 29.99)) {
										echo "<h3>Condição: Acima do peso</h3>";
									}
									if (($resultado >= 30) & ($resultado <= 34.99)) {
										echo "<h3>Condição: Obesidade 1</h3>";
									}
									if (($resultado >= 35) & ($resultado <= 39.99)) {
										echo "<h3>Condição: Obesidade 2 (Severa)</h3>";
									}
									if ($resultado > 40) {
										echo "<h3>Condição: Obesidade 3 (Mórbida)</h3>";
									}
									}

									?>
									
								</div>
							</div>
						</div>
						<!-- FIM CALCULO DE IMC -->
					 </div>
				</div>
			</form>
		</div>
	</div>
	<!-- FIM AREA DO ALUNO -->
		
			<footer>
				<!-- INICIO RODAPE -->
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
						<!-- ENVIO DE CONTATO  -->
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
		</footer>
		<!-- FIM RODAPÉ -->
	

	</div>
	</div>
	
	<script src="js/jquery.min.js"></script>
	
	<script src="js/jquery.easing.1.3.js"></script>
	
	<script src="js/bootstrap.min.js"></script>
	
	<script src="js/jquery.waypoints.min.js"></script>
	
	<script src="js/jquery.stellar.min.js"></script>
	
	<script src="js/hoverIntent.js"></script>

	<script src="js/superfish.js"></script>
	
	<script src="js/main.js"></script>

	</body>
</html>

