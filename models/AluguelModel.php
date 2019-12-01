<?php
  require $_SERVER['DOCUMENT_ROOT']."/concessionaria/database/DataBaseConnection.php";

class AluguelModel{
	private $database;

	function __construct(){
		$this->database = new DataBase();
	}
	
	public function create($dateReserva, $valor, $carro, $concessionaria){
		$conn = $this->database->getConnection();
	
		$query = $conn->prepare("INSERT INTO aluguel (valor, dataReserva, carro, concessionaria ) VALUES (:valor, :data, :carro, :concessionaria)");
		$query->bindParam(":valor", $valor);
		$query->bindParam(":data", $dateReserva);
		$query->bindParam(":carro", $carro);
		$query->bindParam(":concessionaria", $concessionaria);
	
		$query->execute();
	}
}