<?php
	class Aulas
	{
		public $codaula;
		public $nomeaula;
	   		public $diasemana;
	   		public $horario;
	   		public $professor;	   		
	   		public $imgaula;
	   		

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
			$sql = "insert into aulas
					(nomeaula,diasemana,horario,professor,imgaula) 
					values 
					(?,?,?,?,?)";

			//executando o comando sql e passando os valores
			$this->con->prepare($sql)->execute(array(
			$this->nomeaula,$this->diasemana,$this->horario,$this->professor,$this->imgaula));
		}

		function Atualizar()
		{
			//passando o comando sql
			$sql = "update aulas set
					nomeaula = ?,diasemana = ?,horario = ?,professor = ?, imgaula = ?
					where codaula = ?";

			//executando o comando sql e passando os valores
		$this->con->prepare($sql)->execute(array(
		$this->nomeaula,$this->diasemana,$this->horario,$this->professor,$this->imgaula,
		$this->codaula));
		}

		function Excluir()
		{
			//passando o comando sql
			$sql = "delete from aulas	
					where codaula = ?";

			//executando o comando sql e passando os valores
			$this->con->prepare($sql)->execute(array($this->codaula));
		}

		function Consultar()
		{
			$dados = array();
			$sql = $this->con->prepare("select * from aulas");
			$sql->execute();

			foreach ($sql->fetchAll(PDO::FETCH_OBJ) as $linha)
			{
				$aul = new Aulas();
				$aul->codaula 		= $linha->codaula;
				$aul->nomeaula 	= $linha->nomeaula;
	   			$aul->diasemana 	= $linha->diasemana;
	   			$aul->horario 	= $linha->horario;
	   			$aul->professor 	= $linha->professor;
	   			$aul->imgaula = $linha->imgaula;
	   			
				
				$dados[] = $aul;
			}
			return $dados;

		}

		function ConsultarPorSemana($diasemana)
		{
			$dados = array();
			$sql = $this->con->prepare("select * from aulas where diasemana = ?");
			$sql->execute(array($diasemana));

			foreach ($sql->fetchAll(PDO::FETCH_OBJ) as $linha)
			{
				$aul = new Aulas();
				$aul->codaula 		= $linha->codaula;
				$aul->nomeaula 	= $linha->nomeaula;
	   			$aul->diasemana 	= $linha->diasemana;
	   			$aul->horario 	= $linha->horario;
	   			$aul->professor 	= $linha->professor;
	   			$aul->imgaula = $linha->imgaula;
	   			
				
				$dados[] = $aul;
			}
			return $dados;

		}

		public function RetornarDados($codaula)
		{
			$sql = $this->con->prepare("select * from aulas where codaula = ?");
			          

			$sql->execute(array($codaula));
			$linha = $sql->fetch(PDO::FETCH_OBJ);

			$aul = new Aulas();
			$aul->codaula 		= $linha->codaula;
			$aul->nomeaula 	= $linha->nomeaula;
	   			$aul->diasemana 	= $linha->diasemana;
	   			$aul->horario 	= $linha->horario;
	   			$aul->professor 	= $linha->professor;
	   			$aul->imgaula = $linha->imgaula;
	   			

			return $aul;//objeto preenchido a ser retornado
		}

	}

	?>