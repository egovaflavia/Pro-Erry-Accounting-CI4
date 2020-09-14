<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Service_Model');
        $this->load->model('Category_Service_Model');
    }

    public function index($id = false)
    {
        if ($id == false) {
            $data['title']   = 'Service';
            $data['menu']    = 'service';
            $data['sub']     = 'Welcome ' . $this->ion_auth->user()->row()->username . ' , Love to see you back. ';
            $data['content'] = 'pages/service/index.php';
            $data['services']  = $this->Service_Model->get();

            $this->load->view('backEnd/index.php', $data);
        } else {
            $data['title']     = 'Service';
            $data['menu']      = 'service';
            $data['sub']       = 'Welcome Jhon Deo , Love to see you back. ';
            $data['content']   = 'pages/service/edit.php';
            $data['services']  = $this->Service_Model->get($id);
            $data['categorys'] = $this->Category_Service_Model->get();
            $this->load->view('backEnd/index.php', $data);
        }
    }

    public function create()
    {
        if (empty($_POST)) {
            $data['title']   = 'Service';
            $data['menu']    = 'service';
            $data['sub']     = 'Welcome ' . $this->ion_auth->user()->row()->username . ' , Love to see you back. ';
            $data['content'] = 'pages/service/create.php';
            $data['categorys']  = $this->Category_Service_Model->get();

            $this->load->view('backEnd/index.php', $data);
        } else {
            $data = array(
                'category_service_id' => $this->input->post('category'),
                'service_desc' => $this->input->post('desc'),
            );
            $this->Service_Model->insert($data);
            $this->session->set_flashdata('success', '
                <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <span class="fa fa-check"></span> Success
                </div>');
            redirect(site_url('service'));
        }
    }

    public function delete()
    {
        $id = $this->input->post('id');
        $this->Service_Model->delete($id);
        $this->session->set_flashdata('success', '
        <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <span class="fa fa-check"></span> Success
        </div>');
        redirect(site_url('service'));
    }

    public function update()
    {
        $id = $this->input->post('id');
        $data = array(
            'category_service_id' => $this->input->post('category'),
            'service_desc' => $this->input->post('desc'),
        );
        $this->Service_Model->update($id, $data);
        $this->session->set_flashdata('success', '
            <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <span class="fa fa-check"></span> Success
            </div>');
        return redirect(site_url('service'));
    }
}
