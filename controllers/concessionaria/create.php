<?php
  require $_SERVER['DOCUMENT_ROOT']."/concessionaria/models/ConcessionariaModel.php";

  $model = new ConcessionariaModel();

  $nome = $_POST["nome"];

  $model->inserir($nome);
  echo "Inserido com sucesso";
?>
