<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model{

    function __construct() {
        parent::__construct();
    }

    public function add_customer(){
        $data = array(
            'meno' => $_POST['firstname'],
            'priezvisko' => $_POST['lastname'],
            'adresa' => $_POST['address'],
            'mobil' => $_POST['phone'],
        );
        return $this->db->insert('zakaznik', $data);
    }

    public function update_customer(){
        $data = array(
            'username' => $this->input->post('username'),
            'full_name' => $this->input->post('full_name'),
            'email' => $this->input->post('email')
        );

        $this->db->where('username', $this->input->post('username'));
        return  $this->db->update('customer', $data);
    }
}