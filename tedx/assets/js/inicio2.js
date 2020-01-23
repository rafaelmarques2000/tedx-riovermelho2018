dataRoot = {
    name:"",
    enter:"",
    leave:""
}

var inicio2 = Vue.component("inicio2",{
     template:"#tpl_inicio2",
     data(){
         var data ={
             show:true
         }
         $(document).ready(function(){
            $("#imagem-inicio-direita").fadeOut("slow",()=>{
            


                if(window.availWidth == "1920"){ 
                 $("#imagem-inicio-direita").css("right","51vw");
                }else if(window.availWidth == "1366"){
                 $("#imagem-inicio-direita").css("right","33vw");
                }
                 
                 $(".texto-parte-2").fadeIn("slow");
                 $("#btn-menu-lateral").css("background","#c71f1e");  
     
                 
               
               });
                $("#imagem-inicio-direita").fadeIn("slow");
                $("#seta").css("fill","#999");
         })
         return data;
     },
     methods:{

     }
})