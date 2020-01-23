
<template id="tpl_edicoes">

      <section id="edicoes">
                
                
                <div class="sobre-col-1" id="box-ed-anterior">
                    
                   <ul id="conteiner_texto_2">
                    
                   <li>
                     <p class="text-edicao-anteriores">
                     Aconteceu no dia 19 de julho no Hotel Mercure e teve um público de 100 pessoas e mais 200 em uma sala de transmissão. O tema escolhido foi pautado no estabelecimento de pontes entre os ouvintes do TEDxRioVermelho  e as ideias que construíram a experiência do evento impactando o público a cada talk.     
                       <br><br>
                       <!-- <b class="text-sub-edicao">Lorem ipsum dolor sit amet, consectetur adipiscing elit 01.</b> -->
                       <br><br>
                       <a href="https://www.flickr.com/photos/159452310@N02/albums" target="_blank" class="btn-ver-mais">Ver Fotos</a>
                     </p>
                   </li>

                         
                   <li>
                       <p class="text-edicao-anteriores">
                       Aconteceu no dia 2 de dezembro no Teatro Gregório de Matos e teve um público de 96 pessoas. A experiência do evento foi construída permeando o tema Sentidos, explorando os diversos significados que a palavra transmite e provocando reflexões.     
                         <br><br>
                         <!-- <b class="text-sub-edicao">Lorem ipsum dolor sit amet, consectetur adipiscing elit 02.</b> -->
                         <br><br>
                         <a href="https://www.flickr.com/photos/159452310@N02/albums" target="_blank" class="btn-ver-mais">Ver Fotos</a>
                       </p>
                     </li>

                   

                   </ul>  
                     
                     
                
                   </div>

                <div class="sobre-col-2" id="col_esquerda_edicoes">
                  
                   <div class="conteiner_fotos">
                        <img src="<?= base_url('/assets/img/edicao_2016.png')?>" >
                        <img src="<?= base_url('/assets/img/edicao_2017.png')?>" >
                        
                   </div>
                  
                   <div class="conteiner_texto">
                         
                        <ul id="slider-titulo">
                         <li>
                           <h1>2016</h1>
                           <h4>Conexões</h4>
                        </li>
                        <li>
                         <h1>2017</h1>
                         <h4>Sentidos</h4>
                      </li>
                    
                       </ul>

                         <div class="slider-control">
                             <a href="javascript:void(0)" v-on:click="SliderFotosPrev"><img src="<?= base_url('/assets/img/back.svg')?>"></a>
                             <a href="javascript:void(0)" v-on:click="SliderFotosNext"><img src="<?= base_url('/assets/img/right-arrow.svg')?>"></a>
                        </div>
                   </div>

               </div>
           

     </section> 
</template>