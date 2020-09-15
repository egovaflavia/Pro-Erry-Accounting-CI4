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
        $this->load->model('Profil_Model');
        $this->load->model('Event_Model');
        $this->load->model('Training_Model');
        $this->load->model('Service_Model');
        $this->load->model('Category_Training_Model');
        $this->load->model('Category_Service_Model');
    }

    public function index()
    {
        $data['category_service']  = $this->Category_Service_Model->get();
        $data['category_training'] = $this->Category_Training_Model->get();
        $data['events']            = $this->Event_Model->get();
        $data['profils']           = $this->Profil_Model->get();
        $data['banners']           = $this->Banner_Model->get();
        $data['partners']          = $this->Partner_Model->get();
        $data['teams']             = $this->Team_Model->get();
        $data['slides']            = $this->Slide_Model->get();
        $data['content']           = 'pages/home.php';
        $this->load->view('frontEnd/index.php', $data);
    }

    public function training($id)
    {
        $data['category_service']  = $this->Category_Service_Model->get();
        $data['category_training'] = $this->Category_Training_Model->get();
        $data['training']          = $this->Training_Model->getByIdTraining($id);
        $data['events']            = $this->Event_Model->get();
        $data['profils']           = $this->Profil_Model->get();
        $data['banners']           = $this->Banner_Model->get();
        $data['partners']          = $this->Partner_Model->get();
        $data['teams']             = $this->Team_Model->get();
        $data['slides']            = $this->Slide_Model->get();
        $data['content']           = 'pages/training.php';
        $this->load->view('frontEnd/index.php', $data);
    }

    public function training_detail($id)
    {
        $data['category_service']  = $this->Category_Service_Model->get();
        $data['category_training'] = $this->Category_Training_Model->get();
        $data['training']          = $this->Training_Model->getByIdTraining($id);
        $data['detail_training']   = $this->Training_Model->get($id);
        $data['events']            = $this->Event_Model->get();
        $data['profils']           = $this->Profil_Model->get();
        $data['banners']           = $this->Banner_Model->get();
        $data['partners']          = $this->Partner_Model->get();
        $data['teams']             = $this->Team_Model->get();
        $data['slides']            = $this->Slide_Model->get();
        $data['content']           = 'pages/detail_training.php';
        $this->load->view('frontEnd/index.php', $data);
    }

    public function service_detail($id)
    {
        $data['category_service']  = $this->Category_Service_Model->get();
        $data['category_training'] = $this->Category_Training_Model->get();
        $data['training']          = $this->Training_Model->getByIdTraining($id);
        $data['detail_service']    = $this->Service_Model->getService($id);
        $data['detail_training']   = $this->Training_Model->get($id);
        $data['events']            = $this->Event_Model->get();
        $data['profils']           = $this->Profil_Model->get();
        $data['banners']           = $this->Banner_Model->get();
        $data['partners']          = $this->Partner_Model->get();
        $data['teams']             = $this->Team_Model->get();
        $data['slides']            = $this->Slide_Model->get();
        $data['content']           = 'pages/detail_service.php';
        $this->load->view('frontEnd/index.php', $data);
    }

    public function profil()
    {
        $data['category_service']  = $this->Category_Service_Model->get();
        $data['category_training'] = $this->Category_Training_Model->get();
        $data['events']            = $this->Event_Model->get();
        $data['profils']           = $this->Profil_Model->get();
        $data['banners']           = $this->Banner_Model->get();
        $data['partners']          = $this->Partner_Model->get();
        $data['teams']             = $this->Team_Model->get();
        $data['slides']            = $this->Slide_Model->get();
        $data['content']           = 'pages/profil.php';
        $this->load->view('frontEnd/index.php', $data);
    }

    public function event_detail()
    {
        $data['category_service']  = $this->Category_Service_Model->get();
        $data['category_training'] = $this->Category_Training_Model->get();
        $data['events']            = $this->Event_Model->get();
        $data['profils']           = $this->Profil_Model->get();
        $data['banners']           = $this->Banner_Model->get();
        $data['partners']          = $this->Partner_Model->get();
        $data['teams']             = $this->Team_Model->get();
        $data['slides']            = $this->Slide_Model->get();
        $data['content']           = 'pages/detail_event.php';
        $this->load->view('frontEnd/index.php', $data);
    }
}
