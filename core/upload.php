<?php
include_once("functions.php");
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
$runs = 0;
if($qtfotos <= 3){
   $runs = $qtfotos;
}else{ $runs = 3; }
for( $i=1 ; $i <= $runs; $i++ ) {
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'][$i];
      echo $file_name;
      $file_size =$_FILES['image']['size'][$i];
      $file_tmp =$_FILES['image']['tmp_name'][$i];
      $file_type=$_FILES['image']['type'][$i];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'][$i])));
      
      $expensions= array("jpeg","jpg","png",".jpg",".png","");
      
      if($file_size > 1024000){
         $errors[]='File size must be excately 10 MB';
      }
         
      if(empty($errors)==true){
         $newfilename = substr(md5(rand()), 0, 10) . '.' .'jpg';
         move_uploaded_file($file_tmp,"../img/".$newfilename);
         $fotos[$i] = $newfilename;
      }else{
         print_r($errors);
      }
   }
}
addanuncio($id,$titulo,$descricao,$fotos[1],$fotos[2],$fotos[3],$categoria,$valor);
?>