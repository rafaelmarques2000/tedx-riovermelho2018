var edicoes = Vue.component("edicoes",{
     template:"#tpl_edicoes",
     data(){
         var data ={}
         $(document).ready(function(){
            
           
            $(".conteiner_fotos img:eq(0)").addClass("ativo").show();
            $("#slider-titulo li:eq(0)").addClass("ativo_titulo").show();
            $("#conteiner_texto_2 li:eq(0)").addClass("ativo_titulo2").show();

            
            $("#col_esquerda_edicoes").animateCss("sobre-col-1 slideInRight delay-0.5s");
            $("#box-ed-anterior").animateCss("sobre-col-2 zoomIn");
            
           

         })
         return data;
     },
     methods:{

        SliderFotosNext:function (){
             
            if($(".ativo").next().length != 0) {
              //se houver, irá fazer algo
              $(".ativo").fadeOut('slow').removeClass("ativo").next().fadeIn('slow').addClass("ativo");
              $(".ativo_titulo").fadeOut('slow').removeClass("ativo_titulo").next().fadeIn('slow').addClass("ativo_titulo");
              $(".ativo_titulo2").fadeOut('slow').removeClass("ativo_titulo2").next().fadeIn('slow').addClass("ativo_titulo2");
            }else {
                  //se não, irá retornar ao estado inicial do slide
            }
             
          },
          
          SliderFotosPrev:function(){
            if($(".ativo").prev().length != 0) {
              //se houver, irá fazer algo
              $(".ativo").fadeOut('slow').removeClass("ativo").prev().fadeIn('slow').addClass("ativo");
              $(".ativo_titulo").fadeOut('slow').removeClass("ativo_titulo").prev().fadeIn('slow').addClass("ativo_titulo");
              $(".ativo_titulo2").fadeOut('slow').removeClass("ativo_titulo2").prev().fadeIn('slow').addClass("ativo_titulo2");
            }else {
                  //se não, irá retornar ao estado inicial do slide
            }
             
          }


     }
})