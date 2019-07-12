<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['logged'])){
                   echo '
                        <a href="?page=index" data-activates="menu-mobile" class="right button-collapse">
                            <i class="material-icons">menu</i>
                        </a>
                        <ul class="right hide-on-med-and-down">
                            <li><a href="?page=anuncio"><i class="material-icons left">add</i>Anunciar</a></li>
                            <li><a class="modal-trigger" href="#loginmodal"><i class="material-icons left">vpn_key</i>Login</a></li>
                            <li><a href="?page=registro"><i class="material-icons left">group_add</i>Registro</a></li>
                        </ul>
                        <ul class="right side-nav" id="menu-mobile">
                            <li><a href="?page=anuncio"><i class="material-icons left">add</i>Anunciar</a></li>
                            <li><a class="modal-trigger" href="#loginmodal"><i class="material-icons left">vpn_key</i>Login</a></li>
                            <li><a href="?page=registro"><i class="material-icons left">group_add</i>Registro</a></li>
                        </ul>';
                }
                else{
                   echo ' <a href="#" class="left" style="margin-left: 5px;">Bem vindo <b>'.$_SESSION['nome'].'</b></a>
                            <a href="#" data-activates="menu-mobile" class="right button-collapse">
                                <i class="material-icons">menu</i>
                            </a>
                            <ul class="right hide-on-med-and-down">
                                 <li><a href="?page=anuncio"><i class="material-icons left">add</i>Anunciar</a></li>
                                 <li><a class="modal-trigger" href="#loginmodal"><i class="material-icons left">message</i>Mensagens</a></li>
                                 <li><a href="?page=conta"><i class="material-icons left">person_outline</i>Conta</a></li>
                            </ul>
                            <ul class="right side-nav" id="menu-mobile">
                                 <li><a href="?page=anuncio"><i class="material-icons left">add</i>Anunciar</a></li>
                                 <li><a class="modal-trigger" href="#loginmodal"><i class="material-icons left">message</i>Mensagens</a></li>
                                 <li><a href="?page=index"><i class="material-icons left">person_outline</i>Conta</a></li>
                            </ul>';
                }
?>