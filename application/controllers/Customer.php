<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in'))
        {
            redirect('login');
        }
    }

    public function index()
    {

    }

    public function create()
    {
        $this->form_validation->set_rules('firstname', 'Username', 'required');
        $this->form_validation->set_rules('lastname', 'Full Name', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_error_delimiters('<p align="center" style="color: #CC0000; font-style: italic; padding-top: 10px">', '</p>');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('template/header');
            $this->load->view('template/navigation');
            $this->load->view('create');
            $this->load->view('template/footer');
        }else{
            $this->customer_model->add_customer();
        }
    }
}