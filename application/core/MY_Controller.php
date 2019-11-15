<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class MY_Controller extends CI_Controller {
    
        // Constructor
        public function __construct()
        {
            parent::__construct();
            
            $this->load->helper('url');
            $this->load->library('carabiner');

            $this->DefineCssResources();
            $this->DefineJsResources();       
        }

        // Define los recursos css base
        public function DefineCssResources()
        {
            $this->carabiner->css(array(
                array('assets/css/libs/bootstrap.css'),
                array('assets/css/views/normalize.css')
            ));
        }

        // Define los recursos js base
        public function DefineJsResources()
        {
            $this->carabiner->js('https://code.jquery.com/jquery-3.3.1.slim.min.js');
            $this->carabiner->js('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
            $this->carabiner->js('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
            $this->carabiner->js('https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js');
        }
    }
?>