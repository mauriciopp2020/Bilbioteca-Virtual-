<?php


$nome= $_GET['nome'];
$email= $_GET['email'];
$mensagem= $_GET['mensagem'];
$fb = $_GET['fb'];
include('conexao.php');

// Check connection
if ($conexao->connect_error) {
  die("Connection failed: " . $conexao->connect_error);
}

$sql = "INSERT INTO  Sistema_Cadastrar_Mensagem (nome, email, mensagem,avaliacao) VALUES ('$nome', '$email', '$mensagem','$fb')";

if (mysqli_query($conexao, $sql)) {
      header('Location: index.php');
    exit();
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
}
mysqli_close($conexao);

?>