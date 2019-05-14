<?php

class Home extends Framework
{

    public function __construct()
    {
        $this->library('DatabaseManager');
        $this->library('SessionManager');
    }

    public function index()
    {
        $data['title'] = "Home | Jacynosoft";
        $this->view('header', $data);
        $this->view('home', $data);
        $this->script('coreScripts');
        $this->view('footer', $data);
    }

    public function pageNotFinished()
    {
        $data['title'] = "Work in progress | Jacynosoft";
        $this->view('header', $data);
        $this->view('notFinished', $data);
        $this->script('coreScripts');
        $this->view('footer', $data);
    }

    public function pageNotFound404()
    {
        $data['title'] = "404 Not Found | Jacynosoft";
        $this->view('header', $data);
        $this->view('404', $data);
        $this->script('coreScripts');
        $this->view('footer', $data);
    }

}
