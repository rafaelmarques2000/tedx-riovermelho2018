var sobre = Vue.component("sobre",{
     template:"#tpl_sobre",
     data(){
         var data ={}
         $(document).ready(function(e){
            $("#sobre-topo").slideDown(1000);
            $("#text-block1").fadeIn(2000);
            $("#text-block2").fadeIn(2000);
            $("#text-block3").fadeIn(2000);
            $("#img-block").fadeIn(2000);
         });
         return data;
     },
     methods:{

     }
})