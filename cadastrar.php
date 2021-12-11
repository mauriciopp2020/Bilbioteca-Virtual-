<?php
session_start();
include('verifica_login.php');
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

	<title>Cadastrar Livro</title>
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
				<h3>Cadastrar Livro</h3>
			</div>
			<div class="card-body">
                            
				<form  action = "salvar.php" method = "GET">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-pen-alt"></i></span>
						</div>
						<input  id="titulo" name="titulo"  type="text" class="form-control" placeholder="Titulo">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input  id="autor" name="autor"  type="text" class="form-control" placeholder="Autor">
					</div>
                                         <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
						</div>
						<input  id="ano" name="ano"  type="text" class="form-control" placeholder="Ano">
					</div>
                                     
					
					<div class="form-group">

						<input type="submit" value="Salvar" class="btn float-right login_btn">
					</div>
                                        
                                         
				</form>
			</div>
			
		</div>
	</div>
</div>
</body>
</html>