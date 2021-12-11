<?php
   session_start();
   include('verifica_login.php');
   
   $titulo = $_GET['titulo'];
   $autor = $_GET['autor'];
   $ano = $_GET['ano'];
   
   include('conexao.php');
   
   // Check connection
   if ($conexao->connect_error) {
     die("Connection failed: " . $conexao->connect_error);
   }
   
   $sql = "INSERT INTO Sistema_Cadastrar_livro (titulo, autor, ano) VALUES ('$titulo', '$autor', '$ano')";
   
   if (mysqli_query($conexao, $sql)) {
         header('Location: cadastrar.php');
       exit();
   } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
   }
   mysqli_close($conexao);
   
   ?>