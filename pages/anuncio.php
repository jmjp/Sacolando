<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['logged'])){
    header("location: ../?page=index&action=login");
}
?>
<!DOCTYPE html>
<HTML lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <link href="https://fonts.googleapis.com/css?family=Thasadith" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/theme.css">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Materialize CSS</title>
</head>
<body>
    <!--top-->
    <header>
         <div class="navbar-fixed">
        <nav class="red lighten-2">
        <div class="nav-wrapper" style="height:50px;">
            <a href="?page=index" class="brand-logo center" style="margin-left: 2px;"><i class="material-icons left">shopping_basket</i>SACOLADA</a>
             <?php require("core/menu.php"); ?>
             
        </div>
    </nav>
    </div>
     <!-- Modal Structure -->
  <div id="loginmodal" class="modal center-align">
            <h3 class="red lighten-2 white-text">Faça login em sua conta</h3>
    <div class="modal-content">
      <div class="row">
          <form class="col s12 l6">
              <div class="row">
                  <div class="input-field col s12">
                      <input placeholder="Digite aqui seu usuario" id="usuario" type="text" class="validate">
                      <label for="usuario">Usuario</label>
                  </div>
                  <div class="input-field col s12">
                      <input placeholder="Digite aqui sua senha" id="senha" type="password" class="validate">
                      <label for="senha">Senha</label>
                  </div>
                  <div class="input-button col s12">
                       <button class="btn pink accent-3 waves-effect waves-light" type="submit" name="login">Login
                        <i class="material-icons right">send</i>
                        </button>
                  </div>
              </div>
          </form>
          <div class="col s12 l6">
                  <h6>Crie sua conta</h6>
                  <p>Inicie utilizando uma conta inteiramente gratuita, você não paga nada e vende muito! A hora é agora!</p>
                   <div class="input-button col s12">
                           <a href="#" class="btn blue darken-1 waves-effect waves-light" type="button">Criar conta gratuita
                            <i class="material-icons right">add_circle_outline</i>
                            </a>
                    </div>
          </div>
      </div>
    </div>
  </div>
    </header>  
    <!--conteudo-->
    <main>
        <div class="container-fluid" style="margin-top: 20px">
            <!-- conteudo-->
            <div class="row">
                <div class="section col s12 l6">
                    <h5 class="center-align">Adicionar um novo anúncio</h5>
                    <form action="upload.php" id="form" method="POST" enctype="multipart/form-data">
                    <div class="input-field col s12">
                          <i class="material-icons prefix">title</i>
                          <input name="titulo" id="titulo" type="text" class="validate">
                          <label for="titulo">Titulo</label>
			        </div>
			        <div class="input-field col s12">
                          <i class="material-icons prefix">description</i>
                           <textarea name="descricao" id="descricao" class="materialize-textarea"></textarea>
                          <label for="descricao">Descrição</label>
                    </div>
                    <div class="input-field col s12">
                          <i class="material-icons prefix">attach_money</i>
                          <input name="preco" id="preco" type="number" min="0.00" max="1000000.00" step="0.01">
                          <label for="preco">Preço</label>
                    </div>
                    <div class="input-field col s12">
                            <i class="material-icons prefix">apps</i><label>Categoria</label><br><br>
                             <select id="categoria" name="categoria" class="browser-default">
                            <option value="" disabled selected>Selecione uma categoria</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                    </div>
                     <div class="center col s12">
                            <input type="file" name="image[]" id="my_file" style="display:none" multiple="multiple" accept="image/*">
                            <div id="images-to-upload">
                        	</div>
                            <a class="btn-floating btn-large waves-effect waves-light red right" id="get_file" type="button" style="margin-top:10px"><i class="material-icons">camera_alt</i></a>
                     </div>
                     <div class="center col s12">
                      <br><button class="btn-large waves-effect waves-light" type="submit" id="send" name="action">Publicar
                        <i class="material-icons right">send</i>
                      </button>
                      
                      </div>
                    </form>
                </div>
                 <div class="section col s12 l6 center-align">
                    <h5>Seja um membro do Sacolada</h5><br>
                    <p>Aqui é onde você encontra os mais diversos produtos com o preço de banana e direto com o fornecedor, ainda da pra dar aquela pechinchada e garantir o melhor desconto do mercado!</p>
                </div>
            </div>
        </div>
    </main>
    
    <!--footer-->
    <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">O que é sacolada?</h5>
                <p class="grey-text text-lighten-4">Sacolada é uma ferramenta desenvolvida para você realizar suas vendas e suas compras de forma que seja direta com o fornecedor, qualquer um pode vender ou comprar por aqui, nos deixamos livre o caminho para sua venda ou compra!.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            Sacolada © 2018 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">SAC</a>
            </div>
          </div>
        </footer>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <script>
    $(function(){
        $(".button-collapse").sideNav({edge:'right'});
    });
    </script>
    <script>
        $(function(){
           $(".modal").modal(); 
        });
    </script>

    <script>
        $(function(){
           $(".parallax").parallax(); 
        });
    </script>
    <script>
      $(function(){
        $('.slider').slider({
         height: 200,
         indicators: false,
         transition: 1000
          
        });
      });
    </script>
    <script>
       document.getElementById('get_file').onclick = function() {
       document.getElementById('my_file').click();
      };
    </script>
   <script type="text/javascript">
	$(document).ready(function() {
    if (window.File && window.FileList && window.FileReader) {
    $("#my_file").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<div class=\"col s6 l6\">"
              +"<span class=\"pip\">" +
            "<img class=\"imageThumb circle center-align\" src=\"" + e.target.result + "\" title=\"" + file.name + "\" height=\"80\" width=\"80\"/ style=\"margin:5px 5px 5px 30px;border: 5px solid rgb(229,115,115);\">" +
            "<br/><button type=\"button\" class=\"remove waves-effect waves-light btn red\"><i class=\"material-icons left\">close</i>Remover</span>" +
            "</span>"+"</div>").insertAfter("#my_file");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
          });
          
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});
	</script>
</body>
</html>