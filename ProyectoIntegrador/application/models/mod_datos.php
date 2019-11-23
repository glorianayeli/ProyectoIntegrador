    <?php
        
        defined('BASEPATH') OR exit('No direct script access allowed');
        
        class Mod_datos extends CI_Model {
        
            // Constructor
            public function __construct()
            {
                parent::__construct();

                $this->db->initialize();
            }
            public function getDatosChidos(){
                $data = $this->db->GET('mediciones');
                return $data->result_Array();
            }
        }
    ?>
