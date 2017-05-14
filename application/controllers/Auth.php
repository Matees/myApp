<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function _construct()
    {
        parent::__construct();
        print_r($this->session->userdata);
    }

    public function register()
    {
        print_r($this->session->userdata);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('confirm', 'Confirm password', 'trim|required|matches[password]');
        $this->form_validation->set_error_delimiters('<p align="center" style="color: #CC0000; font-style: italic; padding-top: 10px">', '</p>');

        if($this->form_validation->run() && $this->auth_model->register()){
            redirect('home');
        }else{

        }
        $this->load->view('register');
    }

    function login()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if($this->form_validation->run())
        {
            if($this->auth_model->check())
            {
                $data = $this->auth_model->getUserData($_POST['email']);
                $data['logged_in'] = true;

                $this->session->set_userdata($data);

                redirect('home');
            }else
            {
                echo 'nie si zaregistrovany';
            }
        }
        else{

        }
        $this->load->view('login');
    }

    function logout(){
        print_r($this->session->userdata);
        $this->session->set_userdata(array('FirstName' => '', 'LastName' => '','Email' => '','logged_in' => '','uid' => '','logged in' =>''));
        $this->login();
    }
}
