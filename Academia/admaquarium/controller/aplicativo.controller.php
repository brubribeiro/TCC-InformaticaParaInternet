<?php
$tipo = "";
if(isset($_SESSION['tipo'])) $tipo = $_SESSION['tipo'];

		if($tipo == "Administrador")
			include_once("../model/aplicativo.php");//incluindo a classe com os comandos
		else
			include_once("../admaquarium/model/aplicativo.php");//incluindo a classe com os comandos
		

		$apl = new aplicativo(); //instanciando a classe produto

		if(isset($_REQUEST["acao"])) //irá executar apenas se for preenchida a opção op
		{
			switch($_REQUEST["acao"])//verifica qual é a ação a ser executada
			{
				case "cadastrar_apl":
					//passando as informações do formulário
					$apl->nomeapp = $_POST["nomeapp"];
					$apl->imgapp = $_FILES["imgapp"]["name"];
					$apl->descricaoapp = $_POST["descricaoapp"];
					$apl->plataforma = $_POST["plataforma"];

					move_uploaded_file($_FILES["imgapp"]["tmp_name"], "../../siteaquarium/images/".$_FILES["imgapp"]["name"]);
					

					$apl->Cadastrar();//executando a função
					echo "<script>alert('DADOS GRAVADOS COM SUCESSO!');window.location='form_aplicativo.php';</script>";
					break;

				case "atualizar_apl":
					//passando as informações do formulário
					$apl->nomeapp = $_POST["nomeapp"];
					$apl->imgapp = $_FILES["imgapp"]["name"];
					$apl->descricaoapp = $_POST["descricaoapp"];
					$apl->plataforma = $_POST["plataforma"];

					move_uploaded_file($_FILES["imgapp"]["tmp_name"], "../../siteaquarium/images/".$_FILES["imgapp"]["name"]);
					

					$apl->codapp = $_POST["codapp"];

					$apl->Atualizar();//executando a função
					echo "<script>alert('DADOS GRAVADOS COM SUCESSO!');window.location='form_consultaaplicativo.php';</script>";
					break;

				case "excluir_apl":
					//passando as informações do formulário
					$apl->codapp = $_GET["codapp"];

					$apl->Excluir();//executando a função
					header("location: form_consultaaplicativo.php ");//direcionando para o formulário
					break;

				case "dados_apl":
					$apl = $apl->RetornarDados($_GET["codapp"]);//executando a função para retornar dados
					break;
			}
		}

		?>