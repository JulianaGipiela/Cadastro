 $(document).ready(function(){ 
        $(".birthdate").mask("99/99/9999");
        $(".cep").mask("99.999-999");
        $(".telefone").mask("(99) 9999-9999");
        $(".telefonec").mask("(99) 9 9999-9999");
       
        $( ".calendar" ).datepicker({ 
            format: 'dd/mm/yyyy',
            language: "pt-BR",
            todayHighlight: true
        });


        $(".btn-send-step1").on("click", function(){
                     var error = "";
                      $("#nome").removeClass("error");
                      $("#datanascimento").removeClass("error");
                     $(".message-error").html("");

                    if($("#nome").val() == ""){
                        error += "O campo nome é obrigatório.<br />";
                        $("#nome").addClass("error");
                    }

                    if($("#datanascimento").val().length != 10){
                        error += "Data de Nascimento inválida. <br />";
                        $("#datanascimento").addClass("error");
                    }


                    if(error == ""){
                                $("#formstep1").submit();
                    }else{
                        $(".message-error").html(error);
                      
                    }
        });

        $(".btn-send-step2").on("click", function(){
                     var error = "";
                      $("#cep").removeClass("error");
                      $("#end").removeClass("error");
                      $("#numero").removeClass("error");
                      $("#cidade").removeClass("error");
                      $("#uf").removeClass("error");

                     $(".message-error").html("");

                    if($("#cep").val().length != 10){
                        error += "Cep inválido.<br />";
                        $("#cep").addClass("error");
                    }

                    if($("#end").val() == ""){
                        error += "Digite seu endereço. <br />";
                        $("#end").addClass("error");
                    }

                     if($("#numero").val() == ""){
                        error += "Digite seu numero. <br />";
                        $("#numero").addClass("error");
                    }

                     if($("#cidade").val() == ""){
                        error += "Digite sua cidade. <br />";
                        $("#cidade").addClass("error");
                    }

                     if($("#uf").val() == ""){
                        error += "Digite seu estado. <br />";
                        $("#uf").addClass("error");
                    }


                    if(error == ""){
                                $("#formstep2").submit();
                    }else{
                        $(".message-error").html(error);
                      
                    }
        });

        $(".btn-send-step3").on("click", function(){
                     var error = "";
                      $("#telefone").removeClass("error");
                      $("#telefonec").removeClass("error");
                     $(".message-error").html("");

                    if($("#telefone").val() == ""){
                        error += "O campo telefone é obrigatório.<br />";
                        $("#telefone").addClass("error");
                    }
                    if($("#telefonec").val() == ""){
                        error += "O campo telefone celular é obrigatório.<br />";
                        $("#telefonec").addClass("error");
                    }


                    if(error == ""){
                                $("#formstep3").submit();
                    }else{
                        $(".message-error").html(error);
                      
                    }
        });
        


    });


