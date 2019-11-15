<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaginaPrincipal extends MY_Controller {
    function __construct(){
		parent::__construct();
		$this->load->helper('url');
        $this->load->library('session');
    }

    public function index(){
        $this->load->view('/layouts/header.php');
        $this->load->view('/Usuario/PaginaPrincipalUsuario.php');
        $this->load->view('/layouts/footer.php');
    }
}
?>