<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
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
        $data['zakaznik'] = $this->tables_model->getCustomers();
        $this->load->view('template/header');
        $this->load->view('template/navigation');
        $this->load->view('home', $data);
        $this->load->view('template/footer');
    }
}
