<?php
  require $_SERVER['DOCUMENT_ROOT']."/concessionaria/models/ConcessionariaModel.php";

  $model = new ConcessionariaModel();

  $concessrionarias = $model->get();

  echo json_encode($concessrionarias);
?>