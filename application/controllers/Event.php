<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Event_Model');
    }

    public function index($id = false)
    {
        if ($id == false) {
            $data['title']     = 'Event';
            $data['menu']      = 'event';
            $data['sub']       = 'Welcome Jhon Deo , Love to see you back. ';
            $data['content']   = 'pages/event/index.php';
            $data['events'] = $this->Event_Model->get();

            $this->load->view('backEnd/index.php', $data);
        } else {
            $data['title']     = 'Event';
            $data['menu']      = 'event';
            $data['sub']       = 'Welcome Jhon Deo , Love to see you back. ';
            $data['content']   = 'pages/event/edit.php';
            $data['events'] = $this->Event_Model->get($id);
            $this->load->view('backEnd/index.php', $data);
        }
    }

    public function create()
    {
        if (empty($_FILES)) {
            $data['title']     = 'Event';
            $data['menu']      = 'event';
            $data['sub']       = 'Welcome Jhon Deo , Love to see you back. ';
            $data['content']   = 'pages/event/create.php';
            $data['events'] = $this->Event_Model->get();

            $this->load->view('backEnd/index.php', $data);
        } else {
            $config['upload_path']   = './uploads/event/';
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
                redirect(site_url('event'));
            } else {
                $image = array('upload_data' => $this->upload->data());
                $data = array(
                    'event_image'     => $image['upload_data']['file_name'],
                );
                $this->Event_Model->insert($data);
                $this->session->set_flashdata('success', '
                <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <span class="fa fa-check"></span> Success
                </div>');
                redirect(site_url('event'));
            }
        }
    }

    public function delete()
    {
        $id = $this->input->post('id');
        $this->unsetFile($id);
        $this->Event_Model->delete($id);
        $this->session->set_flashdata('success', '
        <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <span class="fa fa-check"></span> Success
        </div>');
        redirect(site_url('event'));
    }

    public function update()
    {
        $id = $this->input->post('id');
        $config['upload_path'] = './uploads/event/';
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
            redirect(site_url('event'));
        } else {
            $image = array('upload_data' => $this->upload->data());
            $data = array(
                'event_image'     => $image['upload_data']['file_name'],
            );
            $this->unsetFile($id);
            $this->Event_Model->update($id, $data);
            $this->session->set_flashdata('success', '
                <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <span class="fa fa-check"></span> Success
                </div>');
            redirect(site_url('event'));
        }
    }

    public function unsetFile($id)
    {
        $data = $this->Event_Model->get($id);
        unlink('./uploads/event/' . $data->event_image);
    }
}
