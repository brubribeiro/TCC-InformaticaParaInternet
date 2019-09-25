<?php
$tipo = "";
if(isset($_SESSION['tipo'])) $tipo = $_SESSION['tipo'];

		if($tipo == "Administrador")
			include_once("../model/aulas.php");//incluindo a classe com os comandos
		else
			include_once("../admaquarium/model/aulas.php");//incluindo a classe com os comandos

		$aul = new Aulas(); //instanciando a classe produto

		if(isset($_REQUEST["acao"])) //irá executar apenas se for preenchida a opção op
		{
			switch($_REQUEST["acao"])//verifica qual é a ação a ser executada
			{
				case "cadastrar_aul":
					//passando as informações do formulário
					$aul->nomeaula = $_POST["nomeaula"];
					$aul->diasemana = $_POST["diasemana"];
					$aul->horario = $_POST["horario"];
					$aul->professor = $_POST["professor"];					
					$aul->imgaula = $_FILES["imgaula"]["name"];

					move_uploaded_file($_FILES["imgaula"]["tmp_name"], "../../siteaquarium/images/".$_FILES["imgaula"]["name"]);
					

					$aul->Cadastrar();//executando a função
					echo "<script>alert('DADOS GRAVADOS COM SUCESSO!');window.location='form_aulas.php';</script>";
					break;

				case "atualizar_aul":
					//passando as informações do formulário
					$aul->nomeaula = $_POST["nomeaula"];
					$aul->diasemana = $_POST["diasemana"];
					$aul->horario = $_POST["horario"];
					$aul->professor = $_POST["professor"];					
					$aul->imgaula = $_FILES["imgaula"]["name"];
					

					$aul->codaula = $_POST["codaula"];

					move_uploaded_file($_FILES["imgaula"]["tmp_name"], "../../siteaquarium/images/".$_FILES["imgaula"]["name"]);

					$aul->Atualizar();//executando a função
					echo "<script>alert('DADOS GRAVADOS COM SUCESSO!');window.location='form_consultaaulas.php';</script>";
					break;

				case "excluir_aul":
					//passando as informações do formulário
					$aul->codaula = $_GET["codaula"];

					$aul->Excluir();//executando a função
					header("location: form_consultaaulas.php ");//direcionando para o formulário
					break;

				case "dados_aul":
					$aul = $aul->RetornarDados($_GET["codaula"]);//executando a função para retornar dados
					break;
			}
		}

		?>