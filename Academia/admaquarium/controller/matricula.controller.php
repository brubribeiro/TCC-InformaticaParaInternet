<?php
		include_once("../model/matricula.php");//incluindo a classe com os comandos

		$mat = new matricula(); //instanciando a classe produto

		if(isset($_REQUEST["acao"])) //irá executar apenas se for preenchida a opção op
		{
			switch($_REQUEST["acao"])//verifica qual é a ação a ser executada
			{
				case "cadastrar_mat":
					//passando as informações do formulário
					$mat->codaula = $_POST["codaula"];
					$mat->codcli = $_POST["codcli"];
					$mat->data = $_POST["data"];
					

					$mat->Cadastrar();//executando a função
					echo "<script>alert('DADOS GRAVADOS COM SUCESSO!');window.location='form_matricula.php';</script>";
					break;

				case "atualizar_mat":
					//passando as informações do formulário
					$mat->codaula = $_POST["codaula"];
					$mat->codcli = $_POST["codcli"];
					$mat->data = $_POST["data"];
					

					$mat->codmatricula = $_POST["codmatricula"];

					$mat->Atualizar();//executando a função
					echo "<script>alert('DADOS GRAVADOS COM SUCESSO!');window.location='form_consultamatricula.php';</script>";
					break;

				case "excluir_mat":
					//passando as informações do formulário
					$mat->codmatricula = $_GET["codmatricula"];

					$mat->Excluir();//executando a função
					header("location: form_consultamatricula.php ");//direcionando para o formulário
					break;

				case "dados_mat":
					$mat = $mat->RetornarDados($_GET["codmatricula"]);//executando a função para retornar dados
					break;
			}
		}

		?>