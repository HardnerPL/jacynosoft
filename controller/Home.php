<?php

require_once ROOT . "framework/Framework.php";

class Home extends Framework
{

    public function __construct()
    {
        $this->library('DatabaseManager');
        $this->library('SessionManager');
    }

    public function index()
    {
        $this->pageNotFinished();
    }

    public function pageNotFinished()
    {
        $data['title'] = "Work in progress | English Learning";
        $this->view('header', $data);
        $this->view('notFinished', $data);
        $this->script('coreScripts');
    }

    public function pageNotFound404()
    {
        $data['title'] = "404 Not Found";
        $this->view('header', $data);
        $this->view('404', $data);
        $this->script('coreScripts');
        $this->view('footer', $data);
    }

}
