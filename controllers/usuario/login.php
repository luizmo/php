<?php
  require $_SERVER['DOCUMENT_ROOT']."/concessionaria/models/UsuarioModel.php";

  $model = new UsuarioModel();

  $email = $_POST["email"];
  $senha = $_POST["senha"];

  $usuario = $model->login($email, $senha);

  if($usuario == false){
    echo "Deu falha hein";
  }else{
    session_start();
    $_SESSION["email"] = $usuario["email"];
    header("Location: /concessionaria/index.php");
  }
?>