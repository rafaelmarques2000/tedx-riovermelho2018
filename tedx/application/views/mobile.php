<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEDxRioVermelho</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Monda" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/reset.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/styles.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/flexslider.css')?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('/assets/css/lightbox.css') ?>">
    

        <script>
   
        window.onresize = function(){
             if(screen.availWidth > 1024){
                  window.location = '<?= base_url('')?>'
             }
        }

          window.onload = function(){
          if(screen.availWidth > 1024){
                  window.location = '<?= base_url('')?>'
             }
        }
 
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

<body>
    <main>
    

          <section  id="inicio">
              <div class="menu-topo">
              <a href="javascript:void(0)" onclick="Menu.abrirMenu()" id="btn-menu-lateral">
            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 86 55"><defs><style>.cls-1{fill:#fff;stroke:#fff;stroke-miterlimit:10;stroke-width:2px;}</style></defs><title>Artboard 1</title><line class="cls-1" x1="18.5" y1="16.5" x2="67.5" y2="16.5"/><line class="cls-1" x1="18.5" y1="38.5" x2="50.5" y2="38.5"/></svg></a>
                  <img id="logo_mobile" src="<?=base_url('assets/img/logo_mobile.png')?>">
              </div>


            <div id="menu-site">
                 <div id="topo-menu-site">
                      <div id="logo-content" class="col-menu">
                           <img src="<?= base_url('/assets/img/logo_black.png') ?>" style="width:135%">
                      </div>
                      <div id="menu-seta" class="col-menu">
                          <a href="javascript:void(0)" onclick="Menu.fecharMenu()" id="seta-fechar-menu"><img style="width: 20px;" src="<?= base_url('/assets/img/left_arrow.svg')?>" class="menu-icone"></a>
                      </div>
                 </div>

                 <div id="menu-itens" style="height:500px;overflow:auto">
                       <ul>
                         <li><a href="javascript:void(0)" onclick="$('#modal_texto').modal('show')">Edição 2018</a></li>
                         <li><a href="#sobre">Sobre</a></li>
                         <li><a href="#edicoes">Edições Anteriores</a></li>
                         <li><a href="">Inscreva-se</a></li>
                         <li><a href="">Comprar</a></li>
                         <li><a href="#palestrantes">Palestrantes</a></li>
                         <li><a href="#galeria">Videos</a></li>
                         <li><a href="#patrocinadores">Patrocinadores</a></li>
                         <li><a href="#form-content-div">Contato</a></li>
                       </ul>
                 </div>

                 <div class="rodape-menu">
                     <p>Este evento TEDx independente é operado sob licença do TED</p>
                </div>

           </div>



              <div class="texto-inicio">
                  <h1>ALÉM DO<br>QUE SE VÊ</h1>
                  <div class="subtitulo">
                      <span>01/12</span> <span><img style="width:50px;position:relative;top:20px;" src="<?= base_url('assets/img/linha.svg')?>"></span> <span>Espaço Cultural da Barroquinha</span>
                  </div>
              </div>

              <div class="btn-inscrevase-content">
                    <a href="javascript:void(0)" class="btn btn-primary btn-inscrevase">Inscrições encerradas</a>
              </div>

          </section>

           <section  id="sobre">
            
             <span class="texto-lateral">Além do que se vê</span>

              <div class="blocos-sobre" id="bloco-sobre1">
                   <h1>TED</h1><br>
                   <p>Ideias que merecem ser compartilhadas</p><br> <p>O TED é uma organização sem fins lucrativos com o espírito de promover um espaço onde ideias sejam espalhadas.
                   É por meio das conferências do TED que pensadores e realizadores de todo o mundo são convidados a fazer a melhor palestra de suas vidas, em uma média de 18 minutos.</p>
              </div>

              <div class="blocos-sobre" id="bloco-sobre2">
                    <h1>TEDx</h1><br>
                    <p>Organização independente e licenciada pelo TED que busca projetar ideias locais e comunitárias para o mundo.</p>
             </div>

             <div class="sobre_img_content">
                 <img src="<?=base_url('assets/img/sobre.png')?>">
                 <div class="label-sobre">
                     <h3>TEDxRioVermelho</h3>
                     <p>Evento com o perfil diverso e cultural da cidade de Salvador, cujo objetivo é conectar o cidadão soteropolitano com as ideias e iniciativas transforadoras da cidade.</p>
                 </div>
             </div>


           </section>

         <section id="edicoes">
                <span class="texto-lateral" style="left: 17px;top: 166px;">Edições anteriores</span>
                <div id="jssor_1" style="position:relative;top:0px;left:0px;width:299px;height:350px;overflow:hidden;margin:0 auto">
                        <div data-u="slides" style="position:absolute;top:0px;left:0px;width:299px;height:300px;overflow:hidden;background:#C71E1E">
                            <div class="slider-content">
                                 
                                <a href="https://www.flickr.com/photos/159452310@N02/albums" target="_blank"><img style="width:100%"  src="<?=base_url('assets/img/edicao_2016.png')?>" /></a>
                                <div>
                                        <h1 class="edicoes_titulo">2016<br><small class="edicoes_subtitulo">Conexões</small></h1>
                                </div>
                            
                            </div>

                            <div class="slider-content">
                                 
                                    <a href="https://www.flickr.com/photos/159452310@N02/albums" target="_blank"><img style="width:100%"  src="<?=base_url('assets/img/edicao_2017.png')?>" /></a>
                                    <div>
                                            <h1 class="edicoes_titulo">2017<br><small class="edicoes_subtitulo">Sentidos</small></h1>
                                    </div>
                                
                                </div>
                            
                        </div>
               </div>




         </section>

         <section id="palestrantes">
                <span class="texto-lateral" style="top:286px">Palestrantes</span>
                <div class="flexslider" style="background:none">
                        <ul class="slides">
                          <li data-thumb="<?=base_url('assets/img/palestrantes/1.png')?>">
                            <img src="<?=base_url('assets/img/palestrantes/1.png')?>" />
                            <p class="flex-caption"><h4 class="palestrantes-label">Amanda Torres </h4><br><span class="texto-palestrantes">

                                <b style="color:#000;margin-bottom:20px">“A comunicação não violenta é sobre revolução e afeto” </b>
                                 <p style="margin-top:10px;;padding:7px">Publicitária e cool hunter, especialista em mídias sociais, é palestrante e consultora de comunicação digital, diversidade e inclusão.Como profissional de Mercado Sesi Bahia, leva projetos sociais para a indústria local.Idealizadora do projeto @inclusive.vc aborda inclusão, diversidade e comunicação não violenta.</p>

                            </span></p>
                          </li>
    
                          <li data-thumb="<?=base_url('assets/img/palestrantes/2.png')?>">
                            <img src="<?=base_url('assets/img/palestrantes/2.png')?>" />
                            <p class="flex-caption"><h4 class="palestrantes-label">Altair Lira</h4><br><span class="texto-palestrantes">
                            
                            <b style="color:#000;margin-bottom:20px">“Doença Falciforme: Muito além da meia lua, uma Lu(t)a inteira”</b>
                            <p style="margin-top:10px;;padding:7px">Fundador e ex- coordenador geral da ABADFAL Associação Baiana Das pessoas com Doenças Falciforme s e da FENAFAL Federação Nacional das Associações de Pessoas com Doenças Falciformes. Bacharel em Antropologia da saúde e Mestre em saúde coletiva pela UFBA.Descendente dos povos Fula da Guiné-Bissau e dos povos Mende e Temne de Serra Leoa.</p>


                            </span></p>
                          </li>
    
                          <li data-thumb="<?=base_url('assets/img/palestrantes/3.png')?>">
                            <img src="<?=base_url('assets/img/palestrantes/3.png')?>" />
                            <p class="flex-caption"><h4 class="palestrantes-label">Alcione Bastos</h4><br><span class="texto-palestrantes">

                            <b style="color:#000;margin-bottom:20px">“Como encontrar um amor verdadeiro sem ter que depender do cupido”</b>
                            <p style="margin-top:10px;;padding:7px">Médica Ginecologista, pós-graduada em Psicologia Analítica pelo Instituto Junguiano da Bahia e em Sexualidade Humana pela Sociedade Brasileira de Estudos em Sexualidade Humana - SBRASH/SP com Título de Especialista em Sexualidade - TESH. Estudiosa da Neurociência, é Coach de Inteligência Emocional. </p>

                            
                            </span></p>
                          </li>
    
                          <li data-thumb="<?=base_url('assets/img/palestrantes/4.png')?>">
                            <img src="<?=base_url('assets/img/palestrantes/4.png')?>" />
                            <p class="flex-caption"><h4 class="palestrantes-label">Ana Fernanda</h4><br><span class="texto-palestrantes">
                            
                            <b style="color:#000;margin-bottom:20px">“O consumo consciente NÃO vai salvar o mundo”</b>
                            <p style="margin-top:10px;;padding:7px">Jornalista e idealizadora da Justa Moda, que visa promover a cultura da sustentabilidade e a redução de consumo na moda. Em Salvador é representante do movimento Fashion Revolution (desde 2016), e fellow da ONG Social Good Brasil (desde 2017) - mas o título que ela mais gosta é de mãe de Otto, 6 anos. Integrou, de 2012 a 2018, o comitê gestor da ONG CIPÓ - Comunicação Interativa.</p>
                            
                            </span></p>
                          </li>
                          <li data-thumb="<?=base_url('assets/img/palestrantes/5.png')?>">
                            <img src="<?=base_url('assets/img/palestrantes/5.png')?>" />
                            <p class="flex-caption"><h4 class="palestrantes-label">Lívia Suarez</h4><br><span class="texto-palestrantes">
                            
                            <b style="color:#000;margin-bottom:20px">“A representatividade da mulher negra na mobilidade urbana-bike”</b>
                            <p style="margin-top:10px;;padding:7px">Formada em Letras, pesquisou performances narrativas pela Universidade Federal da Bahia. É Co- Fundadora do La Frida Bike e Preta, Vem de Bike, primeiro movimento de cicloativistas negras do Brasil - Diretora de Criação da Casa La Frida.</p>
                            
                            
                            </span></p>
                          </li>
                          <li data-thumb="<?=base_url('assets/img/palestrantes/6.png')?>">
                            <img src="<?=base_url('assets/img/palestrantes/6.png')?>" />
                            <p class="flex-caption"><h4 class="palestrantes-label">Maribel Barreto</h4><br><span class="texto-palestrantes">

                            <b style="color:#000;margin-bottom:20px">“O Ente Consciente”</b>
                            <p style="margin-top:10px;;padding:7px">Diretora Executiva da Consultoria em Ciências da Educação (CCE). Membro do Conselho Gestor e Diretora da área de Ciências Humanas da Fundação Ocidemnte. Pedagoga, Psicopedagoga, Mestre e Doutora em Educação, com pós-doutorado em Educação, Consciência e Transdisciplinaridade pela UCB e em Educação e Criatividade pela UNB. Autora de 14 livros.</p>
                            
                            </span></p>
                          </li>

                          <li data-thumb="<?=base_url('assets/img/palestrantes/7.png')?>">
                            <img src="<?=base_url('assets/img/palestrantes/7.png')?>" />
                            <p class="flex-caption"><h4 class="palestrantes-label">Matheus Boa Sorte</h4><br><span class="texto-palestrantes">
                            
                            <b style="color:#000;margin-bottom:20px">“Sonhar não paga imposto”</b>
                            <p style="margin-top:10px;;padding:7px">Nordestino, baiano, orgulhoso por ser filho do sertão. Natural de Guanambi, carrega em si o amor pelas tradições do sertão. É cantor, compositor, poeta, palestrante e apresentador de TV, do programa "Dendê na Mochila". Dedica a vida a luta pela ampliação das causas culturais do homem sertanejo.</p>
                            
                            </span></p>
                          </li>

                          <li data-thumb="<?=base_url('assets/img/palestrantes/8.png')?>">
                            <img src="<?=base_url('assets/img/palestrantes/8.png')?>" />
                            <p class="flex-caption"><h4 class="palestrantes-label">Pedro Cordier</h4><br><span class="texto-palestrantes">
                            
                            <b style="color:#000;margin-bottom:20px">“O poder da Escutatória”</b>
                            <p style="margin-top:10px;;padding:7px">Coach pelo Método IKIGAI e pela Brascoaching. Coaching pela The Inner Game International School e em Thetahealing pela THiNK. Pós graduado em Coaching e em Jornalismo. Graduado em Marketing. Professor de MBA. Criador dos APPs Diário de Bordo e SolidariedAPP. Criador da metodologia Metainteligência Emocional e do Workshop </p>

                            </span></p>
                          </li>

                          <li data-thumb="<?=base_url('assets/img/palestrantes/9.png')?>">
                            <img src="<?=base_url('assets/img/palestrantes/9.png')?>" />
                            <p class="flex-caption"><h4 class="palestrantes-label">Tássio da Silva</h4><br><span class="texto-palestrantes">

                                <b style="color:#000;margin-bottom:20px">“À flor da pele: o valor da maquiagem na luta antirracista”</b>
                                <p style="margin-top:10px;padding:7px">Jornalista de beleza e maquiador profissional. Criou o “Herdeira da Beleza” para provocar reflexões sobre a estética negra na indústria cosmética. Seus vídeos alcançam mentes do mundo inteiro e hoje já é o maior canal de maquiagem profissional para pele negra da América Latina no YouTube. Tássio construiu uma grande comunidade sobre autocuidados, ancestralidade, poder e resistência. </p>
                            
                            </span></p>
                          </li>
                          
                        </ul>
                </div> 
            

         </section>

         <section id="galeria">
                
                <span class="texto-lateral" style="top:204px;left:14px;color:#fff">Videos</span>
                <div class="flexslider2" style="background:none;margin:0 auto;">
                        <ul class="slides">
                          <li>
                          <a href="https://www.youtube.com/watch?v=crXlh_maURY&t=77s" target="_blank" ><img src="<?=base_url('assets/img/g1.png')?>" /></a>
                          </li>
    
                          <li>
                          <a href="https://www.youtube.com/watch?v=nTDuumPcaRo" target="_blank" ><img src="<?=base_url('assets/img/g2.png')?>" /></a>
                          </li>
                          
                          <li>
                          <a href="https://www.youtube.com/watch?v=9jaitczIDaE&t=3s" target="_blank" ><img src="<?=base_url('assets/img/g3.png')?>" /></a>
                          </li>

                        <li>
                          <a href="https://www.youtube.com/watch?v=VOXs9pNQbms" target="_blank" ><img src="<?=base_url('assets/img/g4.png')?>" /></a>
                          </li>

                        <li>
                          <a href="https://www.youtube.com/watch?v=XNZjgL01Ics&t=12s" target="_blank" ><img src="<?=base_url('assets/img/g5.png')?>" /></a>
                          </li>

                        <li>
                          <a href="https://www.youtube.com/watch?v=VHdb2zJSwEA" target="_blank" ><img src="<?=base_url('assets/img/g6.png')?>" /></a>
                          </li>

                           <li>
                          <a href="https://www.youtube.com/watch?v=VHdb2zJSwEA" target="_blank" ><img src="<?=base_url('assets/img/g7.png')?>" /></a>
                          </li>

                           <li>
                          <a href="https://www.youtube.com/watch?v=VHdb2zJSwEA" target="_blank" ><img src="<?=base_url('assets/img/g8.png')?>" /></a>
                          </li>

                           <li>
                          <a href="https://www.youtube.com/watch?v=VHdb2zJSwEA" target="_blank" ><img src="<?=base_url('assets/img/g9.png')?>" /></a>
                          </li>

                           <li>
                          <a href="https://www.youtube.com/watch?v=VHdb2zJSwEA" target="_blank" ><img src="<?=base_url('assets/img/g10.png')?>" /></a>
                          </li>

                           <li>
                          <a href="https://www.youtube.com/watch?v=VHdb2zJSwEA" target="_blank" ><img src="<?=base_url('assets/img/g11.png')?>" /></a>
                          </li>

                           <li>
                          <a href="https://www.youtube.com/watch?v=VHdb2zJSwEA" target="_blank" ><img src="<?=base_url('assets/img/g12.png')?>" /></a>
                          </li>


                        </ul>
                </div>

                <span class="texto-lateral" style="top:82px;left:14px;color:#fff">Patrocinadores</span> 
                <div id="patrocinadores">
                   
                      <uL>  
                          <li>
                            <a href="http://fbb.br/" target="_blank"><img style="width:106px;" src="<?=base_url('/assets/img/patrocinadores/p01.png')?>"></a>
                          </li>

                          <li>
                              <a href="http://wtf.inf.br/" target="_blank"> <img style="width:106px;" src="<?=base_url('/assets/img/patrocinadores/p02.png')?>"></a>
                            </li>

                            <li>
                                 <a href="https://www.ponteecolaborativo.com/" target="_blank"> <img style="width:106px;" src="<?=base_url('/assets/img/patrocinadores/p03.png')?>"></a>
                                </li>
      
                                <li>
                                <a href="http://www.coffeetown.com.br/" target='_blank'><img style="width:106px;" src="<?=base_url('/assets/img/patrocinadores/p04.png')?>"></a>
                                  </li>

                                  <li>
                                  <a href="https://www.instagram.com/marcosbarbosaa/" target='_blank'> <img style="width:106px;" src="<?=base_url('/assets/img/patrocinadores/p05.png')?>"></a>
                                    </li>
          
                                    <li>
                                    <a href="https://www.instagram.com/alt.midia/" target='_blank'> <img style="width:106px;" src="<?=base_url('/assets/img/patrocinadores/p06.jpg')?>"></a>
                                      </li>

                                      <li>
                                      <a href="https://www.rappi.com.br/" target="_blank"><img style="width:106px;" src="<?=base_url('/assets/img/patrocinadores/p07.jpg')?>"></a>
                                        </li>
              
                                        <li>
                                        <a href="http://www.graficadpi.com.br/" target='_blank'><img style="width:106px;" src="<?=base_url('/assets/img/patrocinadores/p08.jpg')?>"></a>
                                          </li>

                                          <li>
                                          <a href="http://www.loygus.com.br/" target='_blank'><img style="width:106px;" src="<?=base_url('/assets/img/patrocinadores/p09.jpg')?>"></a>
                                          </li>
                                          <li>
                                              <img style="width:106px;" src="<?=base_url('/assets/img/patrocinadores/p10.jpg')?>">
                                          </li>
                                          <li>
                                          <a href="http://www.institutodecegosdabahia.org.br/" target='_blank'><img style="width:106px;" src="<?=base_url('/assets/img/patrocinadores/p11.jpg')?>"></a>
                                          </li>
                                          <li>
                                          <a href="https://www.logitech.com/pt-br" target='_blank'> <img style="width:106px;" src="<?=base_url('/assets/img/patrocinadores/p12.jpg')?>"></a>
                                          </li>

                      </uL>


                </div>



         </section>

         <section id="organizadores">
              <span class="texto-lateral" style="top:175px;left:18px;color:#fff">Organização</span> 
              <div id="organizadores-content">
              <ul>
             
                   <li>
                        <a href="<?= base_url('/assets/img/01.jpg')?>" data-title="Gabriela Ribeiro <br>Coord(a) de Comunicação" data-lightbox="membros"  ><img src="<?= base_url('/assets/img/01.jpg')?>"></a>
                       
                   </li>
                    
                   <li>
                   <a href="<?= base_url('/assets/img/02.jpg')?>" data-title="Louise Vital<br> Ass(a) de Gestão Pessoas" data-lightbox="membros"  ><img src="<?= base_url('/assets/img/02.jpg')?>"></a>
                  </li>
                  
                  <li>
                  <a href="<?= base_url('/assets/img/03.jpg')?>" data-title="Marcelo Costa <br> Ass(a) de Experiência" data-lightbox="membros"  ><img src="<?= base_url('/assets/img/03.jpg')?>"></a>
                </li>

                 <li>
                 <a href="<?= base_url('/assets/img/04.jpg')?>" data-title="Felipe Rabello Ass(a) de Infraestrutura" data-lightbox="membros"  ><img src="<?= base_url('/assets/img/04.jpg')?>"></a>
                </li>
              
            
                <li>
                <a href="<?= base_url('/assets/img/06.jpg')?>" data-title="Iara Alves <br>Ass(a) de Comunicação" data-lightbox="membros"  ><img src="<?= base_url('/assets/img/06.jpg')?>"></a>
            </li>
            
            <li>
            <a href="<?= base_url('/assets/img/18.jpg')?>" data-title="Érika Cruz Ass(a) de Gestão Pessoas" data-lightbox="membros"  ><img src="<?= base_url('/assets/img/18.jpg')?>"></a>
          </li>
                 


          <li>
          <a href="<?= base_url('/assets/img/08.jpg')?>" data-title="Juliana Caldas <br>Co-organizadora" data-lightbox="membros"  ><img src="<?= base_url('/assets/img/08.jpg')?>"></a>
       </li>
      
       <li>
       <a href="<?= base_url('/assets/img/09.jpg')?>" data-title="Lyz Figueiredo<br>Coordenadora de Infraestrutura" data-lightbox="membros"  ><img src="<?= base_url('/assets/img/09.jpg')?>"></a>
      </li>
      
      <li>
      <a href="<?= base_url('/assets/img/10.jpg')?>" data-title="Letícia Andrade<br>Assessora de Infraestrutura " data-lightbox="membros"  ><img src="<?= base_url('/assets/img/10.jpg')?>"></a>
    </li>

    <li>
    <a href="<?= base_url('/assets/img/11.jpg')?>" data-title="Matheus Caldas<br>Co-organizador" data-lightbox="membros"  ><img src="<?= base_url('/assets/img/11.jpg')?>"></a>
 </li>

 <li>
 <a href="<?= base_url('/assets/img/12.jpg')?>" data-title="Felipe Moreira<br>Assessor de Finanças" data-lightbox="membros"  ><img src="<?= base_url('/assets/img/12.jpg')?>"></a>
