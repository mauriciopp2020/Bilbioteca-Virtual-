<?php
session_start();
include('verifica_login.php');

$id_livro= $_GET['id_livro'];
$titulo = $_GET['titulo'];
$autor = $_GET['autor'];
$ano = $_GET['ano'];

include('conexao.php');

// Check connection
if ($conexao->connect_error) {
  die("Connection failed: " . $conexao->connect_error);
}



$sql = "UPDATE Sistema_Cadastrar_livro set titulo='$titulo', autor='$autor', ano='$ano'  where id_livro = '$id_livro' ";

if (mysqli_query($conexao, $sql )) {
      header('Location: listar.php');
    exit();
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}
$conexao->close();

?>