<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Partner extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Partner_Model');
    }

    public function index($id = false)
    {
        if ($id == false) {
            $data['title']     = 'Partner';
            $data['menu']      = 'partner';
            $data['sub']       = 'Welcome Jhon Deo , Love to see you back. ';
            $data['content']   = 'pages/partner/index.php';
            $data['partners'] = $this->Partner_Model->get();

            $this->load->view('backEnd/index.php', $data);
        } else {
            $data['title']     = 'Partner';
            $data['menu']      = 'partner';
            $data['sub']       = 'Welcome Jhon Deo , Love to see you back. ';
            $data['content']   = 'pages/partner/edit.php';
            $data['partners'] = $this->Partner_Model->get($id);
            $this->load->view('backEnd/index.php', $data);
        }
    }

    public function create()
    {
        if (empty($_FILES)) {
            $data['title']     = 'Partner';
            $data['menu']      = 'partner';
            $data['sub']       = 'Welcome Jhon Deo , Love to see you back. ';
            $data['content']   = 'pages/partner/create.php';
            $data['partners'] = $this->Partner_Model->get();

            $this->load->view('backEnd/index.php', $data);
        } else {
            $config['upload_path']   = './uploads/partner/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '5000';
            $config['encrypt_name']  = true;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) {
                $this->session->set_flashdata('uploadError', '
                <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <span class="fa fa-close"></span> Data Unsaved <br>
                Please Check Your File <br>
                Max Size : 5MB | Allowed Types : gif, jpg, png, jpeg.
                </div>');
                redirect(site_url('partner'));
            } else {
                $image = array('upload_data' => $this->upload->data());
                $data = array(
                    'partner_image'     => $image['upload_data']['file_name'],
                );
                $this->Partner_Model->insert($data);
                $this->session->set_flashdata('success', '
                <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <span class="fa fa-check"></span> Success
                </div>');
                redirect(site_url('partner'));
            }
        }
    }

    public function delete()
    {
        $id = $this->input->post('id');
        $this->unsetFile($id);
        $this->Partner_Model->delete($id);
        $this->session->set_flashdata('success', '
        <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <span class="fa fa-check"></span> Success
        </div>');
        redirect(site_url('partner'));
    }

    public function update()
    {
        $id = $this->input->post('id');
        $config['upload_path'] = './uploads/partner/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']  = '5000';
        $config['encrypt_name']  = true;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) {
            $this->session->set_flashdata('uploadError', '
                <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <span class="fa fa-close"></span> Data Unsaved <br>
                Please Check Your File <br>
                Max Size : 5MB | Allowed Types : gif, jpg, png, jpeg.
                </div>');
            redirect(site_url('epartnervent'));
        } else {
            $image = array('upload_data' => $this->upload->data());
            $data = array(
                'partner_image'     => $image['upload_data']['file_name'],
            );
            $this->unsetFile($id);
            $this->Partner_Model->update($id, $data);
            $this->session->set_flashdata('success', '
                <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <span class="fa fa-check"></span> Success
                </div>');
            redirect(site_url('partner'));
        }
    }

    public function unsetFile($id)
    {
        $data = $this->Partner_Model->get($id);
        unlink('./uploads/partner/' . $data->partner_image);
    }
}
