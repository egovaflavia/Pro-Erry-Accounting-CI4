<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Team extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Team_Model');
    }

    public function index($id = false)
    {
        if ($id == false) {
            $data['title']     = 'Team';
            $data['menu']      = 'team';
            $data['sub']       = 'Welcome Jhon Deo , Love to see you back. ';
            $data['content']   = 'pages/team/index.php';
            $data['teams'] = $this->Team_Model->get();

            $this->load->view('backEnd/index.php', $data);
        } else {
            $data['title']     = 'Team';
            $data['menu']      = 'team';
            $data['sub']       = 'Welcome Jhon Deo , Love to see you back. ';
            $data['content']   = 'pages/team/edit.php';
            $data['teams'] = $this->Team_Model->get($id);
            $this->load->view('backEnd/index.php', $data);
        }
    }

    public function create()
    {
        if (empty($_FILES)) {
            $data['title']     = 'Team';
            $data['menu']      = 'team';
            $data['sub']       = 'Welcome Jhon Deo , Love to see you back. ';
            $data['content']   = 'pages/team/create.php';
            $data['teams'] = $this->Team_Model->get();
            $this->load->view('backEnd/index.php', $data);
        } else {
            $config['upload_path']   = './uploads/team/';
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
                redirect(site_url('team'));
            } else {
                $image = array('upload_data' => $this->upload->data());
                $data = array(
                    'team_name' => $this->input->post('name'),
                    'team_position' => $this->input->post('position'),
                    'team_image'     => $image['upload_data']['file_name'],
                );
                $this->Team_Model->insert($data);
                $this->session->set_flashdata('success', '
                <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <span class="fa fa-check"></span> Success
                </div>');
                redirect(site_url('team'));
            }
        }
    }

    public function delete()
    {
        $id = $this->input->post('id');
        $this->unsetFile($id);
        $this->Team_Model->delete($id);
        $this->session->set_flashdata('success', '
        <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <span class="fa fa-check"></span> Success
        </div>');
        redirect(site_url('team'));
    }

    public function update()
    {
        $id = $this->input->post('id');
        if ($_FILES['foto']['name'] == '') {
            $data = array(
                'team_name' => $this->input->post('name'),
                'team_position' => $this->input->post('position'),
            );
            $this->Team_Model->update($id, $data);
            $this->session->set_flashdata('success', '
            <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <span class="fa fa-check"></span> Success
            </div>');
            return redirect(site_url('team'));
        } else {
            $config['upload_path'] = './uploads/team/';
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
                redirect(site_url('team'));
            } else {
                $image = array('upload_data' => $this->upload->data());
                $data = array(
                    'team_name' => $this->input->post('name'),
                    'team_position' => $this->input->post('position'),
                    'team_image'     => $image['upload_data']['file_name'],
                );
                $this->unsetFile($id);
                $this->Team_Model->update($id, $data);
                $this->session->set_flashdata('success', '
                <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <span class="fa fa-check"></span> Success
                </div>');
                redirect(site_url('team'));
            }
        }
    }

    public function unsetFile($id)
    {
        $data = $this->Team_Model->get($id);
        unlink('./uploads/team/' . $data->team_image);
    }
}
