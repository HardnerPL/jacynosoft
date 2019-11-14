<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $data['title'] = "Home | JacynoSOFT";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/home', $data);
        $this->load->view('scripts/coreScripts', $data);
        $this->load->view('templates/footer', $data);
    }
}
