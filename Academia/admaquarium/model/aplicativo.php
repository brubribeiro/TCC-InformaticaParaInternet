<?php
	class aplicativo
	{
		public $codapp;
		public $nomeapp;
	   		public $imgapp;
	   		public $descricaoapp;
	   		public $plataforma;
	   		

		public $con;

		function __CONSTRUCT()//executa o comando automáticamente
		{
			include_once("conexao.php"); //incluir a conexão
			$conexao = new Conexao(); //instancia da conexão
			$this->con = $conexao->Conectar();//executando método para conectar
	    }

		function Cadastrar()
		{
			//passando o comando sql
			$sql = "insert into aplicativo
					(nomeapp,imgapp,descricaoapp,plataforma) 
					values 
					(?,?,?,?)";

			//executando o comando sql e passando os valores
			$this->con->prepare($sql)->execute(array(
			$this->nomeapp,$this->imgapp,$this->descricaoapp,$this->plataforma));
		}

		function Atualizar()
		{
			//passando o comando sql
			$sql = "update aplicativo set
					nomeapp = ?,imgapp = ?,descricaoapp = ?,plataforma = ?
					where codapp = ?";

			//executando o comando sql e passando os valores
			$this->con->prepare($sql)->execute(array(
			$this->nomeapp,$this->imgapp,$this->descricaoapp,$this->plataforma,
			$this->codapp));
		}

		function Excluir()
		{
			//passando o comando sql
			$sql = "delete from aplicativo	
					where codapp = ?";

			//executando o comando sql e passando os valores
			$this->con->prepare($sql)->execute(array($this->codapp));
		}

		function Consultar()
		{
			$dados = array();
			$sql = $this->con->prepare("select * from aplicativo");
			$sql->execute();

			foreach ($sql->fetchAll(PDO::FETCH_OBJ) as $linha)
			{
				$apl = new aplicativo();
				$apl->codapp 		= $linha->codapp;
				$apl->nomeapp 	= $linha->nomeapp;
	   			$apl->imgapp 	= $linha->imgapp;
	   			$apl->descricaoapp 	= $linha->descricaoapp;
	   			$apl->plataforma 	= $linha->plataforma;
	   			
				
				$dados[] = $apl;
			}
			return $dados;

		}

		public function RetornarDados($codapp)
		{
			$sql = $this->con->prepare("select * from aplicativo where codapp = ?");
			          

			$sql->execute(array($codapp));
			$linha = $sql->fetch(PDO::FETCH_OBJ);

			$apl = new aplicativo();
			$apl->codapp 		= $linha->codapp;
			$apl->nomeapp 	= $linha->nomeapp;
	   			$apl->imgapp 	= $linha->imgapp;
	   			$apl->descricaoapp 	= $linha->descricaoapp;
	   			$apl->plataforma 	= $linha->plataforma;
	   			

			return $apl;//objeto preenchido a ser retornado
		}

	}

	?>