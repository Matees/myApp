<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function _construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }

    public function register()
    {
        //echo $_POST;
        //echo json_encode($_POST);
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('confirm', 'Confirm password', 'trim|required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_error_delimiters('<p align="center" style="color: #CC0000; font-style: italic; padding-top: 10px">', '</p>');

        if($this->form_validation->run() && $this->auth_model->register()){
            $data = $this->auth_model->getUserData($_POST['email']);
            $this->session->set_userdata('userdata',$data);

            redirect('home');
        }else{

        }
        $this->load->view('register');
    }

    function login()
    {
        //print_r($_POST['email']);
        echo json_encode($this->auth_model->check());
        //echo json_encode($this->input->get_post('password'));
        //echo json_encode($_POST['password']);
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_error_delimiters('<p align="center" style="color: #CC0000; font-style: italic; padding-top: 10px">', '</p>');

        if($this->form_validation->run())
        {
            if($this->auth_model->check())
            {
                $data = $this->auth_model->getUserData($this->input->post('email'));
                $data['logged_in'] = true;

                $this->session->set_userdata('userdata',$data);

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
        $this->session->set_userdata(array('FirstName' => '', 'LastName' => '','Email' => '','logged_in' => '','uid' => ''));
        $this->login();
        //redirect('login');
    }
}
