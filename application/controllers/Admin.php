<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('ion_auth');
        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data['title']   = 'Home';
        $data['menu']    = 'home';
        $data['sub']     = 'Welcome ' . $this->ion_auth->user()->row()->username . ' , Love to see you back. ';
        $data['content'] = 'pages/home.php';

        $this->load->view('backEnd/index.php', $data);
    }

    public function change()
    {
        $data['title']   = 'Home';
        $data['menu']    = 'home';
        $data['sub']     = 'Welcome ' . $this->ion_auth->user()->row()->username . ' , Love to see you back. ';
        $data['content'] = 'pages/home.php';

        $this->load->view('auth/index', $data);
    }
}
