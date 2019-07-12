
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
          <form class="col s6">
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
          <div class="col s6">
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
        
        <div class="container-fluid">
            <!-- conteudo-->
            <div class="row" style="margin-top: 10px">
                <h5 class="center-align">PRODUTO NOME</h5>
                <div class="section col l8 s12">
                  <!--foto produto-->
                  <div class="slider">
                    <ul class="slides">
                      <li>
                        <img src="http://lorempixel.com/580/250/nature/1"> <!-- random image -->
                      </li>
                      <li>
                        <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
                      </li>
                      <li>
                        <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="section col l4 center">
                     <h5 class="center-align">INFORMAÇÕES</h5>
                      <ul class="collection">
                          <li class="collection-item"><i class="material-icons">local_offer</i>Descrição: PRODUTO NOME 01 BLA BLA BLA</li>
                          <li class="collection-item"><i class="material-icons">attach_money</i>Preço: R$2,50</li>
                          <li class="collection-item"><i class="material-icons">phone</i>Contato: (43)3258-6542</li>
                          <li class="collection-item"><i class=" material-icons">person_outline</i>Vendedor: Izais Mlk Doido</li>
                          <li class="collection-item"><a class="waves-effect waves-light btn-large red accent-3"><i class="material-icons left">mail_outline</i>Enviar Mensagem</a></li>
                      </ul>
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
         height: 400,
         indicators: true,
         transition: 500
          
        });
      });
    </script>
</body>
</html>