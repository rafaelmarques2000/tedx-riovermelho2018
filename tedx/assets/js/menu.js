$(document).ready(function(e){
     $(".conteiner_fotos img:eq(0)").addClass("ativo").show();
     $("#slider-titulo li:eq(0)").addClass("ativo_titulo").show();
     $("#conteiner_texto_2 li:eq(0)").addClass("ativo_titulo2").show();
     
    
    });



Menu = {
        abrirMenu:()=>{
            $("#menu-site").css("display","block");
             $("#menu-site").animate({
                  left:"+=500"
             },600,function(){
                $(".backdrop").fadeIn("slow");
             });
             
        },
        fecharMenu:()=>{
          
            $("#menu-site").animate({
                left:"-=500"
           },600,function(){
            $("#menu-site").css("display","none");
            $(".backdrop").fadeOut("slow");
         });
        }

}


nav = ['inicio','sobre-capa','sobre','edicoes','palestrantes',"galeria","patrocinadores","organizacao","contato"];
p_atual = nav[0];
delay = false;
animacao = false;

var distancia = 0



function navSeta(){
  $("#redes-socias").css("background","none"); 
   if(p_atual == "inicio"){
    p_atual = nav[1]; 
    window.location = "#/sobre_capa"; 
   }else if(p_atual == "sobre-capa"){
     p_atual = nav[2];
     window.location = "#/sobre";
   }else if(p_atual == "sobre"){
      p_atual = nav[3];
      window.location = "#/edicoes";  
   }else if(p_atual == "edicoes"){
      p_atual = nav[4];
      window.location = "#/palestrantes";
      $("#redes-socias").css("background","#333"); 
   }else if(p_atual == "palestrantes"){
    p_atual = nav[5];
    window.location = "#/videos";
   }else if(p_atual == "galeria"){
    p_atual = nav[6];
    window.location = "#/patrocinadores";
   }else if(p_atual == "patrocinadores"){
    p_atual = nav[7];
    window.location = "#/organizacao";
   }else if(p_atual == "organizacao"){
    p_atual = nav[8];
    window.location = "#/contato";
   }


}

function menuNav(id){
  if(id == 'sobre'){
    dataRoot.enter ="flip",
    dataRoot.leave ="fadeOutRight",
    window.location = "/tedx-riovermelho2018/tedx/#/sobre";
    p_atual = nav[2];
    distancia = 300;
    $("#menu_nome").html("Sobre");
    $("#menu_nome").css("color","#292929");  
    $("#btn-menu-lateral").css("background","#c71f1e");  
  }
  if(id == 'edicoes'){
    window.location = "/tedx-riovermelho2018/tedx/#/edicoes";
    p_atual = nav[3];
    distancia = 500;
    $("#menu_nome").html("Edições Anteriores");
    $("#menu_nome").css("color","#292929");  
    $("#btn-menu-lateral").css("background","#c71f1e");  
  }
  if(id == 'palestrantes'){
     window.location = "/tedx-riovermelho2018/tedx/#/palestrantes";
     p_atual = nav[4];
     distancia = 800;
     $("#menu_nome").html("Palestrantes");
     $("#menu_nome").css("color","#fff");  
     $("#btn-menu-lateral").css("background","none");  
  }
  if(id == 'videos'){
    window.location = "/tedx-riovermelho2018/tedx/#/videos";
     p_atual = nav[5];
     distancia = 1000;
     $("#menu_nome").html("Videos");
     $("#menu_nome").css("color","#fff");  
     $("#btn-menu-lateral").css("background","none");  
  }
  if(id == 'patrocinadores'){
    window.location = "/tedx-riovermelho2018/tedx/#/patrocinadores";
     p_atual = nav[6];
     distancia = 1200;
     $("#menu_nome").html("Patrocinadores");
     $("#menu_nome").css("color","#292929");  
     $("#btn-menu-lateral").css("background","#c71f1e");
     $("#redes-socias").css("background","#333"); 
  }
  if(id == 'organizacao'){
     window.location = "/tedx-riovermelho2018/tedx/#/organizacao";
     p_atual = nav[7];
     distancia = 1400;
     $("#menu_nome").html("Organização");
     $("#menu_nome").css("color","#fff");  
     $("#btn-menu-lateral").css("background","none");  
  }
  if(id == 'contato'){
    window.location = "/tedx-riovermelho2018/tedx/#/contato";
    p_atual = nav[8];
    distancia = 1600;
    $("#menu_nome").html("Contato");
    $("#menu_nome").css("color","#fff");  
    $("#btn-menu-lateral").css("background","none")
  }
}



