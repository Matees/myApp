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
            'Password' => sha1($_POST['password']),
        );
        return $this->db->insert('users', $data);
    }
}