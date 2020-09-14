<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banner extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Banner_Model');
    }

    public function index($id = false)
    {
        if ($id == false) {
            $data['title']     = 'Banner';
            $data['menu']      = 'banner';
            $data['sub']     = 'Welcome ' . $this->ion_auth->user()->row()->username . ' , Love to see you back. ';
            $data['content']   = 'pages/banner/index.php';
            $data['banners'] = $this->Banner_Model->get(1);
            $this->load->view('backEnd/index.php', $data);
        } else {
            $data['title']     = 'Banner';
            $data['menu']      = 'banner';
            $data['sub']     = 'Welcome ' . $this->ion_auth->user()->row()->username . ' , Love to see you back. ';
            $data['content']   = 'pages/banner/edit.php';
            $data['banners'] = $this->Banner_Model->get(1);
            $this->load->view('backEnd/index.php', $data);
        }
    }

    public function update()
    {
        $id = $this->input->post('id');
        if ($_FILES['foto_one']['name'] == '') {
            $config['upload_path'] = './uploads/banner/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']  = '10000';
            $config['encrypt_name']  = true;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto_two')) {
                $this->session->set_flashdata('uploadError', '
                <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <span class="fa fa-close"></span> Data Unsaved <br>
                Please Check Your File <br>
                Max Size : 10MB | Allowed Types : gif, jpg, png, jpeg.
                </div>');
                redirect(site_url('banner'));
            } else {
                $image = array('upload_data' => $this->upload->data());
                $data = array(
                    'banner_two' => $image['upload_data']['file_name'],
                );
                $this->unsetFileTwo($id);
                $this->Banner_Model->update($id, $data);
                $this->session->set_flashdata('success', '
                <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <span class="fa fa-check"></span> Success
                </div>');
                redirect(site_url('banner'));
            }
        } elseif ($_FILES['foto_two']['name'] == '') {
            $config['upload_path'] = './uploads/banner/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']  = '10000';
            $config['encrypt_name']  = true;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto_one')) {
                $this->session->set_flashdata('uploadError', '
                <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <span class="fa fa-close"></span> Data Unsaved <br>
                Please Check Your File <br>
                Max Size : 10MB | Allowed Types : gif, jpg, png, jpeg.
                </div>');
                redirect(site_url('banner'));
            } else {
                $image = array('upload_data' => $this->upload->data());
                $data = array(
                    'banner_one' => $image['upload_data']['file_name'],
                );
                $this->unsetFileOne($id);
                $this->Banner_Model->update($id, $data);
                $this->session->set_flashdata('success', '
                <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <span class="fa fa-check"></span> Success
                </div>');
                redirect(site_url('banner'));
            }
        } else {
            $config['upload_path'] = './uploads/banner/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']  = '10000';
            $config['encrypt_name']  = true;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto_one')) {
                $this->session->set_flashdata('uploadError', '
                <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <span class="fa fa-close"></span> Data Unsaved <br>
                Please Check Your File <br>
                Max Size : 10MB | Allowed Types : gif, jpg, png, jpeg.
                </div>');
            } else {
                $image = array('upload_data' => $this->upload->data());
                $data = array(
                    'banner_one' => $image['upload_data']['file_name'],
                );
                $this->unsetFileOne($id);
                $this->Banner_Model->update($id, $data);
                $this->session->set_flashdata('success', '
                <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <span class="fa fa-check"></span> Success
                </div>');
            }

            $config['upload_path'] = './uploads/banner/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']  = '10000';
            $config['encrypt_name']  = true;

            if (!$this->upload->do_upload('foto_two')) {
                $this->session->set_flashdata('uploadError', '
                <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <span class="fa fa-close"></span> Data Unsaved <br>
                Please Check Your File <br>
                Max Size : 10MB | Allowed Types : gif, jpg, png, jpeg.
                </div>');
            } else {
                $image = array('upload_data' => $this->upload->data());
                $data = array(
                    'banner_two' => $image['upload_data']['file_name'],
                );
                $this->unsetFileTwo($id);
                $this->Banner_Model->update($id, $data);
                $this->session->set_flashdata('success', '
                <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <span class="fa fa-check"></span> Success
                </div>');
            }

            redirect(site_url('banner'));
        }
    }

    public function unsetFileOne($id)
    {
        $data = $this->Banner_Model->get($id);
        unlink('./uploads/banner/' . $data->banner_one);
    }

    public function unsetFileTwo($id)
    {
        $data = $this->Banner_Model->get($id);
        unlink('./uploads/banner/' . $data->banner_two);
    }
}