</li>

<li>
<a href="<?= base_url('/assets/img/13.jpg')?>" data-title="Lorena Lima<br>Assessora de Experiência" data-lightbox="membros"  ><img src="<?= base_url('/assets/img/13.jpg')?>"></a>
</li>

<li>
<a href="<?= base_url('/assets/img/14.jpg')?>" data-title="Ana Paula Paim <br>Assessora de Gestão Pessoas" data-lightbox="membros"  ><img src="<?= base_url('/assets/img/14.jpg')?>"></a>
</li>

<li>
<a href="<?= base_url('/assets/img/15.jpg')?>" data-title="Leonardo Vaz<br>Coordenador de Finanças" data-lightbox="membros"  ><img src="<?= base_url('/assets/img/15.jpg')?>"></a>
</li>

<li>
<a href="<?= base_url('/assets/img/19.jpg')?>" data-title="Marcela Carvalho<br> Ass(a) de Experiência" data-lightbox="membros"  ><img src="<?= base_url('/assets/img/19.jpg')?>"></a>
</li>

<li>
<a href="<?= base_url('/assets/img/20.jpg')?>" data-title="Mariane Cavalcanti<br> Ass(a) de Finanças" data-lightbox="membros"  ><img src="<?= base_url('/assets/img/20.jpg')?>"></a>
</li>

