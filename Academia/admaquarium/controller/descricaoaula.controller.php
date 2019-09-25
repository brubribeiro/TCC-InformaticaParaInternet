<?php
		$tipo = "";
if(isset($_SESSION['tipo'])) $tipo = $_SESSION['tipo'];

		if($tipo == "Administrador")
			include_once("../model/descricaoaula.php");//incluindo a classe com os comandos
		else
			include_once("../admaquarium/model/descricaoaula.php");//incluindo a classe com os comandos

		$des = new descricaoaula(); //instanciando a classe produto

		if(isset($_REQUEST["acao"])) //irá executar apenas se for preenchida a opção op
		{
			switch($_REQUEST["acao"])//verifica qual é a ação a ser executada
			{
				case "cadastrar_des":
					//passando as informações do formulário
					$des->tituloaula = $_POST["tituloaula"];
					$des->imagemaula = $_FILES["imagemaula"]["name"];
					$des->descricaoaula = $_POST["descricaoaula"];
					
					move_uploaded_file($_FILES["imagemaula"]["tmp_name"], "arquivos/".$_FILES["imagemaula"]["name"]);

					$des->Cadastrar();//executando a função
					echo "<script>alert('DADOS GRAVADOS COM SUCESSO!');window.location='form_descricaoaula.php';</script>";
					break;

				case "atualizar_des":
					//passando as informações do formulário
					$des->tituloaula = $_POST["tituloaula"];
					$des->imagemaula = $_FILES["imagemaula"]["name"];
					$des->descricaoaula = $_POST["descricaoaula"];
					

					$des->coddescricao = $_POST["coddescricao"];

					move_uploaded_file($_FILES["imagemaula"]["tmp_name"], "arquivos/".$_FILES["imagemaula"]["name"]);

					$des->Atualizar();//executando a função
					echo "<script>alert('DADOS GRAVADOS COM SUCESSO!');window.location='form_consultadescricaoaula.php';</script>";
					break;

				case "excluir_des":
					//passando as informações do formulário
					$des->coddescricao = $_GET["coddescricao"];

					$des->Excluir();//executando a função
					header("location: form_consultadescricaoaula.php ");//direcionando para o formulário
					break;

				case "dados_des":
					$des = $des->RetornarDados($_GET["coddescricao"]);//executando a função para retornar dados
					break;
			}
		}

		?>