<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TEDxRioVermelho</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/reset.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/animate.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/tedtemplate.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/mediaquery.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/lightbox.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/vue2-animate.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/modal-video.min.css') ?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/flexslider.css')?>">

    <script type="text/javascript" src="<?= base_url('/assets/js/jquery-3.3.1.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('/assets/js/jquery.mousewheel.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('/assets/js/jquery-modal-video.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('/assets/js/menu.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('/assets/js/bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('/assets/js/lightbox.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('/assets/js/jquery.nicescroll.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('/assets/js/vue.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('/assets/js/vue-router.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('/assets/js/inicio.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('/assets/js/inicio2.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('/assets/js/sobre_capa.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('/assets/js/sobre.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('/assets/js/edicoes.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('/assets/js/palestrantes.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('/assets/js/galeria.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('/assets/js/patrocinadores.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('/assets/js/organizacao.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('/assets/js/contato.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('/assets/js/router.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('/assets/js/app.js') ?>"></script>
    <script src="<?=base_url('assets/js/jquery.flexslider-min.js')?>"></script>
    
    <script>
   
        window.onresize = function(){
             if(screen.availWidth < 1024){
                  window.location = '<?= base_url('index.php/mobile')?>'
             }
        }

        window.onload = function(){
          if(screen.availWidth < 1024){
                  window.location = '<?= base_url('index.php/mobile')?>'
             }
        }

        $(document).ready(function(){
            
            

        });
 
    </script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124875295-1%22%3E"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-124875295-1');
</script>

    
</head>
<body id="main">
       
        

       <main id="content-principal">
          
          <div class="backdrop"></div>

           <a href="javascript:void(0)" onclick="Menu.abrirMenu()" id="btn-menu-lateral">
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 86 55"><defs><style>.cls-1{fill:#fff;stroke:#fff;stroke-miterlimit:10;stroke-width:2px;}</style></defs><title>Artboard 1</title><line class="cls-1" x1="18.5" y1="16.5" x2="67.5" y2="16.5"/><line class="cls-1" x1="18.5" y1="38.5" x2="50.5" y2="38.5"/></svg></a>
           <span id="menu_nome"></span>
           
           <div id="menu-site">
                 <div id="topo-menu-site">
                      <div id="logo-content" class="col-menu">
                           <img src="<?= base_url('/assets/img/logo_black.png') ?>" style="width:135%">
                      </div>
                      <div id="menu-seta" class="col-menu">
                          <a href="javascript:void(0)" onclick="Menu.fecharMenu()" id="seta-fechar-menu"><img src="<?= base_url('/assets/img/left_arrow.svg')?>" class="menu-icone"></a>
                      </div>
                 </div>

                 <div id="menu-itens">
                       <ul>
                       <li><a href="#/">Inicio</a></li>
                         <li><a href="#/sobre_capa">Edição 2018</a></li>
                         <li><a href="javascript:void(0)" onclick="menuNav('sobre')">Sobre</a></li>
                         <li><a href="javascript:void(0)" onclick="menuNav('edicoes')">Edições Anteriores</a></li> 
                         <li><a href="javascript:void(0)" onclick="menuNav('palestrantes')">Palestrantes</a></li>
                         <li><a href="javascript:void(0)" onclick="menuNav('videos')">Videos</a></li>
                         <li><a href="javascript:void(0)" onclick="menuNav('patrocinadores')">Patrocinadores</a></li>
                         <li><a href="javascript:void(0)" onclick="menuNav('organizacao')">Organização</a></li>
                         <li><a href="javascript:void(0)" onclick="menuNav('contato')">Contato</a></li> 
                       </ul>
                 </div>

                 <div class="rodape-menu">
                     <p>Este evento TEDx independente é operado sob licença do TED</p>
                </div>

           </div>
           
           <div id="seta_baixo">
           <a href="javascript:void(0)" onclick="navSeta()"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.479 31.479" style="enable-background:new 0 0 31.479 31.479;" xml:space="preserve" width="20px">
<path d="M26.485,21.206c0.429-0.444,0.429-1.143,0-1.587c-0.444-0.429-1.159-0.429-1.587,0l-8.047,8.047  V1.111C16.851,0.492,16.359,0,15.74,0c-0.619,0-1.127,0.492-1.127,1.111v26.555l-8.031-8.047c-0.444-0.429-1.143-0.429-1.587,0  c-0.429,0.444-0.429,1.143,0,1.587l9.952,9.952c0.429,0.429,1.143,0.429,1.587,0L26.485,21.206z" fill="#ccc"/>

</svg></a>
           </div>

           <div id="redes-socias">
               <ul>
                    <li><a href="http://www.facebook.com/tedxriovermelho" target="_blank">Fb</a></li>
                    <li><a href="http://www.instagram.com/tedxriovermelho" target="_blank">In</a></li>
                    <li><a href="https://www.flickr.com/photos/159452310@N02/albums" target="_blank">Flickr</a></li>
               </ul>    
           </div>

          <!-- <div style="position: fixed;z-index: 22;top: 55em;left: 50%;" id="seta_down"> -->

          <div id="app">
            <transition v-bind:name="name" v-bind:enter-class="enter">
               <router-view></router-view>
            </transition>
          </div>
  
  
  </main>
   
   
   <?php 
       include_once('includes/inicio.php');
       include_once('includes/inicio2.php');
       include_once('includes/sobre_capa.php');
       include_once('includes/sobre.php');
       include_once('includes/edicoes.php');
       include_once('includes/palestrantes.php');
       include_once('includes/galeria.php');
       include_once('includes/patrocinadores.php');
       include_once('includes/organizacao.php');
       include_once('includes/contato.php');
   ?>
</body>
</html>