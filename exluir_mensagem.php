<?php
   $id_mensagem= $_GET['id_mensagem'];
   include('conexao.php');
   
   // Check connection
   if ($conexao->connect_error) {
     die("Connection failed: " . $conexao->connect_error);
   }
   
   
   $sql = "delete from Sistema_Cadastrar_Mensagem where id_mensagem = '$id_mensagem' ";
   
   
   
   if (mysqli_query($conexao, $sql)) {
         header('Location: listar_mensagem.php');
   } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
   }
   
   
   
   $conexao->close();
   
   
   
   
   
   ?>