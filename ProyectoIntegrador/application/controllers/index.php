<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends MY_Controller {
    function __construct(){
		parent::__construct();
        $this->load->helper('url');
    }
	
	public function index()
	{
        if($this->session->userdata('user')){
            redirect('PaginaPrincipal');
        }
		$this->load->view('/layouts/head.php');
		$this->load->view('/Usuario/Index.php');
		$this->load->view('/layouts/footer.php');
	}

	public function IniciarSesion(){
        if(isset($_POST['Contraseña'])){
            $this->load->model('mod_index');
            $usuario = $this->mod_index->ValidarUsuario($this->input->post('Correo'), md5($_POST['Contraseña']));
                /*$this->session->set_userdata('Nombre',$usuario['Nombre']);*/
                if($usuario){
                     //$this->session->set_userdata('Correo',$_POST['Correo']);
                    $this->session->set_userdata(
                        'user', 
                        array(
                            'id' => $usuario->ID,
                            'correo' => $usuario->Correo,
                            'nombre' => $usuario->Nombre
                        )
                    );
                    redirect('PaginaPrincipal');
                }    
                else{
                    $this->session->set_flashdata('error','contraseña o correo electrónico incorrecto');
                    return redirect('index');
                }
        }   
    }

    public function cerrarSesion(){
        $this->session->sess_destroy();
        redirect('index');
    }
}
?>
