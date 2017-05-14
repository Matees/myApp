<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tables_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function getCustomers($id = FALSE){
        if ($id === FALSE)
        {
            $query = $this->db->get('zakaznik');
            return $query->result_array();
        }

        $query = $this->db->get_where('zakaznik', array('ID' => $id));
        return $query->row-array();
    }

    public function setCustomers($id = 0)
    {
        foreach ($_POST as $key => $value) {
            if($key != 'submit')
                $data[$key] = $value;
        }
        if($id == 0){
            return $this->db->insert('zakaznik', $data);
        }else
        {
            $this->db->where('zakaznik', $id);
            return $this->db->update('zakaznik', $data);
        }
    }

    public function deleteCustomers($id = 0)
    {
        $this->db->where('ID', $id);
        return $this->db->delete('zakaznik');
    }
}
