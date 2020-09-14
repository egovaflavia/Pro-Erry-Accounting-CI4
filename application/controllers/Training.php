<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Training extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Training_Model');
        $this->load->model('Category_Training_Model');
    }

    public function index($id = false)
    {
        if ($id == false) {
            $data['title']     = 'Training';
            $data['menu']      = 'training';
            $data['sub']       = 'Welcome Jhon Deo , Love to see you back. ';
            $data['content']   = 'pages/training/index.php';
            $data['trainings'] = $this->Training_Model->get();

            $this->load->view('backEnd/index.php', $data);
        } else {
            $data['title']     = 'Training';
            $data['menu']      = 'training';
            $data['sub']       = 'Welcome Jhon Deo , Love to see you back. ';
            $data['content']   = 'pages/training/edit.php';
            $data['trainings'] = $this->Training_Model->get($id);
            $data['categorys'] = $this->Category_Training_Model->get();
            $this->load->view('backEnd/index.php', $data);
        }
    }

    public function detail($id = false)
    {
        $data['title']     = 'Training';
        $data['menu']      = 'training';
        $data['sub']       = 'Welcome Jhon Deo , Love to see you back. ';
        $data['content']   = 'pages/training/detail.php';
        $data['trainings'] = $this->Training_Model->get($id);
        $this->load->view('backEnd/index.php', $data);
    }

    public function create()
    {
        if (empty($_POST)) {
            $data['title']     = 'Training';
            $data['menu']      = 'training';
            $data['sub']       = 'Welcome Jhon Deo , Love to see you back. ';
            $data['content']   = 'pages/training/create.php';
            $data['categorys'] = $this->Category_Training_Model->get();

            $this->load->view('backEnd/index.php', $data);
        } else {
            $config['upload_path']   = './uploads/training/';
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
                redirect(site_url('training'));
            } else {
                $image = array('upload_data' => $this->upload->data());
                $data = array(
                    'category_id'        => $this->input->post('category'),
                    'training_name'      => $this->input->post('name'),
                    'training_duration'  => $this->input->post('duration'),
                    'training_price'     => $this->input->post('price'),
                    'training_exam_info' => $this->input->post('info'),
                    'training_desc'      => $this->input->post('desc'),
                    'training_outline'   => $this->input->post('outline'),
                    'training_image'     => $image['upload_data']['file_name'],
                );
                $this->Training_Model->insert($data);
                $this->session->set_flashdata('success', '
                <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <span class="fa fa-check"></span> Success
                </div>');
                redirect(site_url('training'));
            }
        }
    }

    public function delete()
    {
        $id = $this->input->post('id');
        $this->unsetFile($id);
        $this->Training_Model->delete($id);
        $this->session->set_flashdata('success', '
        <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <span class="fa fa-check"></span> Success
        </div>');
        redirect(site_url('training'));
    }

    public function update()
    {
        $id = $this->input->post('id');
        if ($_FILES['foto']['name'] == '') {
            $data = array(
                'category_id'        => $this->input->post('category'),
                'training_name'      => $this->input->post('name'),
                'training_duration'  => $this->input->post('duration'),
                'training_price'     => $this->input->post('price'),
                'training_exam_info' => $this->input->post('info'),
                'training_desc'      => $this->input->post('desc'),
                'training_outline'   => $this->input->post('outline'),
            );
            $this->Training_Model->update($id, $data);
            $this->session->set_flashdata('success', '
            <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <span class="fa fa-check"></span> Success
            </div>');
            return redirect(site_url('training'));
        } else {
            $config['upload_path'] = './uploads/training/';
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
                redirect(site_url('training'));
            } else {
                $image = array('upload_data' => $this->upload->data());
                $data = array(
                    'category_id'        => $this->input->post('category'),
                    'training_name'      => $this->input->post('name'),
                    'training_duration'  => $this->input->post('duration'),
                    'training_price'     => $this->input->post('price'),
                    'training_exam_info' => $this->input->post('info'),
                    'training_desc'      => $this->input->post('desc'),
                    'training_outline'   => $this->input->post('outline'),
                    'training_image'     => $image['upload_data']['file_name'],
                );
                $this->unsetFile($id);
                $this->Training_Model->update($id, $data);
                $this->session->set_flashdata('success', '
                <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <span class="fa fa-check"></span> Success
                </div>');
                redirect(site_url('training'));
            }
        }
    }

    public function unsetFile($id)
    {
        $data = $this->Training_Model->get($id);
        unlink('./uploads/training/' . $data->training_image);
    }
}
