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
        //$this->load->view('template/header');
        $this->load->view('example.php',(array)$output);
        //$this->load->view('template/footer');
    }

    public function zakaznik()
    {
        //print_r($this->session->userdata('Email'));
        $crud = new grocery_CRUD();
        $crud->required_fields('ID');
        $crud->set_table('zakaznik');
        if (!$this->tables_model->isAdmin()){
        $crud->unset_add();
        $crud->unset_edit();
        $crud->unset_delete();
        }
        $output = $crud->render();

        $this->_example_output($output);
    }

    public function users()
    {
        $crud = new grocery_CRUD();
        $crud->required_fields('ID');
        $crud->set_table('users');
        if (!$this->tables_model->isAdmin()){
            $crud->unset_add();
            $crud->unset_edit();
            $crud->unset_delete();
        }
        $output = $crud->render();

        $this->_example_output($output);
    }

    public function taxik()
    {
        $crud = new grocery_CRUD();
        $crud->required_fields('ID');
        $crud->set_table('taxik');
        if (!$this->tables_model->isAdmin()){
            $crud->unset_add();
            $crud->unset_edit();
            $crud->unset_delete();
        }
        $output = $crud->render();

        $this->_example_output($output);
    }

    public function sofer()
    {
        $crud = new grocery_CRUD();

        $crud->required_fields('ID');
        $crud->set_table('sofer');
        if (!$this->tables_model->isAdmin()){
            $crud->unset_add();
            $crud->unset_edit();
            $crud->unset_delete();
        }
        $output = $crud->render();

        $this->_example_output($output);
    }

    public function smena()
    {
        $crud = new grocery_CRUD();

        $crud->set_relation('Sofer_ID','sofer','ID');
        $crud->set_relation('Taxik_ID','taxik','ID');
        $crud->set_table('smena');
        if (!$this->tables_model->isAdmin()){
            $crud->unset_add();
            $crud->unset_edit();
            $crud->unset_delete();
        }
        $output = $crud->render();

        $this->_example_output($output);
    }

    public function jazda()
    {
        $crud = new grocery_CRUD();
        $crud->required_fields('ID');
        $crud->set_relation('Zakaznik_ID','zakaznik','ID');
        $crud->set_relation('Druh_platby_ID','druh_platby','ID');
        $crud->set_relation('smena_ID','smena','ID');
        $crud->set_table('jazda');
        if (!$this->tables_model->isAdmin()){
            $crud->unset_add();
            $crud->unset_edit();
            $crud->unset_delete();
        }
        $output = $crud->render();

        $this->_example_output($output);
    }

    public function druh_platby()
    {
        $crud = new grocery_CRUD();
        $crud->required_fields('ID');
        $crud->set_table('druh_platby');
        if (!$this->tables_model->isAdmin()){
            $crud->unset_add();
            $crud->unset_edit();
            $crud->unset_delete();
        }
        $output = $crud->render();

        $this->_example_output($output);
    }
}