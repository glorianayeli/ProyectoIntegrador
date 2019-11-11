<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registros_model extends CI_Model {
    function __construct(){
        $this->load->helper('url');
        $this->load->library('session');
    }

    function crearRegistro($data,$status){
        $this->db->insert('usuarios',$data);
        $status=true;
        return $status;
    }
}