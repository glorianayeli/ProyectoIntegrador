<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Registros extends MY_Controller {
    function __construct(){
		parent::__construct();
		$this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Registros_model');
        $this->ValidarInicioSesion();
    }

    public function index(){
        $this->load->view('/layouts/head.php');
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
            'genero' => $this->input->post('Genero'),
            'pass'=>md5($_POST['pass'])
            
        );
        $usuario = $this->input->post('email');
        $status = $this->Registros_model->crearRegistro($data,$status,$usuario);
        if($status==true){
            $this->session->set_flashdata('registroExitoso','Su registro fue exitoso');
            redirect('index');
            
        }
        else
        {
            $this->session->set_flashdata('registroError','Algo fallo en su registro');
            redirect('c_Registros');
        }
    }
}
?>