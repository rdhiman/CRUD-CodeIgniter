<?php

class Site_Model extends CI_Model 
{
    function get_records()
    {
        $query = $this->db->get('customer');
        return $query->result();
    }
    
    function add_record($data)
    {
        $this->db->insert('customer', $data);
        return;
    }
    
    
    
    function get_one_row($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('customer');
        return $query->row();
    }
    
    function delete_record() 
    {
        $this->db->where('id', $this->uri->segment(3));
        $this->db->delete('customer');
    }
}