<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tables extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        /*if (!$this->session->userdata('logged_in'))
        {
            redirect('login');
        }*/
    }

    public function index()
    {

    }

    public function _example_output($output = null)
    {
        $this->load->view('template/header');
        $this->load->view('example.php',(array)$output);
        //$this->load->view('template/footer');
    }

    public function zakaznik()
    {
        $crud = new grocery_CRUD();
        $crud->required_fields('ID');
        $crud->set_table('zakaznik');
        $output = $crud->render();

        $this->_example_output($output);
    }

    public function users()
    {
        $crud = new grocery_CRUD();
        $crud->required_fields('ID');
        $crud->set_table('users');
        $output = $crud->render();

        $this->_example_output($output);
    }

    public function taxik()
    {
        $crud = new grocery_CRUD();
        $crud->required_fields('ID');
        $crud->set_table('taxik');
        $output = $crud->render();

        $this->_example_output($output);
    }

    public function sofer()
    {
        $crud = new grocery_CRUD();

        $crud->required_fields('ID');
        $crud->set_table('sofer');
        $output = $crud->render();

        $this->_example_output($output);
    }

    public function smena()
    {
        $crud = new grocery_CRUD();

        $crud->set_relation('Sofer_ID','Sofer','ID');
        $crud->set_relation('Taxik_ID','Taxik','ID');
        $crud->set_table('smena');
        $output = $crud->render();

        $this->_example_output($output);
    }

    public function jazda()
    {
        $crud = new grocery_CRUD();
        $crud->required_fields('ID');
        $crud->set_relation('Zakaznik_ID','Zakaznik','ID');
        $crud->set_relation('Druh_platby_ID','Druh_platby','ID');
        $crud->set_relation('smena_ID','Smena','ID');
        $crud->set_table('jazda');
        $output = $crud->render();

        $this->_example_output($output);
    }

    public function druh_platby()
    {
        $crud = new grocery_CRUD();
        $crud->required_fields('ID');
        $crud->set_table('druh_platby');
        $output = $crud->render();

        $this->_example_output($output);
    }
}