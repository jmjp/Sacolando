<?php
include_once('functions.php');

if(!isset($_SESSION)){
    session_start();
}
$user = $_REQUEST['nome'];
$senha = $_REQUEST['senha'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];

echo $telefone;
$ox =register($user,$email,$senha,$telefone);
if($ox == true){
    echo "ok";
}else{ echo "false"; };

?>