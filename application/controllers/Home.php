<?php

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('user_agent');
		$this->load->helper('verification_helper');
		$this->load->model('language_model');
		$this->load->database();
	}

	public function index()
	{
		$data['lang'] = $this->language_model->get_page_texts('home');
		$this->load->view('templates/header', $data);
		$this->load->view('home/home', $data);
		$this->load->view('templates/footer', $data);
	}
}
