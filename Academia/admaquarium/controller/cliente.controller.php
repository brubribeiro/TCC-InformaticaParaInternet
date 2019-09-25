<?php
		$tipo = "";
if(isset($_SESSION['tipo'])) $tipo = $_SESSION['tipo'];

		if($tipo == "Administrador")
			include_once("../model/cliente.php");//incluindo a classe com os comandos
		else
			include_once("../admaquarium/model/cliente.php");//incluindo a classe com os comandos

		$cli = new Cliente(); //instanciando a classe produto

		if(isset($_REQUEST["acao"])) //irá executar apenas se for preenchida a opção op
		{
			switch($_REQUEST["acao"])//verifica qual é a ação a ser executada
			{
				case "cadastrar_cli":
					//passando as informações do formulário
					$cli->nome = $_POST["nome"];
					$cli->email = $_POST["email"];
					$cli->senha = $_POST["senha"];
					$cli->telefone = $_POST["telefone"];
					$cli->celular = $_POST["celular"];
					

					$cli->Cadastrar();//executando a função
					echo "<script>alert('DADOS GRAVADOS COM SUCESSO!');window.location='../siteaquarium/cadastro.php';</script>";
					break;

				case "atualizar_cli":
					//passando as informações do formulário
					$cli->nome = $_POST["nome"];
					$cli->email = $_POST["email"];
					$cli->senha = $_POST["senha"];
					$cli->telefone = $_POST["telefone"];
					$cli->celular = $_POST["celular"];
					

					$cli->codcli = $_POST["codcli"];

					$cli->Atualizar();//executando a função
					echo "<script>alert('DADOS GRAVADOS COM SUCESSO!');window.location='form_consultacliente.php';</script>";
					break;

				case "excluir_cli":
					//passando as informações do formulário
					$cli->codcli = $_GET["codcli"];

					$cli->Excluir();//executando a função
					header("location: form_consultacliente.php ");//direcionando para o formulário
					break;

				case "dados_cli":
					$cli = $cli->RetornarDados($_GET["codcli"]);//executando a função para retornar dados
					break;
			}
		}

		?>