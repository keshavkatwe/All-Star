<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of forms_model
 *
 * @author Keshav K
 */
class forms_model extends CI_Model{
    public function list_forms() {
        $query = $this->db->get('_forms');
        return $query->result_array();
    }
    
    
    public function form_data($form_id) {
        $this->db->where('form_id', $form_id);
        $query = $this->db->get('_forms');
        return $query->row_array();
    }
    
    public function get_fields($form_id) {
        $this->db->where('form_id', $form_id);
        $query = $this->db->get('_schema');
        return $query->result_array();
    }
}
