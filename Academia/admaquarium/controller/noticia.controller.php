<?php
		include_once("../model/noticia.php");//incluindo a classe com os comandos

		$not = new Noticia(); //instanciando a classe produto

		if(isset($_REQUEST["acao"])) //irá executar apenas se for preenchida a opção op
		{
			switch($_REQUEST["acao"])//verifica qual é a ação a ser executada
			{
				case "cadastrar_not":
					//passando as informações do formulário
					$not->titulo = $_POST["titulo"];
					$not->data = $_POST["data"];
					$not->texto = $_POST["texto"];
					$not->imagem = $_FILES["imagem"]["name"];
					

					//upload do arquivo/imagem
					move_uploaded_file($_FILES["imagem"]["tmp_name"], "../../siteaquarium/images".$_FILES["imagem"]["name"]);

					$not->Cadastrar();//executando a função
					echo "<script>alert('DADOS GRAVADOS COM SUCESSO!');window.location='form_noticia.php';</script>";
					break;

				case "atualizar_not":
					//passando as informações do formulário
					$not->titulo = $_POST["titulo"];
					$not->data = $_POST["data"];
					$not->texto = $_POST["texto"];
					$not->imagem = $_FILES["imagem"]["name"];

					$not->codnoticia = $_POST["codnoticia"];

									

					//upload do arquivo/imagem
					move_uploaded_file($_FILES["imagem"]["tmp_name"], "../../siteaquarium/images".$_FILES["imagem"]["name"]);

					$not->Atualizar();//executando a função
					echo "<script>alert('DADOS GRAVADOS COM SUCESSO!');window.location='form_consultanoticia.php';</script>";
					break;

				case "excluir_not":
					//passando as informações do formulário
					$not->codnoticia = $_GET["codnoticia"];

					$not->Excluir();//executando a função
					header("location: form_consultanoticia.php ");//direcionando para o formulário
					break;

				case "dados_not":
					$not = $not->RetornarDados($_GET["codnoticia"]);//executando a função para retornar dados
					break;
			}
		}

		?>