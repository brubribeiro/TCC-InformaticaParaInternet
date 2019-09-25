<?php
class Conexao
{
	function Conectar()
	{
		//PDO - PHP Data Objects é uma classe para trabalhar com procedimentos relacionados a banco de dados
		$con = new PDO("mysql:host=localhost;dbname=bdaquarium;port=3306;","root","");
		return $con;
	}
}
?>