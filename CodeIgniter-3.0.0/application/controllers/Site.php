<?php

class Site extends CI_Controller 
{
    function index()
    {
        $data = array();
        
        if($query = $this->Site_model->get_records())
        {
            $data['records'] = $query;
        }
        
        $this->load->view('options_view', $data);
    }
    
    function create()
    {
        $data = array(
            'firstName' => $this->input->post('firstName'),
            'lastName' => $this->input->post('lastName'),
            'address' => $this->input->post('address')
        );
        
        $this->Site_model->add_record($data);
        $this->index();
        
    }
    
    function edit($id)
    {
        $row = $this->Site_model->get_one_row($id);
        $data['r'] = $row;
        $this->load->view('edit',$data);
    }
    
    function update($id)
    {
        $this->db->where('id',$id);
        $data = array(
            'firstName' => $this->input->post('firstName'),
            'lastName' => $this->input->post('lastName'),
            'address' => $this->input->post('address')
        );
        $this->db->update('customer',$data);
        $this->index();
    }
    
    function delete()
    {
        $this->Site_model->delete_record();
        $this->index();
    }
}
