<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	public function __construct()
        {    

                parent::__construct();              
               $this->load->model('cadastro_model','', true); 

        }

	public function index()
	{
		
		$this->load->view('cadastro');
					
	}

	public function passo1(){

		redirect("Cadastro");
	}

	public function passo2()
	{

		if(isset($_POST['nome'])){
			$this->session->set_userdata('nome', $_POST['nome']);
		}
		if(isset($_POST['datanascimento'])){
			$this->session->set_userdata('datanascimento', $_POST['datanascimento']);
		}
		$this->load->view('cadastro2');

	}

	public function passo3()
	{

		if(isset($_POST['end'])){
			$this->session->set_userdata('end', $_POST['end']);
		}
		if(isset($_POST['cep'])){
			$this->session->set_userdata('cep', $_POST['cep']);
		}
		if(isset($_POST['numero'])){
			$this->session->set_userdata('numero', $_POST['numero']);
		}
		if(isset($_POST['cidade'])){
			$this->session->set_userdata('cidade', $_POST['cidade']);
		}
		if(isset($_POST['uf'])){
			$this->session->set_userdata('uf', $_POST['uf']);	
		}
		
		$this->load->view('cadastro3');

	}

	public function salvar(){
		if(isset($_POST['telefone'])){
			$this->session->set_userdata('telefone', $_POST['telefone']);
		}
		if(isset($_POST['telefonec'])){
			$this->session->set_userdata('telefonec', $_POST['telefonec']);
		}

		if(!isset($_POST['telefone']))
			redirect("Cadastro");	

		$dados = $this->input->post(); 
		$dados["nome"]=$this->session->userdata('nome');
		$dados["datadenascimento"]=$this->session->userdata('datanascimento');
		$dados["datadenascimento"] = date('Y-m-d', strtotime(str_replace("/", "-", $dados["datadenascimento"] )));
		$dados["rua"]=$this->session->userdata('end');
		$dados["cep"]=$this->session->userdata('cep');
		$dados["numero"]=$this->session->userdata('numero');
		$dados["cidade"]=$this->session->userdata('cidade');
		$dados["uf"]=$this->session->userdata('uf');		
       		
        $codigo = $this->cadastro_model->insert($dados);
        $this->session->sess_destroy();
		$novosdados = $this->cadastro_model->select($codigo);
        $data = array();
        $data['dados'] = $novosdados;
		$this->load->view('salvo', $data);

	}
	
}
