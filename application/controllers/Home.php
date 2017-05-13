<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        print_r($this->session->userdata);
        if (!$this->session->userdata('logged_in'))
        {
            redirect('login');
        }
    }

    public function index()
	{
        $this->load->view('template/header');
        $this->load->view('template/navigation');
        $this->load->view('home');
        $this->load->view('template/footer');
    }
}
