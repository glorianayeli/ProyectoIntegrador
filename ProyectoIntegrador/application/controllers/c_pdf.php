<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pdf extends MY_Controller {
    function __construct(){
		parent::__construct();
		$this->load->helper('url');
        $this->load->library('session');
        $this->load->model('mod_datos');
        $this->ValidarInicioSesion();
    }
    function datoschidos(){
        $res['data'] = $this->mod_datos->getDatosChidos();
        $this->load->view('Usuario/pdf', $res);
        echo $res;
        //foreach($res as $dato){

        //} 

    }
}
?>