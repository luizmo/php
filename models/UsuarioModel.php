<?php
  require $_SERVER['DOCUMENT_ROOT']."/concessionaria/database/DataBaseConnection.php";

class UsuarioModel{
	private $database;

	function __construct(){
		$this->database = new DataBaseConnection();
	}

	public function login($email, $senha){
		$conn = $this->database->getConnection();
		$query = $conn->prepare("SELECT email FROM usuario WHERE email = :email and senha = :senha");
		$encryptPassword = sha1($senha);
		$query->bindParam(":email", $email);
		$query->bindParam(":senha", $encryptPassword);
		$query->execute();
		return $query->fetch();
	}
	
}