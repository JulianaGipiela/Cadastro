<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cadastro</title>
    <link href="<?php echo base_url('assets'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/css/main.css" rel="stylesheet">
     <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css" />
  
   

</head>
<body>
<div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <h1> Cadastro </h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <h3> Passo 1 </h3>
                    </div>
                </div>


                <br />

        
                <form  method="POST" id="formstep1"  action="<?php echo base_url('index.php/Cadastro/passo2'); ?>">
                        <div class="row">
                              <div class="col-lg-9">
                                <label>Nome Completo </label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome por favor" value="<?php  if(($this->session->userdata('nome') ==! null)) echo $this->session->userdata('nome');  ?>">
                            
                              </div>
                              <div class="col-lg-3">
                                <label>Data de Nascimento</label>
                                <input type="text" class="form-control birthdate calendar" id="datanascimento" name="datanascimento" placeholder="__/__/____" maxlength="10" value="<?php  if(($this->session->userdata('datanascimento') ==! null)) echo $this->session->userdata('datanascimento');  ?>">
                              
                              </div>
                        </div><br /> 
                         <div class="row">
                              <div class="col-lg-10 message-error" align="right">
                              </div>
                              <div class="col-lg-2" align="right" >
                                  <button type="button" class="btn btn-outline-primary btn-send-step1">Próximo</button>
                              </div>
                         </div>     
                </form>
            


</div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>    
    <script src="<?php echo base_url('assets'); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets'); ?>/js/jquery.mask.min.js"></script>
    <script src="<?php echo base_url('assets'); ?>/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url('assets'); ?>/plugins/bootstrap-datepicker/locales/bootstrap-datepicker.pt-BR.min.js"></script>
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

   
</body>
</html>

















