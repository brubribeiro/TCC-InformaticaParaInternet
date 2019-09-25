<?php
$tipo = "";
if(isset($_SESSION['tipo'])) $tipo = $_SESSION['tipo'];

		if($tipo == "Administrador")
			include_once("../model/galeria.php");//incluindo a classe com os comandos
		else
			include_once("../admaquarium/model/galeria.php");//incluindo a classe com os comandos
		

		$gal = new galeria(); //instanciando a classe produto

		if(isset($_REQUEST["acao"])) //irá executar apenas se for preenchida a opção op
		{
			switch($_REQUEST["acao"])//verifica qual é a ação a ser executada
			{
				case "cadastrar_gal":
					//passando as informações do formulário
					$gal->nomeimg = $_POST["nomeimg"];
					$gal->imgaleria = $_FILES["imgaleria"]["name"];
					$gal->dataimg = $_POST["dataimg"];
					
					//upload do arquivo/imagem
					move_uploaded_file($_FILES["imgaleria"]["tmp_name"], "../../siteaquarium/images/".$_FILES["imgaleria"]["name"]);

					$gal->Cadastrar();//executando a função
					echo "<script>alert('DADOS GRAVADOS COM SUCESSO!');window.location='form_galeria.php';</script>";
					break;

				case "atualizar_gal":
					//passando as informações do formulário
					$gal->nomeimg = $_POST["nomeimg"];
					$gal->imgaleria = $_FILES["imgaleria"]["name"];
					$gal->dataimg = $_POST["dataimg"];
					

					$gal->codgaleria = $_POST["codgaleria"];

					move_uploaded_file($_FILES["imgaleria"]["tmp_name"], "../../siteaquarium/images/".$_FILES["imgaleria"]["name"]);

					$gal->Atualizar();//executando a função
					echo "<script>alert('DADOS GRAVADOS COM SUCESSO!');window.location='form_consultagaleria.php';</script>";
					break;

				case "excluir_gal":
					//passando as informações do formulário
					$gal->codgaleria = $_GET["codgaleria"];

					$gal->Excluir();//executando a função
					header("location: form_consultagaleria.php ");//direcionando para o formulário
					break;

				case "dados_gal":
					$gal = $gal->RetornarDados($_GET["codgaleria"]);//executando a função para retornar dados
					break;
			}
		}

		?>