<?php
	class matricula
	{
		public $codmatricula;
		public $codaula;
	   		public $codcli;
	   		public $data;
	   		

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
			$sql = "insert into matricula
					(codaula,codcli,data) 
					values 
					(?,?,?)";

			//executando o comando sql e passando os valores
			$this->con->prepare($sql)->execute(array(
			$this->codaula,$this->codcli,$this->data));
		}

		function Atualizar()
		{
			//passando o comando sql
			$sql = "update matricula set
					codaula = ?,codcli = ?,data = ?
					where codmatricula = ?";

			//executando o comando sql e passando os valores
			$this->con->prepare($sql)->execute(array(
			$this->codaula,$this->codcli,$this->data,
			$this->codmatricula));
		}

		function Excluir()
		{
			//passando o comando sql
			$sql = "delete from matricula	
					where codmatricula = ?";

			//executando o comando sql e passando os valores
			$this->con->prepare($sql)->execute(array($this->codmatricula));
		}

		function Consultar()
		{
			$dados = array();
			$sql = $this->con->prepare("select * from matricula");
			$sql->execute();

			foreach ($sql->fetchAll(PDO::FETCH_OBJ) as $linha)
			{
				$mat = new matricula();
				$mat->codmatricula 		= $linha->codmatricula;
				$mat->codaula 	= $linha->codaula;
	   			$mat->codcli 	= $linha->codcli;
	   			$mat->data 	= $linha->data;
	   			
				
				$dados[] = $mat;
			}
			return $dados;

		}

		public function RetornarDados($codmatricula)
		{
			$sql = $this->con->prepare("select * from matricula where codmatricula = ?");
			          

			$sql->execute(array($codmatricula));
			$linha = $sql->fetch(PDO::FETCH_OBJ);

			$mat = new matricula();
			$mat->codmatricula 		= $linha->codmatricula;
			$mat->codaula 	= $linha->codaula;
	   			$mat->codcli 	= $linha->codcli;
	   			$mat->data 	= $linha->data;
	   			

			return $mat;//objeto preenchido a ser retornado
		}

	}

	?>