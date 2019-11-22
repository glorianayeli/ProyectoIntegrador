<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Mod_paginaprincipal extends CI_Model {
    
        // Constructor
        public function __construct()
        {
            parent::__construct();

            $this->db->initialize();
        }

        public function ultimoId(){
            $this->db->select_max('ID');
            $result = $this->db->get('mediciones')->row_array();
            $lastId = $this->db->get_where('mediciones',array('mediciones.ID'=>$result['ID']),1);
            return $lastId->row_array();
        }
        
    }
?>