<li>
<a href="<?= base_url('/assets/img/21.jpg')?>" data-title="Anna Heber<br>Coordenadora de Experiência" data-lightbox="membros"  ><img src="<?= base_url('/assets/img/21.jpg')?>"></a>
</li>

<li>
<a href="<?= base_url('/assets/img/16.jpg')?>" data-title="Paulo Mateus<br>Coordenador Geral" data-lightbox="membros"  ><img src="<?= base_url('/assets/img/16.jpg')?>"></a>
</li>

<li>
<a href="<?= base_url('/assets/img/05.jpg')?>" data-title="Daniela Maisk<br>Ass(a) de Experiência" data-lightbox="membros"  ><img src="<?= base_url('/assets/img/05.jpg')?>"></a>
</li>







            </ul>
            
            
            
            
            
            </div>
              
    
              <div id="form-content-div">
                    <h1 id="titulo-form">Entre em contato<br></h1>
                    <h1 id="subtitulo-form">Envolva-se</h1>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group"><span class="label-input-form">Nome</span><input type="text" id="nome" class="form-control campos-form"></div>
                        </div>
                        <br>
                        <div class="col-md-12"><span class="label-input-form">Telefone</span><input type="text" id="telefone" class="form-control campos-form"></div>
                    </div>
                    <div class="row">
                        <br>
                        <div class="col-md-12"><span class="label-input-form">E-mail</span><input type="text" id="email" class="form-control campos-form"></div>
                        <br>
                        <div class="col-md-12"><span class="label-input-form">Assunto</span><input type="text" id="assunto" class="form-control campos-form"></div>
                        <br>
                    </div>
                    <div class="row">
                        <br>
                        <div class="col-md-12"><span class="label-input-form">Mensagem</span><textarea id="mensagem" class="form-control campos-form"></textarea></div>
                        <br>
                    </div>
                    <div class="row">
                        <div class="col-md-12"><button class="btn btn-primary btn-enviar-form" id="btn-enviar-email" onclick="enviarEmail()" type="button">Enviar</button></div>
                    </div>
                </div>
                <div id="adquira_ingresso_content">
                    <!-- <button class="btn btn-primary" type="button" id="btn-adquira-ingresso-form">Adquira seu ingresso</button> -->
                </div>
            </div>



         </section>



        <div class="modal" id="modal_texto" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="font-family:'roboto';background:#C71E1E;color:#fff;text-align:center;">
        <h5 class="modal-title">Além do que se vê</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="font-family:'roboto';font-size:14px;">
               <p>Ampliar o olhar, se permitir, permitir. Ver além do que nossos olhos podem captar, perceber o que costumamos deixar passar e não deixar passar o que nos tocar. Este ano o TEDxRioVermelho vai convidar o público a perceber como as diferenças se completam, como se fazem necessárias para tirar da “zona de desconforto” tudo que nos parece estranho. E por falar em estranho, vamos desconstruir o vazio dessa palavra que repele e não nos permite conhecer o OUTRO?</p>
               <br>
               <p>O olhar verdadeiro e profundo para o outro, estar aberto a perceber e respeitar as diferenças, o esforço para sentir além do que se vê. Empatia é algo que deveria permear nossas vidas, guiar nossas experiências e ampliar nossa capacidade de entender as dores e os anseios de pessoas iguais a nós. Iguais em SER, humanos por natureza e inundados em sentimento. </p>
               <br>
               <p>Partilhe conosco esse desafio de conviver com seres humanos. Estes seres diversos - e que bom que são diversos - em sexo, gênero, identidade, cor, gostos, crenças, culturas, P E R C E P Ç Õ E S. Perceba conosco como podemos ver muito mais do que estamos enxergando quando olhamos ao nosso redor. Amplie o seu olhar, sinta como se o olhar fosse capaz de capturar muito mais que uma imagem. Desconstrua o que já viu, esqueça os conceitos que criou. Permita-se sentir e deixe que o outro também possa sentir você. E ao sair do TEDxRioVermelho, olhe novamente em todas as direções e veja o que realmente está ao seu redor.</p>
               <br>
               <p>Queremos ir além do comum e das experiências conhecidas, trazendo para o centro do palco e dos holofotes, os heróis e artistas dos becos e esquinas da nossa cidade, entre eles: você. Ser, sentir e fazer. Queremos ser nós, além do que se vê.</p>

      </div>
      
    </div>
  </div>
