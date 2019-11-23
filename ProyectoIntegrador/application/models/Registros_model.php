<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registros_model extends CI_Model {
    function __construct(){
        $this->load->helper('url');
        $this->load->library('session');
    }

    function crearRegistro($data,$status,$usuario){
        $this->db->WHERE('Correo',$usuario);
        $existeUsuario = $this->db->get('usuarios');
        if(($_POST['email']==$_POST['emailconfirm'])&&($_POST['pass']==$_POST['passconfirm'])&&$existeUsuario->num_rows()==0)
        {
            $this->db->insert('usuarios',$data);
            $status=true;
        }
        return $status;
    }
}