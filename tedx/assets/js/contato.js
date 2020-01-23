var contato = Vue.component("contato",{
     template:"#tpl_contato",
     data(){
         var data ={}
         return data;
     },
     methods:{

        enviarEmail:function(){

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
                        url:"index.php/site/enviaremail",
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
                   })
      
      
      
            }
      
      
      
      }
      




     }
})