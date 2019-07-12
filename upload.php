<?php
include_once("core/functions.php");
if(!isset($_SESSION)){
    session_start();
}
$id = $_SESSION['id'];
$titulo = $_REQUEST['titulo'];
$descricao = $_REQUEST['descricao'];
$categoria = $_REQUEST['categoria'];
$preco = $_REQUEST['preco'];
$fotos = array();
$qtfotos = count($_FILES['image']['name']);
$valor = str_replace(",",".",$preco);
if($qtfotos > 3){
  $qtfotos = 0;
}
var_dump($_FILES['image']);
$fotos = array();
for($i = 0; $i < 3; $i++){
      $file_name = $_FILES['image']['name'][$i];
      $file_size =$_FILES['image']['size'][$i];
      $file_tmp =$_FILES['image']['tmp_name'][$i];
      $file_type=$_FILES['image']['type'][$i];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'][$i])));
      
      if(!empty($file_name) || !$file_size > 102400 || $file_type == 'image/*' ){
           $newfilename = substr(md5(rand()), 0, 10) . '.' .$file_ext;
           move_uploaded_file($file_tmp,"img/".$newfilename);
           $fotos[$i] = $newfilename;
           
      }
      
}
addanuncio($id,$titulo,$descricao,$fotos[0],$fotos[1],$fotos[2],$categoria,$valor);
?>