$(document).ready(()=>{

    $.fn.extend({
        animateCss: function(animationName, callback) {
          var animationEnd = (function(el) {
            var animations = {
              animation: 'animationend',
              OAnimation: 'oAnimationEnd',
              MozAnimation: 'mozAnimationEnd',
              WebkitAnimation: 'webkitAnimationEnd',
            };
      
            for (var t in animations) {
              if (el.style[t] !== undefined) {
                return animations[t];
              }
            }
          })(document.createElement('div'));
      
          this.addClass('animated ' + animationName).one(animationEnd, function() {
    
            if (typeof callback === 'function') callback();
          });
      
          return this;
        },
      });
    


    $("#main").on("mousewheel",(event)=>{
      $("#sobre").removeAttr('style')
      $("#palestrantes").removeAttr('style')
      $("#edicoes").removeAttr('style')
      $("#galeria").removeAttr('style') 
      $("#patrocinadores").removeAttr('style')
      $("#organizacao").removeAttr('style')
      $("#contato").removeAttr('style')
      if(delay) return;

       delay = true;
       setTimeout(function(){delay = false},300);
       
       if($("#menu-site").is(":visible")){
         return;
       }
      

        distancia+=(event.deltaFactor*event.deltaY)*-1;
        
        

        if(distancia < 0){
            distancia = 0;
        }

        if(distancia > 1600){
          distancia = 1600;
        }

        if(distancia >= 50 && p_atual == 'inicio'){
          window.location = "#/inicio2";
          animacao = false;
         
        }


        if(distancia < 50 && p_atual == 'inicio'){
         
         if(animacao == false){
          window.location = "#/";
          $("#imagem-inicio-direita").fadeOut("slow",()=>{
            
            if(window.availWidth == "1920"){ 
              $("#imagem-inicio-direita").css("right","50vw");
             }else if(window.availWidth == "1366"){
              $("#imagem-inicio-direita").css("right","33vw");
             }else if(window.availWidth == "1024"){
              $("#imagem-inicio-direita").css("right","52vw");
             }
            
             $("#btn-menu-lateral").css("background","none");  
              
            $(".texto-parte-2").fadeOut("slow",()=>{
                  $(".texto-inicio").fadeIn('slow');
                  $(".btn-adquira-seu-ingresso").fadeIn('slow');
              });
              $("#imagem-inicio-direita").attr("src","assets/img/2-1920.png");
              $("#imagem-inicio-direita").fadeIn("slow");
          });
          animacao = true;
        }


        }
        
        
        if(distancia >= 200 && p_atual == 'inicio'){
          window.location = "/tedx-riovermelho2018/tedx/#sobre_capa"
          $("#inicio,#sobre-capa").removeAttr("class");
          $("#menu_nome").html("Sobre");
          $("#menu_nome").css("color","#fff");  
          p_atual = nav[1]; 
          
          $("#btn-menu-lateral").css("background","#c71f1e");  
        }

        if(distancia < 200 && p_atual == 'sobre-capa'){
          window.location = "/tedx-riovermelho2018/tedx/#/inicio2"
          // $("#inicio,#sobre-capa").removeAttr("class");
          // $("#inicio").animateCss("slideInLeft delay-0.5s");
          // $("#sobre-capa").animateCss("fadeOutLeft delay-0.5s");
          $("#menu_nome").html("");
          $("#menu_nome").css("color","#fff");  
          p_atual = nav[0];
          $("#btn-menu-lateral").css("background","none");   
        }
       

        //DISTANCIA PARA SOBRE 
        if(distancia >= 300 && p_atual == 'sobre-capa'){
              window.location = "/tedx-riovermelho2018/tedx/#/sobre";
              p_atual = nav[3];
              $("#menu_nome").html("Sobre");
              $("#menu_nome").css("color","#292929");  
              $("#btn-menu-lateral").css("background","#c71f1e");         
         }

         //VOLTAR PARA SOBRE CAPA
         if(distancia < 300 && p_atual == "sobre"){
          
          // $("#sobre-capa").removeAttr("class");
          // $("#sobre-topo").slideUp(1000);
          // $("#text-block1").fadeOut(2000);
          // $("#text-block2").fadeOut(2000);
          // $("#text-block3").fadeOut(2000);
          // $("#img-block").fadeOut(2000);
          // $("#sobre-capa").animateCss("fadeInLeft delay-1.5s");
          p_atual = nav[1];
          $("#menu_nome").html("Sobre");
          $("#menu_nome").css("color","#fff");
          $("#btn-menu-lateral").css("background","none");  
          window.location = "/tedx-riovermelho2018/tedx/#/sobre_capa";        
         }

         //DISTANCIA PARA EDICOES ANTERIORES
         if(distancia >= 500 && p_atual == "sobre"){
          
            
            // $("#sobre").animateCss("fadeOutLeft");
            // $("#col_esquerda_edicoes").removeAttr("class");
            // $("#box-ed-anterior").removeAttr("class");
            // $("#col_esquerda_edicoes").animateCss("sobre-col-1 slideInRight delay-0.5s");
            // $("#box-ed-anterior").animateCss("sobre-col-2 zoomIn");
            p_atual = nav[3];
            $("#menu_nome").html("Edições Anteriores");
            $("#menu_nome").css("color","#292929");
            $("#btn-menu-lateral").css("background","#c71f1e"); 
            window.location = "/tedx-riovermelho2018/tedx/#/edicoes";    
         }
        
         //REVERSO EDICOES ANTERIORES
         if(distancia < 500 && p_atual == "edicoes"){
          // $("#sobre").removeAttr("class");
          // $("#col_esquerda_edicoes").removeAttr("class");
          // $("#box-ed-anterior").removeAttr("class");
          
          // $("#sobre").animateCss("secao fadeInLeft");
         
          // $("#col_esquerda_edicoes").animateCss("sobre-col-1 slideOutRight delay-0.5s");
          // $("#box-ed-anterior").animateCss("sobre-col-1 zoomOut");
          p_atual = nav[2];
          $("#menu_nome").html("Sobre");
          $("#menu_nome").css("color","#292929"); 
          window.location = "/tedx-riovermelho2018/tedx/#/sobre"
         }

         
          //SE DISTANCIA PARA A SESSAO PALESTRAS
         if(distancia >=800 && p_atual == "edicoes"){
            // $("#col_esquerda_edicoes").animateCss("sobre-col-1 slideOutRight delay-0.5s");
            // $("#box-ed-anterior").animateCss("sobre-col-1 zoomOut");
            // $("#edicoes").animateCss("slideOutUp");
            p_atual = nav[4];
            $("#menu_nome").html("Palestrantes");
            $("#menu_nome").css("color","#fff");  
            $("#btn-menu-lateral").css("background","none");
            window.location = "/tedx-riovermelho2018/tedx/#/palestrantes"  
           
         }

          //SE DISTANCIA PARA A SESSAO PALESTRAS
          if(distancia < 800 && p_atual == "palestrantes"){

            // $("#col_esquerda_edicoes").removeAttr("class");
            // $("#box-ed-anterior").removeAttr("class");
            // $("#edicoes").removeAttr("class");
            
            // $("#col_esquerda_edicoes").animateCss("sobre-col-1 slideInRight delay-0.5s");
            // $("#box-ed-anterior").animateCss("sobre-col-1 zoomIn");
            // $("#edicoes").animateCss("slideInUp");
            p_atual = nav[3];
            $("#menu_nome").html("Edições Anteriores");
            $("#menu_nome").css("color","#292929"); 
            $("#btn-menu-lateral").css("background","#c71f1e");
            window.location = "/tedx-riovermelho2018/tedx/#/edicoes"     
         }

         //TRANSICAO PARA GALERIA
         if(distancia >= 1000 && p_atual == "palestrantes"){
            // $("#palestrantes").removeAttr("class");
            // $("#palestrantes").animateCss("slideOutUp"); 
            p_atual = nav[5];
            $("#menu_nome").html("Videos");
            $("#menu_nome").css("color","#fff");  
            $("#btn-menu-lateral").css("background","none"); 
            window.location = "/tedx-riovermelho2018/tedx/#/videos"
         }

         //TRANSICAO PARA GALERIA
         if(distancia < 1000 && p_atual == "galeria"){
          // $("#palestrantes").removeAttr("class");
          // $("#palestrantes").animateCss("slideInUp"); 
          p_atual = nav[4];
          $("#menu_nome").html("Palestrantes");
          $("#menu_nome").css("color","#fff"); 
          window.location = "/tedx-riovermelho2018/tedx/#/palestrantes" 
       }

       //DISTANCIA PALESTRANTES
       if(distancia >=1200 && p_atual == "galeria"){

        // $("#galeria").removeAttr("class");
        // $("#galeria").animateCss("slideOutUp"); 

        p_atual = nav[6];
        $("#menu_nome").html("Patrocinadores");
        $("#menu_nome").css("color","#c71f1e"); 
        $("#btn-menu-lateral").css("background","#c71f1e"); 
        window.location = "/tedx-riovermelho2018/tedx/#/patrocinadores" 
        $("#redes-socias").css("background","#333"); 


       }
       
      //DISTANCIA PALESTRANTES
      if(distancia < 1200 && p_atual == "patrocinadores"){

      // $("#galeria").removeAttr("class");
      // $("#galeria").animateCss("slideInUp"); 

      p_atual = nav[5];
      $("#menu_nome").html("Videos");
      $("#menu_nome").css("color","#fff"); 
      $("#btn-menu-lateral").css("background","none");
      window.location = "/tedx-riovermelho2018/tedx/#/videos"  
      $("#redes-socias").css("background","none"); 


      }

      //DISTANCIA ORGANIZADORES
      if(distancia >= 1400 && p_atual == "patrocinadores" ){
        // $("#patrocinadores").removeAttr("class");
        // $("#patrocinadores").animateCss("slideOutUp");
        p_atual = nav[7];
        $("#menu_nome").html("Organizadores");
        $("#menu_nome").css("color","#fff"); 
        $("#btn-menu-lateral").css("background","none"); 
        window.location = "/tedx-riovermelho2018/tedx/#/organizacao";   
      }

      //DISTANCIA ORGANIZADORES
      if(distancia < 1400 && p_atual == "organizacao" ){
        // $("#patrocinadores").removeAttr("class");
        // $("#patrocinadores").animateCss("slideInUp"); 
        p_atual = nav[6];
        $("#menu_nome").html("Patrocinadores");
        $("#menu_nome").css("color","#c71f1e"); 
        $("#btn-menu-lateral").css("background","#c71f1e"); 
        window.location = "/tedx-riovermelho2018/tedx/#/patrocinadores"; 
      }

      //DISTANCIA CONTATO
      if(distancia >= 1600 && p_atual == "organizacao" ){
        // $("#organizacao").removeAttr("class");
        // $("#organizacao").animateCss("slideOutUp");
        p_atual = nav[8];
        $("#menu_nome").html("Contato");
        $("#menu_nome").css("color","#fff"); 
        $("#btn-menu-lateral").css("background","none"); 
        window.location = "/tedx-riovermelho2018/tedx/#/contato";
      }

      //DISTANCIA CONTATO
      if(distancia < 1600 && p_atual == "contato" ){
        // $("#organizacao").removeAttr("class");
        // $("#organizacao").animateCss("slideInDown"); 
        p_atual = nav[7];
        $("#menu_nome").html("Organizadores");
        $("#menu_nome").css("color","#fff"); 
        $("#btn-menu-lateral").css("background","none"); 
        window.location = "/tedx-riovermelho2018/tedx/#/organizacao";
      }


         

      
    });
});


