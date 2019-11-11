<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Mod_index extends CI_Model {
    
        // Constructor
        public function __construct()
        {
            parent::__construct();

            $this->db->initialize();
        }
    
        function ValidarUsuario($usuario,$password){
            /*Si devuelve una fila el usuario existe sino no existe */
            $this->db->WHERE('Correo',$usuario);
            $this->db->WHERE('pass',$password);
            $existeUsuario = $this->db->get('usuarios');

            if($existeUsuario->num_rows()>0)
            {
                return true;
            }else
            {
                return false;
            }
        }
    }
    
    /* End of file Mod_Usuario.php */
?>