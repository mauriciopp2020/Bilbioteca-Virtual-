<?php
session_start();
include('conexao.php');
if (empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Location: login_adm.php');
    exit();
}
$usuario = mysqli_real_escape_string ($conexao,$_POST['usuario']);
$senha = mysqli_real_escape_string ($conexao,$_POST['senha']);
$query = "select id_adm, usuario from login_adm where usuario='{$usuario}' and senha='{$senha}'";


$result = mysqli_query($conexao,$query);
$row = mysqli_num_rows($result);

if($row ==1){
    $_SESSION['usuario']=$usuario;
    header('Location: listar.php');
    exit();

}else{
    header('location: login_adm.php');
    exit();
}