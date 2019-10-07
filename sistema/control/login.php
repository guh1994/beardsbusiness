<?php 

session_start();

require_once '../dal/LoginDAL.php';

$user_Request = $_POST['usuario'];
$pass_Request = $_POST['senha'];

$usuario = new Login();

$usuario->setLogin($user_Request);
$usuario->setSenha($pass_Request);


$loginUser = LoginDAL::login($usuario);


if($loginUser == true){
  
  $_SESSION['user'] = $usuario->getLogin();  
  
  echo $_SESSION['user'];     
    
}
else{
    
    echo "User Not Found";
}
?>