</div>



    </main>
    <script src="<?=base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.flexslider-min.js')?>"></script>
    <script src="<?=base_url('assets/js/jssor.slider.min.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('/assets/js/lightbox.js') ?>"></script>
    
    <script>
         $(document).ready(function(){
            
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails",
                directionNav:false
            });

             $('.flexslider2').flexslider({
                animation: "slide",
                directionNav:false,
                controlNav:false
            });

          
            var options = { $AutoPlay: 1 };
            var jssor1_slider = new $JssorSlider$("jssor_1", options);
            

     });

     function enviarEmail(){

$nome  = $("#nome").val();
$telefone = $("#telefone").val();
$email = $("#email").val();
$assunto = $("#assunto").val();
$mensagem = $("#mensagem").val();

if($nome == "" || $telefone == "" || $email == "" || $assunto == "" || $mensagem == ""){
    alert("Preencha todos os campos corretamente.");
}else{

       formData = new FormData();
       formData.append("nome",$nome);
       formData.append("telefone",$telefone);
       formData.append("email",$email);
       formData.append("assunto",$assunto);
       formData.append("mensagem",$mensagem);

      $("#btn-enviar-email").attr("disabled","disabled");
      $("#btn-enviar-email").html("Enviando Mensagem....");

       $.ajax({
            url:"<?= base_url('index.php/site/enviaremail') ?>",
            type:"POST",
            dataType:"json",
            data:formData,
            contentType:false,
            cache:false,
            processData:false,
            success:(data)=>{
                if(data.ok == 1){
                  alert("Mensagem enviada com sucesso em breve você será respondido.");
                  $("#btn-enviar-email").removeAttr("disabled");
                  $("#btn-enviar-email").html("Enviar");
                  $("#nome").val("");
                  $("#telefone").val("");
                  $("#email").val("");
                  $("#assunto").val("");
                  $("#mensagem").val("");
                }else{
                  alert("Falha ao enviar email,tente novamente mais tarde.");
                  $("#btn-enviar-email").removeAttr("disabled");
                  $("#btn-enviar-email").html("Enviar");
                }
            }
       });
    }



}  


Menu = {
        abrirMenu:()=>{
             $("#menu-site").animate({
                  left:"+=500"
             },600);
        },
        fecharMenu:()=>{
            $("#menu-site").animate({
                left:"-=500"
           },600);
        }

}
    
    </script>
</body>

</html>