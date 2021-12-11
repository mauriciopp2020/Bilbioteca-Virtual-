<?php
   session_start();
   include('verifica_login.php');
   include('conexao.php');
   $pesquisar = $_POST['pesquisar'];
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Lista</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <style>
      body {
      background-image: url("img/fundo.jpg");
      }
   </style>
   </body>
   <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <div class="container">
            <a class="navbar-brand" href="listar.php"><b>Sistema Biblioteca</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample07">
               <ul class = "navbar-nav mr-auto">
                  <li class = "nav-item active">    
                     <a class="nav-link" href="cadastrar.php"><b> Cadastrar </b></a>
                  </li>
                  <li class = "nav-item">
                  <li class = "nav-item active">    
                     <a class="nav-link" href="listar_mensagem.php"> <b>Mensagens</b></a>
                  </li>
                  <li class = "nav-item">
                  <li class = "nav-item active">    
                     <a class="nav-link" href="sair.php"> <b>Sair </b></a>
                  </li>
            </div>
            </li>
            </ul>
            <form class="form-inline my-2 my-md-0" action ="buscar.php" method ="POST">
               <input class="form-control" type="text" name= "pesquisar" placeholder="Título" aria-label="Pesquisar">
            </form>
         </div>
         </div>
      </nav>
      <div>  
      </div>
      <div class="container">
         <div class="row">
            <div class="col-sm">
            </div>
            <div class="col-sm bg-light">
               <h1><b>Lista de livros</b></h1>
               <br>
               <br>
               <!-- Code by w3codegenerator.com -->
               <table class="table table-striped table-dark">
                  <thead>
                     <tr>
                        <th scope="col"><b>TÍTULO</b></th>
                        <th scope="col"><b>AUTOR</b></th>
                        <th scope="col"><b>ANO</b></th>
                     </tr>
                  </thead>
                  <?php
                     $sql = "SELECT * FROM Sistema_Cadastrar_livro WHERE titulo= '$pesquisar'";
                     $resultado = mysqli_query($conexao,$sql) or die("Erro ao retornar dados");
                     
                     // Obtendo os dados por meio de um loop while
                     while ($registro = mysqli_fetch_array($resultado))
                     {
                     ?>
                  <tr>
                     <td><?php echo $registro ["titulo"] ?></td>
                     <td><?php echo $registro ["autor"] ?></td>
                     <td><? echo $registro ["ano"] ?></td>
                     <td>
                        <a  class="btn btn-success btn-sa" href="editar.php?id_livro=<?php echo $registro ["id_livro"] ?>" role="button">Editar</a> </td>
                        <td>  <a  class="btn btn-danger btn-sm" href="excluir.php?id_livro=<?php echo $registro ["id_livro"] ?>" role="button">Excluir</a>
                     </td>
                  </tr>
                  <?php 
                     echo "</tr>";
                     }
                     mysqli_close($conexao);
                     
                     ?>
               </table>
            </div>
            <div class="col-sm">
            </div>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
</html>