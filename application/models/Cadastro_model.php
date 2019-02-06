<?php

class Cadastro_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

        


    public function insert($data) {
        $this->db->insert('cadastro', $data);
        $this->db->select('max(Id) as Id');
        $this->db->from('cadastro');
        $query = $this->db->get();
        $item = $query->result();
        return $item[0]->Id;
    }
    
    public function update($dados, $codigo){
            $this->db->where("Id", $codigo);
            $this->db->update("cadastro", $dados);
    }
    public function select($code){
        $this->db->select('*');
        $this->db->from('cadastro');
        $this->db->where('Id', $code);
        $query = $this->db->get();
        $item = $query->result();
      
        return $item[0];
    }
    public function selectAll(){
        $this->db->select('*');
        $this->db->from('cadastro');
        $this->db->order_by("cadastro.nome", "ASC");
        $query = $this->db->get();
        $item = $query->result();
        return $item;
    }
    



     

 

  

}

?>