var delayP = false;

function mostrarLabel(img){
 
  if(delayP) return;
  delayP = true;
  setTimeout(()=>{delayP = false },200);
 
  if(img.getAttribute('data-posicao') == "baixo"){
   
    if(screen.availWidth == "1024"){
        console.log("aqui");
        $(".box-branco-palestrantes").css("width","360px").css("left","-31px").css("top","-50px");;
    }else if(screen.availWidth == "1920"){
      $(".box-branco-palestrantes").css("width","480px").css("left","-40px").css("top","-100px").css("height","400px");
    }else if(screen.availWidth == "1366"){
      $(".box-branco-palestrantes").css("width","360px").css("left","-30px");
    }

    $(img.getAttribute('data-target')).slideDown('slow');
    $(img).css("transform","scale(1.2)").css("z-index","1100");
    
  }else{
    if(screen.availWidth == "1024"){
      $(".box-branco-palestrantes").css("width","360px").css("left","-31px").css("top","-110px");
  }else if(screen.availWidth == "1920"){
    $(".box-branco-palestrantes").css("width","480px").css("left","-40px").css("top","-200px").css("height","400px");
  }else if(screen.availWidth == "1366"){
    $(".box-branco-palestrantes").css("width","360px").css("left","-30px").css("top","-0px").css("height","300px");;
  }

    $(img.getAttribute('data-target')).slideDown('slow');
    $(img).css("transform","scale(1.2)").css("z-index","1100");
  }


}

function ocultarLabel(img){
  if(img.getAttribute('data-posicao') == "baixo"){
     $(img.getAttribute('data-target')).slideUp('slow',()=>{
        
     });
     $(img).css("transform","scale(1.0)").css("z-index","1000");
     
  }else{
    $(img.getAttribute('data-target')).slideUp('slow');
    $(img).css("transform","scale(1.0)").css("z-index","1000");

  }
}




$hover_atual = ""

function abrirLabelOrganizadores(img){
   $valor = img.getAttribute('data-target');
   $($valor).fadeIn('slow');
   $hover_atual = $valor;
}


function fecharLabelOrganizadores(img){
  $valor = img.getAttribute('data-target');
  $($valor).fadeOut('slow');
}





