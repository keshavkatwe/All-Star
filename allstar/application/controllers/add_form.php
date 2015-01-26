<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of add_form
 *
 * @author Keshav K
 */
class Add_form extends CI_Controller {

    public function index() {

        
        $this->load->dbforge();
        
        $config = array(
            array(
                'field' => 'form-title',
                'label' => 'Form Title',
                'rules' => 'required'
            ),
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('add_form');
        } else {

            
            $form_title = $this->input->post('form-title');
            $form_description = $this->input->post('form-description');
            $table_name = str_replace(' ', '_', strtolower($form_title));
            
            $form_data = array(
                'form_name' => $form_title,
                'form_description' => $form_description,
                'form_schema_name' => $table_name
            );
            
            
            $this->db->insert('_forms', $form_data); 
            $form_id = $this->db->insert_id();
            
            $field_name = $this->input->post('field-name');
            $field_hint = $this->input->post('field-hint');
            $field_type = $this->input->post('field-type');
            $field_extra = $this->input->post('field-extra');
            $field_required = $this->input->post('field-required');
            
            $schema_data = array();
            $fields = array(
                'id' => array(
                    'type' => 'INT',
                    'constraint' => 5, 
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE
                )
            );
            
            for($i=0;$i<count($field_name);$i++)
            {
                
                $field_schema_name = str_replace(' ', '_', strtolower($field_name[$i]));
                
                $fields[$field_schema_name] = array(
                    'type' => 'VARCHAR',
                    'constraint' => '1000',
                    'null' => TRUE,
                );
                
                $schema_data[] = array(
                    'field_title' => $field_name[$i],
                    'field_schema_title' => $field_schema_name,
                    'field_hint' => $field_hint[$i],
                    'field_type' => $field_type[$i],
                    'field_extra' => $field_extra[$i],
                    'field_required' => (isset($field_required[$i])?true:false),
                    'form_id' => $form_id
                );   
            }
            
            
            $this->dbforge->add_field($fields);
            $this->dbforge->add_key('id', TRUE);
            $this->dbforge->create_table($table_name);
            
            
            $this->db->insert_batch('_schema', $schema_data); 
            $field_id = $this->db->insert_id();
            
            redirect(base_url());
        }
    }

    public function add_field() {
        $i = $this->input->post('index');
        
        $data = array(
          'index' => $i  
        );
        
        $this->load->view('subviews/add_field',$data);
    }
}
