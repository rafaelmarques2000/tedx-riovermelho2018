<template id="tpl_contato">


      <section id="contato">
       

       <div class="row form-content">
         <div class="col-lg-5 offset-lg-0" id="image-contato"></div>
         <div class="col-lg-7" id="form-content">
             <div id="form-content-div">
                 <h1 id="titulo-form">Entre em contato<br></h1>
                 <h1 id="subtitulo-form">Envolva-se</h1>
                 <div class="row">
                     <div class="col">
                         <div class="form-group"><span class="label-input-form">Nome</span><input type="text" id="nome" class="form-control campos-form"></div>
                     </div>
                     <div class="col"><span class="label-input-form">Telefone</span><input type="text" id="telefone" class="form-control campos-form"></div>
                 </div>
                 <div class="row">
                     <div class="col"><span class="label-input-form">E-mail</span><input type="text" id="email" class="form-control campos-form"></div>
                     <div class="col"><span class="label-input-form">Assunto</span><input type="text" id="assunto" class="form-control campos-form"></div>
                 </div>
                 <div class="row">
                     <div class="col"><span class="label-input-form">Mensagem</span><textarea id="mensagem" class="form-control campos-form"></textarea></div>
                 </div>
                 <div class="row">
                     <div class="col"><button class="btn btn-primary btn-enviar-form" id="btn-enviar-email" v-on:click="enviarEmail" type="button">Enviar</button></div>
                 </div>
             </div>
             <div id="adquira_ingresso_content">
                 <!-- <button class="btn btn-primary" type="button" id="btn-adquira-ingresso-form">Adquira seu ingresso</button> -->
                </div>
         </div>
     </div>
 
     </section>






</template>