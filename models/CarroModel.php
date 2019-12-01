<?php
  require $_SERVER['DOCUMENT_ROOT']."/concessionaria/database/DataBaseConnection.php";

  class CarroModel{
    private $database;

    function __construct(){
      $this->database = new DataBase();
    }
    
    public function create($nome, $concessionaria, $arquivo){
      $dir =  $_SERVER['DOCUMENT_ROOT']."//concessionaria/uploads//";

      if(!file_exists($dir)){
        mkdir($dir);
      } 
      
      $extension = pathinfo($arquivo["name"], PATHINFO_EXTENSION);
      $namePhoto = sha1(uniqid("")) . "." . $extension;

      move_uploaded_file($arquivo["tmp_name"], $dir."/".$namePhoto);
      
      $conn = $this->database->getConnection();
      
      $query = $conn->prepare("INSERT INTO carro (nome, concessionaria, foto) VALUES (:nome, :concessionaria, :foto)");
      $query->bindParam(":nome", $nome);
      $query->bindParam(":concessionaria", $concessionaria);
      $query->bindParam(":foto", $nameFoto);	
      $query->execute();
    }	
  }
?>