<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profil_Model');
    }

    public function index()
    {
        $data['title']   = 'Profil';
        $data['menu']    = 'profil';
        $data['sub']     = 'Welcome ' . $this->ion_auth->user()->row()->username . ' , Love to see you back. ';
        $data['content'] = 'pages/profil/edit.php';
        $data['profils'] = $this->Profil_Model->get(1);
        $this->load->view('backEnd/index.php', $data);
    }

    public function update()
    {
        $id = 1;
        $data = array(
            'profil_name'    => $this->input->post('name'),
            'profil_phone'   => $this->input->post('phone'),
            'profil_wa'      => $this->input->post('wa'),
            'profil_ig'      => $this->input->post('ig'),
            'profil_fb'      => $this->input->post('fb'),
            'profil_tw'      => $this->input->post('tw'),
            'profil_lk'      => $this->input->post('lk'),
            'profil_email'   => $this->input->post('email'),
            'profil_address' => $this->input->post('address'),
            'profil_about'   => $this->input->post('about'),
            'profil_service' => $this->input->post('service'),
        );
        $this->Profil_Model->update($id, $data);
        $this->session->set_flashdata('success', '
            <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <span class="fa fa-check"></span> Success
            </div>');
        return redirect(site_url('profil'));
    }
}
