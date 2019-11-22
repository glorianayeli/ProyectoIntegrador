<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaginaPrincipal extends MY_Controller {
    function __construct(){
		parent::__construct();
		$this->load->helper('url');
        $this->load->library('session');
        $this->ValidarInicioSesion();
        $this->load->model('mod_paginaprincipal');
    }

    public function index(){
        $result = $this->mod_paginaprincipal->ultimoId();
        $data = array('consulta'=>$result);
        $this->load->view('/layouts/head.php');
        $this->load->view('/layouts/header.php');
        $this->load->view('/Usuario/PaginaPrincipalUsuario.php',$data);
        $this->load->view('/layouts/footer.php');
    }
    public function showmedicion(){
        
    }
}
?>