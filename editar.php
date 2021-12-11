<?php
session_start();
include('verifica_login.php');
$id_livro= $_GET['id_livro'];
include('conexao.php');

// Check connection
if($conexao-> connect_error) {
  die ("Conexão falhou:". $conexao-> connect_error);
}
$sql = "SELECT * FROM Sistema_Cadastrar_livro WHERE id_livro = '$id_livro'";
$result = $conexao-> query ($sql);
$row = mysqli_fetch_assoc($result);
?>



<!------ Include the above in your HEAD tag ---------->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">

	<title>Editar Livro</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css"  href="css/style.css" >
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand"  href=""> Sistema Biblioteca </a>
         <button class="navbar-toggler"  data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav mr-auto">
             
            <li class="nav-item active">    
            <a class="nav-link" href="listar.php">Listar</a>
            </li>
            <li class="nav-item">
             <li class="nav-item active">    
            <a class="nav-link" href="sair.php">Sair</a>
            </li>
            </li>
            
            
            
           
              </div>
            </li>
          </ul>
         
        </div>
      </div>
    </nav>

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Editar Livro</h3>
			</div>
			<div class="card-body">
                            
				   <form action="atualizar.php" method="get">
                                        <div class="input-group form-group row">
						<div class="input-group-prepend">
							
						</div>
						<input  id="id_livro" name="id_livro"  type="hidden" class="form-control" placeholder="Titulo"  value="<?php echo $row['id_livro']?>">
						
					</div>
					<div class="input-group form-group row">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user-edit"></i></span>
						</div>
						<input  id="titulo" name="titulo"  type="text" class="form-control" placeholder="Titulo"  value="<?php echo $row['titulo']?>">
						
					</div>
					<div class="input-group form-group row">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fas fa-user-edit"></i></span>
						</div>
						<input  id="autor" name="autor"  type="text" class="form-control" placeholder="Autor"   value="<?php echo $row['autor']?>">
					</div>
                                         <div class="input-group form-group row">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user-edit"></i></span>
						</div>
						<input  id="ano" name="ano"  type="text" class="form-control" placeholder="Ano"   value="<?php echo $row['ano']?>">
					</div>
                                     
					
					<div class="form-group row">
						<input type="submit" value="Salvar" class="btn float-right login_btn">
					</div>
                                        
                                         
				</form>
			</div>
			
		</div>
	</div>
</div>
</body>
</html>