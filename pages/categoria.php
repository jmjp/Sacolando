
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
                <div class="slider">
                      <ul class="slides">
                        <li>
                          <img src="https://images.g2a.com/newlayout/470x470/1x1x0/10fd86693819/590db0d4ae653a79385ab8cb"> <!-- random image -->
                          <div class="caption center-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                          </div>
                        </li>
                        <li>
                          <img src="http://lorempixel.com/580/250/nature/2"> <!-- random image -->
                          <div class="caption left-align">
                            <h3>Left Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                          </div>
                        </li>
                        <li>
                          <img src="http://lorempixel.com/580/250/nature/3"> <!-- random image -->
                          <div class="caption right-align">
                            <h3>Right Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                          </div>
                        </li>
                        <li>
                          <img src="http://lorempixel.com/580/250/nature/4"> <!-- random image -->
                          <div class="caption center-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                          </div>
                        </li>
                      </ul>
                </div>
            <!-- conteudo-->
            <div class="row">
                <div class="section col l3 s12">
                   <ul class="collection with-header">
                        <li class="collection-header center-align"><i class="material-icons left" style="margin-top: 12px">border_all</i><h5>CATEGORIAS</h5></li>
                        <a href="!#" class="collection-item">Categoria 1</a>
                        <a href="!#" class="collection-item">Categoria 2</a>
                        <a href="!#" class="collection-item">Categoria 3</a>
                        <a href="!#" class="collection-item">Categoria 4</a>
                        <a href="!#" class="collection-item">Categoria 5</a>
                        <a href="!#" class="collection-item">Categoria 6</a>
                    </ul>
                </div>
                <div class="section col l9">
                    <h5 class="center">CATEGORIA 1</h5>
                    <h5 class="center">Produtos em destaque</h5>
                        <div class="row center" style="margin-left: 20%">
                            <div class ="col l12 offset-s1">
                             <div class="col l3">
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                      <img class="activator" src="https://assets.nike.com.br/ArquivoExibir/1154787.jpg">
                                    </div>
                                    <div class="card-content">
                                      <span class="card-title activator grey-text text-darken-4">Tenis Nike<i class="material-icons right">info_outline</i></span>
                                      <p> R$17,90</p>
                                      <p><a href="#">Comprar</a></p>
                                    </div>
                                    <div class="card-reveal">
                                      <span class="card-title grey-text text-darken-4">Informação sobre Tenis Nike<i class="material-icons right">close</i></span>
                                      <p>TÊNIS NIKE AIR ZOOM STRUCTURE 21 MASCULINO.</p>
                                    </div>
                                </div>
                            </div>
                              <div class="col l3">
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                      <img class="activator" src="https://io.convertiez.com.br/m/nativoexclusive/shop/products/images/794434/large/camiseta-adidas-spiral-trefoil-verao17-az1043_6048.jpg">
                                    </div>
                                    <div class="card-content">
                                      <span class="card-title activator grey-text text-darken-4">Camiseta Adidas<i class="material-icons right">info_outline</i></span>
                                      <p> R$18,90</p>
                                      <p><a href="#">Comprar</a></p>
                                    </div>
                                    <div class="card-reveal">
                                      <span class="card-title grey-text text-darken-4">Informação sobre Camiseta Adidas<i class="material-icons right">close</i></span>
                                      <p>CAMISETA ADIDAS SPIRAL.</p>
                                    </div>
                                </div>
                             
                            </div>
                              <div class="col l3">
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                      <img class="activator" src="data:image/jpeg;base64,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">
                                    </div>
                                    <div class="card-content">
                                      <span class="card-title activator grey-text text-darken-4">Boné New Era<i class="material-icons right">info_outline</i></span>
                                      <p> R$11,90</p>
                                      <p><a href="#">Comprar</a></p>
                                    </div>
                                    <div class="card-reveal">
                                      <span class="card-title grey-text text-darken-4">Informação sobre Boné New Era<i class="material-icons right">close</i></span>
                                      <p>BONÉ NEW ERA ABA CURVA NEW YORK YANKEES AZUL - MLB.</p>
                                    </div>
                                </div>
                             
                            </div>
                              
                        </div>
                    </div>
                </div>
                <div class="section col l12">
                    <h5 class="center">Olha o que achamos pra você!</h5>
                        <div class="row">
                            <div class ="col l12 offset-s1">
                             <div class="col l2">
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                      <img class="activator" src="https://assets.nike.com.br/ArquivoExibir/1154787.jpg">
                                    </div>
                                    <div class="card-content">
                                      <span class="card-title activator grey-text text-darken-4">Tenis Nike<i class="material-icons right">info_outline</i></span>
                                      <p> R$17,90</p>
                                      <p><a href="#">Comprar</a></p>
                                    </div>
                                    <div class="card-reveal">
                                      <span class="card-title grey-text text-darken-4">Informação sobre Tenis Nike<i class="material-icons right">close</i></span>
                                      <p>TÊNIS NIKE AIR ZOOM STRUCTURE 21 MASCULINO.</p>
                                    </div>
                                </div>
                            </div>
                              <div class="col l2">
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                      <img class="activator" src="https://io.convertiez.com.br/m/nativoexclusive/shop/products/images/794434/large/camiseta-adidas-spiral-trefoil-verao17-az1043_6048.jpg">
                                    </div>
                                    <div class="card-content">
                                      <span class="card-title activator grey-text text-darken-4">Camiseta Adidas<i class="material-icons right">info_outline</i></span>
                                      <p> R$18,90</p>
                                      <p><a href="#">Comprar</a></p>
                                    </div>
                                    <div class="card-reveal">
                                      <span class="card-title grey-text text-darken-4">Informação sobre Camiseta Adidas<i class="material-icons right">close</i></span>
                                      <p>CAMISETA ADIDAS SPIRAL.</p>
                                    </div>
                                </div>
                             
                            </div>
                              <div class="col l2">
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                      <img class="activator" src="data:image/jpeg;base64,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">
                                    </div>
                                    <div class="card-content">
                                      <span class="card-title activator grey-text text-darken-4">Boné New Era<i class="material-icons right">info_outline</i></span>
                                      <p> R$11,90</p>
                                      <p><a href="#">Comprar</a></p>
                                    </div>
                                    <div class="card-reveal">
                                      <span class="card-title grey-text text-darken-4">Informação sobre Boné New Era<i class="material-icons right">close</i></span>
                                      <p>BONÉ NEW ERA ABA CURVA NEW YORK YANKEES AZUL - MLB.</p>
                                    </div>
                                </div>
                             
                            </div>
                            <div class="col l2">
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                      <img class="activator" src="data:image/jpeg;base64,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">
                                    </div>
                                    <div class="card-content">
                                      <span class="card-title activator grey-text text-darken-4">Boné New Era<i class="material-icons right">info_outline</i></span>
                                      <p> R$11,90</p>
                                      <p><a href="#">Comprar</a></p>
                                    </div>
                                    <div class="card-reveal">
                                      <span class="card-title grey-text text-darken-4">Informação sobre Boné New Era<i class="material-icons right">close</i></span>
                                      <p>BONÉ NEW ERA ABA CURVA NEW YORK YANKEES AZUL - MLB.</p>
                                    </div>
                                </div>
                             
                            </div>
                            <div class="col l2">
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                      <img class="activator" src="data:image/jpeg;base64,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">
                                    </div>
                                    <div class="card-content">
                                      <span class="card-title activator grey-text text-darken-4">Boné New Era<i class="material-icons right">info_outline</i></span>
                                      <p> R$11,90</p>
                                      <p><a href="#">Comprar</a></p>
                                    </div>
                                    <div class="card-reveal">
                                      <span class="card-title grey-text text-darken-4">Informação sobre Boné New Era<i class="material-icons right">close</i></span>
                                      <p>BONÉ NEW ERA ABA CURVA NEW YORK YANKEES AZUL - MLB.</p>
                                    </div>
                                </div>
                             
                            </div>
                            <div class="col l2">
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                      <img class="activator" src="data:image/jpeg;base64,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">
                                    </div>
                                    <div class="card-content">
                                      <span class="card-title activator grey-text text-darken-4">Boné New Era<i class="material-icons right">info_outline</i></span>
                                      <p> R$11,90</p>
                                      <p><a href="#">Comprar</a></p>
                                    </div>
                                    <div class="card-reveal">
                                      <span class="card-title grey-text text-darken-4">Informação sobre Boné New Era<i class="material-icons right">close</i></span>
                                      <p>BONÉ NEW ERA ABA CURVA NEW YORK YANKEES AZUL - MLB.</p>
                                    </div>
                                </div>
                             
                            </div>
                              
                        </div>
                    </div>
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
</body>
</html>