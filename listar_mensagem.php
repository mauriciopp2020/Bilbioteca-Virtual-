<?php
   session_start();
   include('verifica_login.php');
   include('conexao.php');
 
   // Verifique a conexão
   if($conexao-> connect_error) {
     die ("Conexão falhou:". $conexao-> connect_error);
   }
   $sql = "SELECT * FROM Sistema_Cadastrar_Mensagem";
   $result = $conexao-> query ($sql);
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Mensagens</title>
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
                  <li class = "nav-item">
                  <li class = "nav-item active">    
                     <a class="nav-link" href="sair.php"> <b>Sair</b> </a>
                  </li>
                  </li>
            </div>
            </li>
            </ul>
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
               <h1><b>Mensagens</b></h1>
               <br>
               <br>
               <!-- Code by w3codegenerator.com -->
               <table class="table table-striped table-dark">
                  <thead>
                     <tr>
                        <th scope="col">NOME</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">MENSAGEM</th>
                        <th scope="col">ESTRELA</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                        if ($result->num_rows > 0) {
                          // output data of each row
                            while($row = $result->fetch_assoc()) {
                        ?>
                     <tr>
                     <td ><?php echo $row["nome"] ?> </td>
                        <td><?php echo $row["email"] ?></td>
                        <td ><?php echo $row["mensagem"] ?></td>
                        <td  ><?php echo $row["avaliacao"] ?></td>
                        <td>  
                           <a  class="btn btn-danger btn-sm" href="exluir_mensagem.php?id_mensagem=<?php echo $row["id_mensagem"] ?>" role="button">Excluir</a>
                        </td>
                     </tr>
                     <?php
                        }
                        } else {
                        echo "Nenhuma Mensagem";
                        }
                        
                        ?>
                  </tbody>
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