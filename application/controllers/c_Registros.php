<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Registros extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Registros_model');
    }

    public function index(){
        $this->load->view('/layouts/header.php');
        $this->load->view('/Usuario/Registro.php');
        $this->load->view('/layouts/footer.php');
    }

    public function RecibirDatos(){
        $status = false;
        $data = array(
            'nombre'=> $this->input->post('nombre'),
            'ApellidoPaterno'=> $this->input->post('ApellidoPaterno'),
            'ApellidoMaterno' => $this->input->post('ApellidoMaterno'),
            'Correo' => $this->input->post('email'),
            'puesto' => $this->input->post('puesto'),
            'edad' => $this->input->post('edad'),
            'genero' => $this->input->post('Genero'),
            'pass'=>md5($_POST['pass'])
            
        );
        $status = $this->Registros_model->crearRegistro($data,$status);
        if($status==true){
            redirect('index.php', 'refresh');
        }
    }
}
?>