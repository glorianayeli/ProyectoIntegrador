<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estadisticas extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->helper('url');
        $this->load->library('session');
    }

    public function index(){
        $this->load->view('/layouts/header.php');
        $this->load->view('/Usuario/EstadisticasUsuario.php');
        $this->load->view('/layouts/footer.php');
    }
}
?>