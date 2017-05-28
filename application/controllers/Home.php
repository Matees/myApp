<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
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
        echo json_encode($this->input->post("email"));
        $data['sofer'] = $this->tables_model->getDrivers();

        $data['druh_platby'] = $this->home_model->getDruhPlatby();

        $data['pocet_jazd'] = $this->home_model->getPocetJazd();

        $data['najazdene'] = $this->home_model->getNajazdeneKm();

        $data['pocet_zakaznikov'] = $this->home_model->getPocetZakaznikov();

        $this->load->view('template/header', $data);
        $this->load->view('home', $data);
        //$this->load->view('template/footer');
    }

    public function data(){
        echo json_encode($this->home_model->getPocetZakaznikov());
    }
}
