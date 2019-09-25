<?php
	class Noticia
	{
		public $codnoticia;
		public $titulo;
   		public $data;
   		public $texto;
   		public $imagem;
	   		

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
			$sql = "insert into noticia
					(titulo,data,texto,imagem) 
					values 
					(?,?,?,?)";

			//executando o comando sql e passando os valores
			$this->con->prepare($sql)->execute(array(
			$this->titulo,$this->data,$this->texto,$this->imagem));
		}

		function Atualizar()
		{
			//passando o comando sql
			$sql = "update noticia set
					titulo = ?,data = ?,texto = ?,imagem = ?
					where codnoticia = ?";

			//executando o comando sql e passando os valores
			$this->con->prepare($sql)->execute(array(
			$this->titulo,$this->data,$this->texto,$this->imagem,
			$this->codnoticia));
		}

		function Excluir()
		{
			//passando o comando sql
			$sql = "delete from noticia	
					where codnoticia = ?";

			//executando o comando sql e passando os valores
			$this->con->prepare($sql)->execute(array($this->codnoticia));
		}

		function Consultar()
		{
			$dados = array();
			$sql = $this->con->prepare("select * from noticia");
			$sql->execute();

			foreach ($sql->fetchAll(PDO::FETCH_OBJ) as $linha)
			{
				$not = new Noticia();
				$not->codnoticia 		= $linha->codnoticia;
				$not->titulo 	= $linha->titulo;
	   			$not->data 	= $linha->data;
	   			$not->texto 	= $linha->texto;
	   			$not->imagem 	= $linha->imagem;

	   			
				
				$dados[] = $not;
			}
			return $dados;

		}



		public function RetornarDados($codnoticia)
		{
			$sql = $this->con->prepare("select * from noticia where codnoticia = ?");
			          

			$sql->execute(array($codnoticia));
			$linha = $sql->fetch(PDO::FETCH_OBJ);

			$not = new Noticia();
			$not->codnoticia 		= $linha->codnoticia;
			$not->titulo 	= $linha->titulo;
   			$not->data 	= $linha->data;
   			$not->texto 	= $linha->texto;
   			$not->imagem 	= $linha->imagem;
	   			

			return $not;//objeto preenchido a ser retornado
		}

	}

	?>