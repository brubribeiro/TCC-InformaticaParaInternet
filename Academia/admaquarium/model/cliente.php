<?php
	class Cliente
	{
		public $codcli;
		public $nome;
	   		public $email;
	   		public $senha;
	   		public $telefone;
	   		public $celular;
	   		

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
			$sql = "insert into cliente
					(nome,email,senha,telefone,celular) 
					values 
					(?,?,?,?,?)";

			//executando o comando sql e passando os valores
			$this->con->prepare($sql)->execute(array(
			$this->nome,$this->email,$this->senha,$this->telefone,$this->celular));
		}

		function Atualizar()
		{
			//passando o comando sql
			$sql = "update cliente set
					nome = ?,email = ?,senha = ?,telefone = ?,celular = ?
					where codcli = ?";

			//executando o comando sql e passando os valores
			$this->con->prepare($sql)->execute(array(
			$this->nome,$this->email,$this->senha,$this->telefone,$this->celular,
			$this->codcli));
		}

		function Excluir()
		{
			//passando o comando sql
			$sql = "delete from cliente	
					where codcli = ?";

			//executando o comando sql e passando os valores
			$this->con->prepare($sql)->execute(array($this->codcli));
		}

		function Consultar()
		{
			$dados = array();
			$sql = $this->con->prepare("select * from cliente");
			$sql->execute();

			foreach ($sql->fetchAll(PDO::FETCH_OBJ) as $linha)
			{
				$cli = new Cliente();
				$cli->codcli 		= $linha->codcli;
				$cli->nome 	= $linha->nome;
	   			$cli->email 	= $linha->email;
	   			$cli->senha 	= $linha->senha;
	   			$cli->telefone 	= $linha->telefone;
	   			$cli->celular 	= $linha->celular;
	   			
				
				$dados[] = $cli;
			}
			return $dados;

		}

		public function RetornarDados($codcli)
		{
			$sql = $this->con->prepare("select * from cliente where codcli = ?");
			          

			$sql->execute(array($codcli));
			$linha = $sql->fetch(PDO::FETCH_OBJ);

			$cli = new Cliente();
			$cli->codcli 	= $linha->codcli;
			$cli->nome 		= $linha->nome;
	   		$cli->email 	= $linha->email;
	   		$cli->senha 	= $linha->senha;
	   		$cli->telefone 	= $linha->telefone;
	   		$cli->celular 	= $linha->celular;
	   			

			return $cli;//objeto preenchido a ser retornado
		}

	}

	?>