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
                        <h3> Passo 2 </h3>
                    </div>
                </div>

                <br />
        
                <form  method="POST" id="formstep2"  action="<?php echo base_url('index.php/Cadastro/passo3'); ?>">
                        <div class="row">
                              <div class="col-lg-3">
                                <label>Cep</label>
                                <input type="text" class="form-control cep" id="cep" name="cep"  maxlength="10" value="<?php  if(($this->session->userdata('cep') ==! null)) echo $this->session->userdata('cep');  ?>">
                              
                              </div>
                              <div class="col-lg-6">
                                <label>Rua </label>
                                <input type="text" class="form-control" id="end" name="end" placeholder="Digite seu endereço por favor" value="<?php  if(($this->session->userdata('end') ==! null)) echo $this->session->userdata('end');  ?>">
                            
                              </div>
                              <div class="col-lg-3">
                                <label>Numero</label>
                                <input type="text" class="form-control" id="numero" name="numero"  maxlength="10" value="<?php  if(($this->session->userdata('numero') ==! null)) echo $this->session->userdata('numero');  ?>">
                              
                              </div>
                              
                        </div><br /> 

                         <div class="row">
                              <div class="col-lg-6">
                                <label>Cidade </label>
                                <input type="text" class="form-control" id="cidade" name="cidade"  value="<?php  if(($this->session->userdata('cidade') ==! null)) echo $this->session->userdata('cidade');  ?>">
                            
                              </div>
                              <div class="col-lg-6">
                                <label>Estado</label>
                                <input type="text" class="form-control" id="uf" name="uf"  maxlength="10" value="<?php  if(($this->session->userdata('uf') ==! null)) echo $this->session->userdata('uf');  ?>">
                              
                              </div>                              
                        </div><br /> 

                         <div class="row">
                              <div class="col-lg-10 message-error" align="right">
                              </div>
                              <div class="col-lg-2" align="right" >
                                  <button type="button" class="btn btn-outline-primary btn-send-step2">Próximo</button>
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

































