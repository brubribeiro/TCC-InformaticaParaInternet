<?php
	class galeria
	{
		public $codgaleria;
		public $nomeimg;
	   		public $imgaleria;
	   		public $dataimg;
	   		

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
			$sql = "insert into galeria
					(nomeimg,imgaleria,dataimg) 
					values 
					(?,?,?)";

			//executando o comando sql e passando os valores
			$this->con->prepare($sql)->execute(array(
			$this->nomeimg,$this->imgaleria,$this->dataimg));
		}

		function Atualizar()
		{
			//passando o comando sql
			$sql = "update galeria set
					nomeimg = ?,imgaleria = ?,dataimg = ?
					where codgaleria = ?";

			//executando o comando sql e passando os valores
			$this->con->prepare($sql)->execute(array(
			$this->nomeimg,$this->imgaleria,$this->dataimg,
			$this->codgaleria));
		}

		function Excluir()
		{
			//passando o comando sql
			$sql = "delete from galeria	
					where codgaleria = ?";

			//executando o comando sql e passando os valores
			$this->con->prepare($sql)->execute(array($this->codgaleria));
		}

		function Consultar()
		{
			$dados = array();
			$sql = $this->con->prepare("select * from galeria");
			$sql->execute();

			foreach ($sql->fetchAll(PDO::FETCH_OBJ) as $linha)
			{
				$gal = new galeria();
				$gal->codgaleria 		= $linha->codgaleria;
				$gal->nomeimg 	= $linha->nomeimg;
	   			$gal->imgaleria 	= $linha->imgaleria;
	   			$gal->dataimg 	= $linha->dataimg;
	   			
				
				$dados[] = $gal;
			}
			return $dados;

		}

		public function RetornarDados($codgaleria)
		{
			$sql = $this->con->prepare("select * from galeria where codgaleria = ?");
			          

			$sql->execute(array($codgaleria));
			$linha = $sql->fetch(PDO::FETCH_OBJ);

			$gal = new galeria();
			$gal->codgaleria 		= $linha->codgaleria;
			$gal->nomeimg 	= $linha->nomeimg;
	   			$gal->imgaleria 	= $linha->imgaleria;
	   			$gal->dataimg 	= $linha->dataimg;
	   			

			return $gal;//objeto preenchido a ser retornado
		}

	}

	?>