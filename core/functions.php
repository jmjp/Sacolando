<?php
include_once("connect.php");

$mysqlc = connectsql();

function runSQL($sql){
   global $mysqlc;
   $run = $mysqlc->query($sql);
   $run->execute();
   $row = $run->fetch(PDO::FETCH_ASSOC);
   return $row;
}

function login($email,$senha){
   global $mysqlc;
   $md5pass = MD5($senha);
   $query = 'select * from users where email = :email and senha = :pass';
   $run = $mysqlc->prepare($query);
   $run->bindParam(':email',$email);
   $run->bindParam(':pass',$md5pass);
   $run->execute();
   if($run->rowCount() > 0){
      $row = $run->fetch(PDO::FETCH_ASSOC);
      return $row;
   }else{
      return false;
   }
}
function register($username,$email,$password, $telefone){
   global $mysqlc;
   $datacriacao = date("Y-m-d H:i:s",strtotime(str_replace('/','-',$datacriacao)));
   $query = 'select * from users where email = :email or telefone = :telefone';
   $run = $mysqlc->prepare($query);
   $run->bindParam(':telefone',$telefone);
   $run->bindParam(':email',$email);
   $run->execute();
   if($run->rowCount() == 0){
      $md5pass = MD5($password);
      $queryregistration = 'insert into users(nome,senha,email,telefone,created)values(:user,:pass,:email,:telefone,:date)';
      $reg = $mysqlc->prepare($queryregistration);
      $reg->bindParam(':user',$username);
      $reg->bindParam(':email',$email);
      $reg->bindParam(':pass',$md5pass);
      $reg->bindParam(':telefone',$telefone);
      $reg->bindParam(':date',$datacriacao);
      $reg->execute();
      return true;
   }else{
      return false;
   }
}
function addanuncio($idUser,$titulo,$descricao,$foto1,$foto2,$foto3,$categoria,$preco){
    global $mysqlc;
    $datacriacao = date("Y-m-d H:i:s",strtotime(str_replace('/','-',$datacriacao)));
    $query = "insert into anuncio(idUser,titulo,descricao,foto1,foto2,foto3,status,criacao,categoriaId,valor)values(:idUser,:titulo,:descricao,:foto1,:foto2,:foto3,:status,:criacao,:categoria,:preco)";
    $run = $mysqlc->prepare($query);
    $run->bindParam(':idUser',$idUser);
    $run->bindParam(':titulo',$titulo);
    $run->bindParam(':descricao',$descricao);
    $run->bindParam(':foto1',$foto1);
    $run->bindParam(':foto2',$foto2);
    $run->bindParam(':foto3',$foto3);
    $run->bindValue(':status',1);
    $run->bindParam(':criacao',$datacriacao);
    $run->bindValue(':categoria',$categoria);
    $run->bindValue(':preco',$preco);
    $run->execute();
    if($run){return true;}else{ return false;};
    
}
function updateanuncio($idanuncio,$titulo,$descricao,$foto1,$foto2,$foto3,$categoria,$preco){
    global $mysqlc;
    $datacriacao = date("Y-m-d H:i:s",strtotime(str_replace('/','-',$datacriacao)));
    //fazer funcao para checar se anuncio é meu ou não
    $query = "update anuncio set titulo = :titulo, descrocao = :descricao, foto1 = :foto1, foto2 = :foto2, foto3 = :foto3, status = :status, categoriaid = :categoria, preco = :preco where id = :idanuncio";
    $run = $mysqlc->prepare($query);
    $run->bindParam(':idanuncio',$idanuncio);
    $run->bindParam(':titulo',$titulo);
    $run->bindParam(':descricao',$descricao);
    $run->bindParam(':foto1',$foto1);
    $run->bindParam(':foto2',$foto2);
    $run->bindParam(':foto3',$foto3);
    $run->bindValue(':status',1);
    $run->bindParam(':criacao',$datacriacao);
    $run->bindValue(':categoria',$categoria);
    $run->bindValue(':preco',$preco);
    $run->execute();
    if($run){return true;}else{ return false;};
    
}


#SELECT anuncio.titulo, anuncio.descricao, anuncio.foto1, anuncio.status, anuncio.criacao, anuncio.categoriaId,anuncio.valor, users.nome, users.telefone FROM anuncio JOIN users ON anuncio.idUser = users.id;
function meusanuncios($idUser){
    global $mysqlc;
    $query = "SELECT anuncio.id, anuncio.titulo, anuncio.descricao, anuncio.foto1, anuncio.status, anuncio.criacao, anuncio.categoriaId,anuncio.valor, users.nome, users.telefone FROM anuncio JOIN users ON anuncio.idUser = users.id WHERE anuncio.idUser = :id;";
    $run = $mysqlc->prepare($query);
    $run->bindParam(':id',$idUser);
    $run->execute();
    $row = $run->fetchAll();
    $count = $run->rowCount();
    if($count > 0){
     for($i = 0; $i < $count; $i++){
       switch($row[$i]['status']){
          case 1:
             $status = "pendente";
             $dot = '<span class="dot-laranja tooltipped" data-position="bottom" data-tooltip="pendente"></span>';
             break;
          case 2:
             $status = "ativo";
             $dot = '<span class="dot-verde tooltipped" data-position="bottom" data-tooltip="ativo"></span>';
             break;
          case 3:
             $status = "bloqueado";
             $dot = '<span class="dot-vermelho tooltipped" data-position="bottom" data-tooltip="bloqueado"></span>';
             break;
       }
      echo '<li class="collection-item avatar">
                              <img src="../img/'.$row[$i]['foto1'].'" height="100" width="100" class="circle" style="border: 3px solid rgb(229,115,115);">
                              <span class="title"  style="text-transform: uppercase;">'.$row[$i]['titulo'].'</span>
                              <p>Descrição: '.$row[$i]['descricao'].'<br>
                                 Valor: R$ '.number_format($row[$i]['valor'],2,",",".").'<br>
                                 Status: '.$status.' '.$dot.'<br>
                              </p>
                              <a href="?page=dashboard&action=edit&id='.$row[$i]['id'].'" class="secondary-content tooltipped" data-position="bottom" data-tooltip="editar anúncio" style="margin-right: 20px"><i class="material-icons">create</i></a>
                              <a href="?page=dashboard&action=delet&id='.$row[$i]['id'].'" class="secondary-content tooltipped" data-position="bottom" data-tooltip="excluir anúncio" ><i class="material-icons">delete</i></a>
                            </li>';
    }
    
}else{
   echo '<h5 class="center">Você ainda não possui nenhum anúncio ativo</h5>';
   }
}


function infoanuncio($idUser,$anuncioid){
    global $mysqlc;
    $query = "SELECT anuncio.titulo, anuncio.descricao, anuncio.foto1,anuncio.foto2,anuncio.foto3, anuncio.status, anuncio.criacao, anuncio.categoriaId,anuncio.valor, users.id, categoria.nome FROM anuncio JOIN users ON anuncio.idUser = users.id JOIN categoria ON anuncio.categoriaId = categoria.id WHERE anuncio.id = :id;";
    $run = $mysqlc->prepare($query);
    $run->bindParam(':id',$anuncioid);
    $run->execute();
    $row = $run->fetch(PDO::FETCH_ASSOC);
    $count = $run->rowCount();
    if($count > 0){
        if($idUser == $row['id']){
           return $row;
        }
     }
    else{
   echo '<h5 class="center">Não existe este anúncio</h5>';
   }
}
?> 