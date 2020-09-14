<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slide extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Slide_Model');
    }

    public function index($id = false)
    {
        if ($id == false) {
            $data['title']   = 'Slide';
            $data['menu']    = 'slide';
            $data['sub']     = 'Welcome ' . $this->ion_auth->user()->row()->username . ' , Love to see you back. ';
            $data['content'] = 'pages/slide/index.php';
            $data['slides']  = $this->Slide_Model->get();

            $this->load->view('backEnd/index.php', $data);
        } else {
            $data['title']   = 'Slide';
            $data['menu']    = 'slide';
            $data['sub']     = 'Welcome ' . $this->ion_auth->user()->row()->username . ' , Love to see you back. ';
            $data['content'] = 'pages/slide/edit.php';
            $data['slides']  = $this->Slide_Model->get($id);
            $this->load->view('backEnd/index.php', $data);
        }
    }

    public function create()
    {
        if (empty($_POST)) {
            $data['title']   = 'Slide';
            $data['menu']    = 'slide';
            $data['sub']     = 'Welcome ' . $this->ion_auth->user()->row()->username . ' , Love to see you back. ';
            $data['content'] = 'pages/slide/create.php';

            $this->load->view('backEnd/index.php', $data);
        } else {
            $config['upload_path'] = './uploads/slide/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']  = '10000';
            $config['encrypt_name']  = true;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                $this->session->set_flashdata('uploadError', '
                <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <span class="fa fa-close"></span> Data Unsaved <br>
                Please Check Your File <br>
                Max Size : 10MB | Allowed Types : gif, jpg, png, jpeg.
                </div>');
                redirect(site_url('slide'));
            } else {
                $image = array('upload_data' => $this->upload->data());
                $data = array(
                    'slide_title' => $this->input->post('title'),
                    'slide_cap' => $this->input->post('cap'),
                    'slide_img' => $image['upload_data']['file_name'],
                );
                $this->Slide_Model->insert($data);
                $this->session->set_flashdata('success', '
                <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <span class="fa fa-check"></span> Success
                </div>');
                redirect(site_url('slide'));
            }
        }
    }

    public function delete()
    {
        $id = $this->input->post('id');
        $this->unsetFile($id);
        $this->Slide_Model->delete($id);
        $this->session->set_flashdata('success', '
        <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <span class="fa fa-check"></span> Success
        </div>');
        redirect(site_url('slide'));
    }

    public function update()
    {
        $id = $this->input->post('id');
        if ($_FILES['foto']['name'] == '') {
            $data = array(
                'slide_title' => $this->input->post('title'),
                'slide_cap' => $this->input->post('cap')
            );
            $this->Slide_Model->update($id, $data);
            $this->session->set_flashdata('success', '
            <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <span class="fa fa-check"></span> Success
            </div>');
            return redirect(site_url('slide'));
        } else {

            $config['upload_path'] = './uploads/slide/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']  = '10000';
            $config['encrypt_name']  = true;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                $this->session->set_flashdata('uploadError', '
                <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <span class="fa fa-close"></span> Data Unsaved <br>
                Please Check Your File <br>
                Max Size : 10MB | Allowed Types : gif, jpg, png, jpeg.
                </div>');
                redirect(site_url('slide'));
            } else {
                $image = array('upload_data' => $this->upload->data());
                $data = array(
                    'slide_title' => $this->input->post('title'),
                    'slide_cap' => $this->input->post('cap'),
                    'slide_img' => $image['upload_data']['file_name'],
                );
                $this->unsetFile($id);
                $this->Slide_Model->update($id, $data);
                $this->session->set_flashdata('success', '
                <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <span class="fa fa-check"></span> Success
                </div>');
                redirect(site_url('slide'));
            }
        }
    }

    public function unsetFile($id)
    {
        $data = $this->Slide_Model->get($id);
        unlink('./uploads/slide/' . $data->slide_img);
    }
}
