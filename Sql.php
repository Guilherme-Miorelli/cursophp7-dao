<?php

class Sql extends PDO {

	private $conn;

	public function __construct(){

		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

	}
//essa função tem objetivo de definir os valores dos parâmetros que passamos para a query,Esse método realiza um laço de repetição, chamando o método setParam() , no singular, que define um parâmetro por vez, com o foreach() , é possível definir vários parâmetros, um método usa o outro para definir um parâmetro de cada vez
	private function setParams($statment, $parameters = array()){//busca varios dados no bd

		foreach ($parameters as $key => $value) {
			
			$this->setParam($key, $value);

		}

	}

	private function setParam($statment, $key, $value){//busca somente um dado no BD

		$statment->bindParam($key, $value);

	}
//O método query() realiza a preparação do script do MySQL, define seus parâmetros e executa o comando. Em poucas palavras: ele executa a query no Banco de Dados
	public function query($rawQuery, $params = array()){//

		$stmt = $this->conn->prepare($rawQuery);//stmt recebe as querys

		$this->setParams($stmt, $params);

		$stmt->execute();//execute tem o próprio retorno

		return $stmt;//aqui retorna o valor para o objeto

	}
//o método select() , que faz a mesma coisa que o query() , mas retorna algo, com a linha return $stmt->fetchAll(PDO::FETCH_ASSOC);
	public function select($rawQuery, $params = array()):array{

		$stmt = $this->query($rawQuery, $params);


		return $stmt->fetchAll(PDO::FETCH_ASSOC);

	}

}

?>