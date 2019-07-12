<?php
include_once('functions.php');

if(!isset($_SESSION)){
    session_start();
}
$user = $_REQUEST['usuario'];
$senha = $_REQUEST['senha'];


$id = login($user,$senha);
if($id['id'] != false){
     $_SESSION['logged'] = true;
     $_SESSION['id'] = $id['id'];
     $_SESSION['nome'] = $id['nome'];
     $_SESSION['email'] = $id['email'];
     $_SESSION['telefone'] = $id['telefone'];
     header("location: ../?page=dashboard");
}else{
     header("location: ../?page=index&action=invalidaccount");
}


?>