var videos = Vue.component("videos",{
     template:"#tpl_galeria",
     data(){
         var data ={}
         $(document).ready(function(){
            $(".js-modal-btn").modalVideo({
                autoplay:0
            });
            
         })
         return data;
     },
     methods:{

     }
})