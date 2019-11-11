<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registros extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Registros_model');
    }

    function index(){
        $this->load->view('/layouts/header.php');
        $this->load->view('/Usuario/Registro.php');
        $this->load->view('/layouts/footer.php');
    }

    function RecibirDatos(){
        $data = array(
            'nombre'=> $this->input->post('nombre'),
            'ApellidoPatero'=> $this->input->post('ApellidoPatero'),
            'ApellidoMaterno' => $this->input->post('ApellidoMaterno'),
            'email' => $this->input->post('email'),
            'puesto' => $this->input->post('puesto'),
            'edad' => $this->input->post('edad'),
            'genero' => $this->input->post('genero')
        );
        $this->Registros_model->crearRegistro($data);
    }
}
?>