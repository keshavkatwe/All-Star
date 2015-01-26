<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('forms_model');
    }    
    
    public function index()
    {
        
        $data= array(
            'forms' => $this->forms_model->list_forms()
        );
        $this->load->view('home', $data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */