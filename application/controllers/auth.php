<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function _construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }

    public function register()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('confirm', 'Confirm password', 'trim|required|matches[password]');

        if($this->form_validation->run() && $this->auth_model->register()){
            redirect('home');
        }else{

        }
        $this->load->view('register');

    }
}
