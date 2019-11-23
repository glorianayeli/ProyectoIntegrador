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
        $this->load->view('/Usuario/PaginaPrincipalUsuario.php');
        $this->load->view('/layouts/footer.php');
    }
    public function showMedicion(){
        $result = $this->mod_paginaprincipal->ultimoId();
        echo json_encode($result);
    }
}
?>