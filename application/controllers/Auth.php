<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function _construct()
    {
        parent::__construct();
        //$this->load->model('auth_model');
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

            redirect('login');
        }else{

        }
        $this->load->view('register');
    }

    function login()
    {
        //print_r($this->session->userdata());
        //echo $this->session->userdata('userdata', 'FirstName');
        //echo json_encode($this->auth_model->check());

        //echo json_encode($this->input->get_post('password'));
        //echo json_encode($_POST['password']);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_error_delimiters('<p align="center" style="color: #CC0000; font-style: italic; padding-top: 10px">', '</p>');

        if($this->form_validation->run())
        {
            //echo 'OK val';
            if($this->auth_model->check())
            {
                //echo 'OK';
                //echo $_POST['email'];
                $data = $this->auth_model->getUserData($_POST['email']);
                $data['logged_in'] = true;
                //echo json_encode($data);
                $this->session->set_userdata($data);

                redirect('home');
            }else
            {
                echo 'nie si zaregistrovany';
            }
        }
        else{
            //echo 'val null';
        }
        $this->load->view('login');
    }

    function logout(){
        $this->session->set_userdata(array('FirstName' => '', 'LastName' => '','Email' => '','logged_in' => '','uid' => ''));
        $this->login();
        //redirect('login');
    }

    /*function remove(){
        $this->session->unset_userdata('ID','LastName', 'Email', 'Password', 'logged_in' );
    }*/
}
