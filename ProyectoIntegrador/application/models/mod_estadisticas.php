<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mod_estadisticas extends CI_Model {

    // Constructor
    public function __construct()
    {
        parent::__construct();

        $this->db->initialize();
    }
    public function getTemperatura(){
        $this->db->select('Temperatura,Fecha,Humedad');
        $this->db->from('mediciones');
        $query = $this->db->get();		
        return $query->result();
    }
}
?>