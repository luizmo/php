<?php
  require $_SERVER['DOCUMENT_ROOT']."/concessionaria/database/DataBaseConnection.php";

class ConcessionariaModel{
	private $database;

	function __construct(){
		$this->database = new DataBase();
	}
  
  public function create($nome){
    $conn = $this->database->getConnection();

    $query = $conn->prepare("INSERT INTO concessionaria (nome) VALUES (:nome)");
		$query->bindParam(":nome", $nome);

    $query->execute();
  }
  
	public function get(){
		$conn = $this->database->getConnection();
		$query = $conn->query("SELECT * FROM concessionaria order by nome");
		$concessionarias = $query->fetchAll();
			
		return $concessionarias;
  }
  
}