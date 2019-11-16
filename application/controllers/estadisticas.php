<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estadisticas extends MY_Controller {
    function __construct(){
		parent::__construct();
		$this->load->helper('url');
        $this->load->library('session');
        $this->ValidarInicioSesion();
    }

    public function index(){
        $this->load->view('/Usuario/EstadisticasUsuario.php');
    }
}
?>