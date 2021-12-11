<?php
   $id_livro = $_GET['id_livro'];
   include('verifica_login.php');
   include('conexao.php');
   // Check connection
   if ($conexao->connect_error) {
     die("Connection failed: " . $conexao->connect_error);
   }
   
   
   $sql = "delete from Sistema_Cadastrar_livro where id_livro = '$id_livro' ";
   
   
   
   if (mysqli_query($conexao, $sql)) {
         header('Location: listar.php');
   } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
   }
   
   
   
   $conexao->close();
   
   
   
   
   
   ?>