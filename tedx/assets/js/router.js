const routes = [
     {
         path:"/",
         component:inicio,
         beforeEnter:function(to,from,next){
              
            dataRoot.name = "fade";
             p_atual = nav[0];
             distancia = 0;
             $("#menu_nome").html("");
             $("#menu_nome").css("color","#292929");  
             $("#btn-menu-lateral").css("background","none");  
             next();
         }
      },

      {
          path:"/inicio2",
          component:inicio2,
          beforeEnter:function(to,from,next){
            dataRoot.name = "fade";
            next();
          }
      },


     {path:"/sobre_capa",component:sobre_capa},
     {
         path:"/sobre",
         component:sobre,
         beforeEnter:function(to,from,next){
            dataRoot.name = "fade";
            p_atual = nav[2];
            distancia = 300;
            $("#menu_nome").html("Sobre");
            $("#menu_nome").css("color","#292929");  
            $("#btn-menu-lateral").css("background","#c71f1e");  
            next();
        }
    },
    {
        path:"/edicoes",
        component:edicoes,
        beforeEnter:function(to,from,next){
            dataRoot.name = "fade";
            p_atual = nav[3];
            distancia = 500;
            $("#menu_nome").html("Edições Anteriores");
            $("#menu_nome").css("color","#292929");  
            $("#btn-menu-lateral").css("background","#c71f1e"); 
            next();
        },
        afterEnter:function(to,from,next){
            alert('ok');
            next();
        }
    
    },
    
        {
        path:"/palestrantes",
        component:palestrantes,
        beforeEnter:function(to,from,next){
            dataRoot.name = "fade";
            p_atual = nav[4];
            distancia = 800;
            $("#menu_nome").html("Palestrantes");
            $("#menu_nome").css("color","#fff");  
            $("#btn-menu-lateral").css("background","none"); 
            next();
        }},
    {
        path:"/videos",
        component:videos,
        beforeEnter:function(to,from,next){
            dataRoot.name = "fade";
            p_atual = nav[5];
            distancia = 1000;
            $("#menu_nome").html("Videos");
            $("#menu_nome").css("color","#fff");  
            $("#btn-menu-lateral").css("background","none");  
            next();
        }
    },
    {
        path:"/patrocinadores",
        component:patrocinadores,
        beforeEnter:function(to,from,next){
            dataRoot.name = "fade";
            p_atual = nav[6];
            distancia = 1200;
            $("#menu_nome").html("Patrocinadores");
            $("#menu_nome").css("color","#292929");  
            $("#btn-menu-lateral").css("background","#c71f1e"); 
            next();
        }
    },
    {
        path:"/organizacao",
        component:organizacao,
        beforeEnter:function(to,from,next){
            dataRoot.name = "fade";
            p_atual = nav[7];
            distancia = 1400;
            $("#menu_nome").html("Organização");
            $("#menu_nome").css("color","#fff");  
            $("#btn-menu-lateral").css("background","none");  
            next();
        }
    },
    {
        path:"/contato",
        component:contato,
        beforeEnter:function(to,from,next){
            dataRoot.name = "fade";
            p_atual = nav[8];
            distancia = 1600;
            $("#menu_nome").html("Contato");
            $("#menu_nome").css("color","#fff");  
            $("#btn-menu-lateral").css("background","none")
            next();
        }
    },

]

const router = new VueRouter({
      routes
});