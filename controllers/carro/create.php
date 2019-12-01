<?php

  require $_SERVER['DOCUMENT_ROOT']."/concessionaria/models/CarroModel.php";

  $model = new CarroModel();

  $marca = $_POST["marca"];
  $concessionaria = $_POST["concessionaria"];

  $model->create( $marca, $concessionaria, $_FILES["foto"]);
  header("Location: /concessionaria/listCars.php");

?>