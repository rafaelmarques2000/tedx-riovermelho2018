var palestrantes = Vue.component("palestrantes",{
     template:"#tpl_palestrantes",
     data(){
         var data ={}

        window.onload = ()=>{  
          $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails",
            directionNav:false
        });

        setTimeout(function(){
            $(".flex-control-nav.flex-control-thumbs li img")[1].click();
            $(".flex-control-nav.flex-control-thumbs li img")[0].click();
        },200);

}

         return data;
     },
     methods:{

     },
     mounted:function(){
         $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails",
            directionNav:false
        });

        setTimeout(function(){
            $(".flex-control-nav.flex-control-thumbs li img")[1].click();
            $(".flex-control-nav.flex-control-thumbs li img")[0].click();
        },200);

     }
})