<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of view_records
 *
 * @author Keshav K
 */
class view_records extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('forms_model');
    }
    
    public function _remap($form_id) {
        $form_data = $this->forms_model->form_data($form_id);
        
        
        $data = array(
            'schema' => $this->forms_model->get_fields($form_id),
            'records' => $this->forms_model->get_records($form_data['form_schema_name']),
            'form_name' => $form_data['form_name']
        );
        
        $this->load->view('view_records', $data);
    }
}
