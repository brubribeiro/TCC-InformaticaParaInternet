<?php
	class descricaoaula
	{
		public $coddescricao;
		public $tituloaula;
	   		public $descricaoaula;
	   		public $imagemaula;
	   		

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
			$sql = "insert into descricaoaula
					(tituloaula,descricaoaula,imagemaula) 
					values 
					(?,?,?)";

			//executando o comando sql e passando os valores
			$this->con->prepare($sql)->execute(array(
			$this->tituloaula,$this->descricaoaula,$this->imagemaula));
		}

		function Atualizar()
		{
			//passando o comando sql
			$sql = "update descricaoaula set
					tituloaula = ?,descricaoaula = ?,imagemaula = ?
					where coddescricao = ?";

			//executando o comando sql e passando os valores
			$this->con->prepare($sql)->execute(array(
			$this->tituloaula,$this->descricaoaula,$this->imagemaula,
			$this->coddescricao));
		}

		function Excluir()
		{
			//passando o comando sql
			$sql = "delete from descricaoaula	
					where coddescricao = ?";

			//executando o comando sql e passando os valores
			$this->con->prepare($sql)->execute(array($this->coddescricao));
		}

		function Consultar()
		{
			$dados = array();
			$sql = $this->con->prepare("select * from descricaoaula");
			$sql->execute();

			foreach ($sql->fetchAll(PDO::FETCH_OBJ) as $linha)
			{
				$des = new descricaoaula();
				$des->coddescricao 		= $linha->coddescricao;
				$des->tituloaula 	= $linha->tituloaula;
	   			$des->descricaoaula 	= $linha->descricaoaula;
	   			$des->imagemaula 	= $linha->imagemaula;
	   			
				
				$dados[] = $des;
			}
			return $dados;

		}

		public function RetornarDados($coddescricao)
		{
			$sql = $this->con->prepare("select * from descricaoaula where coddescricao = ?");
			          

			$sql->execute(array($coddescricao));
			$linha = $sql->fetch(PDO::FETCH_OBJ);

			$des = new descricaoaula();
			$des->coddescricao 		= $linha->coddescricao;
			$des->tituloaula 	= $linha->tituloaula;
	   			$des->descricaoaula 	= $linha->descricaoaula;
	   			$des->imagemaula 	= $linha->imagemaula;
	   			

			return $des;//objeto preenchido a ser retornado
		}

	}

	?>