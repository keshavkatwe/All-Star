<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of view_form
 *
 * @author Keshav K
 */
class View_form extends CI_Controller{
    
    
    public function __construct() {
        parent::__construct();
        $this->load->model('forms_model');
    }
    
    public function _remap($form_id) {
        
        $form_data = $this->forms_model->form_data($form_id);
        $fields_data = $this->forms_model->get_fields($form_id);
        
        $data = array(
            'form_data' => $form_data,
            'fields_data' => $fields_data
        );
        
        $this->load->view('view_form', $data);
    }
}
