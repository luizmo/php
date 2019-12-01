<?php
require $_SERVER['DOCUMENT_ROOT']."/concessionaria/models/AluguelModel.php";

$model = new AluguelModel();

$data = $_POST["data"];
$valor = $_POST["valor"];
$carro = $_POST["carro"];
$concessionaria = $_POST["concessionaria"]

$model->create( $data, $valor, $carro, $concessionaria);
header("Location: /concessionaria/listCars.php");
?>