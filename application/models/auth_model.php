<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model{

    function __construct() {
        parent::__construct();
    }

    function register()
    {
        $data = array(
            'FirstName' => $_POST['firstname'],
            'LastName' => $_POST['lastname'],
            'Email' => $_POST['email'],
            'Password' => $_POST['password'],
        );
        return $this->db->insert('users', $data);
    }

    function check()
    {
        $select =  $this->db->where('Email', $_POST['email'])->where('Password', $_POST['password'])->get('users');
        if ($select->num_rows()>0)return $select->num_rows();
        else return false;
    }

    function getUserData($email)
    {
        $select = $this->db->where('Email', $email)->limit(1)->get('users');

        if($select->num_rows() > 0) return $select->row_array();
        else return false;
    }
}