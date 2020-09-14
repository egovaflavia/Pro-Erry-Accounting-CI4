<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Slide_Model');
        $this->load->model('Team_Model');
        $this->load->model('Partner_Model');
        $this->load->model('Banner_Model');
    }

    public function index()
    {
        $data['banners'] = $this->Banner_Model->get();
        $data['partners'] = $this->Partner_Model->get();
        $data['teams'] = $this->Team_Model->get();
        $data['slides'] = $this->Slide_Model->get();
        $data['content']   = 'pages/home.php';
        $this->load->view('frontEnd/index.php', $data);
    }
}
