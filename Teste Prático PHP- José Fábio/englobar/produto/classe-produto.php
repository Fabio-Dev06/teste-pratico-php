<?php

class Produto{

	private $pdo;

	//conexão com o banco de dados
	public function __construct($dbname, $host, $user, $senha){
	
		try{
		$this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $user, $senha);
		} catch(PDOException $e){

			echo "Erro com o Banco e dados<br>" .$e->getMessage();
			exit();

		} catch (Exception $e){
			echo "Erro comum<br>" .$e->getMessage();
		}
	}

	public function cadastrar($nome,$data,$fornecedor,$endereco,$cep,$preco){
	$cmd = $this->pdo->prepare("INSERT INTO produto SET nome = :n, data = :d, fornecedor = :f, endereco = :e, cep = :c, preco = :p");
		$cmd->bindValue(":n", $nome);
		$cmd->bindValue(":d", $data);
		$cmd->bindValue(":f", $fornecedor);
		$cmd->bindValue(":e", $endereco);
		$cmd->bindValue(":c", $cep);
		$cmd->bindValue(":p", $preco);
		$cmd->execute();
	}

	public function listar(){
		$res = array();
		$cmd = $this->pdo->query("SELECT * FROM produto ORDER BY nome");
		$res = $cmd->fetchAll(PDO::FETCH_ASSOC);
		return $res;
	}
}


?>