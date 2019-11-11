<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->helper('url');
    }
	
	public function index()
	{
        if($this->session->userdata('Correo')){
            redirect('PaginaPrincipal');
        }
		$this->load->view('/layouts/header.php');
		$this->load->view('/Usuario/Index.php');
		$this->load->view('/layouts/footer.php');
	}

	public function IniciarSesion(){
        if(isset($_POST['Contraseña'])){
            $this->load->model('mod_index');
            if($this->mod_index->ValidarUsuario($_POST['Correo'],md5($_POST['Contraseña']))){
                $this->session->set_userdata('Correo',$_POST['Correo']);
                redirect('PaginaPrincipal');
            }
            else{
                redirect('index#bad-password');
            }
        }   
    }
    public function cerrarSesion(){
        $this->session->sess_destroy();
        redirect('index');
    }
}
?>
