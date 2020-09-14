<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CategoryTraining extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Category_Training_Model');
    }

    public function index($id = false)
    {
        if ($id == false) {
            $data['title']   = 'Training Categories';
            $data['menu']    = 'category-training';
            $data['sub']     = 'Welcome ' . $this->ion_auth->user()->row()->username . ' , Love to see you back. ';
            $data['content'] = 'pages/category_training/index.php';
            $data['categorys']  = $this->Category_Training_Model->get();

            $this->load->view('backEnd/index.php', $data);
        } else {
            $data['title']   = 'Training Categories';
            $data['menu']    = 'category-training';
            $data['sub']     = 'Welcome ' . $this->ion_auth->user()->row()->username . ' , Love to see you back. ';
            $data['content'] = 'pages/category_training/edit.php';
            $data['categorys']  = $this->Category_Training_Model->get($id);
            $this->load->view('backEnd/index.php', $data);
        }
    }

    public function create()
    {
        if (empty($_POST)) {
            $data['title']   = 'Training Categories';
            $data['menu']    = 'category-training';
            $data['sub']     = 'Welcome ' . $this->ion_auth->user()->row()->username . ' , Love to see you back. ';
            $data['content'] = 'pages/category_training/create.php';

            $this->load->view('backEnd/index.php', $data);
        } else {
            $data = array(
                'category_name' => $this->input->post('name'),
            );
            $this->Category_Training_Model->insert($data);
            $this->session->set_flashdata('success', '
                <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <span class="fa fa-check"></span> Success
                </div>');
            redirect(site_url('category-training'));
        }
    }

    public function delete()
    {
        $id = $this->input->post('id');
        $this->unsetFile($id);
        $this->Category_Training_Model->delete($id);
        $this->session->set_flashdata('success', '
        <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <span class="fa fa-check"></span> Success
        </div>');
        redirect(site_url('category-training'));
    }

    public function update()
    {
        $id = $this->input->post('id');
        $data = array(
            'category_name' => $this->input->post('name')
        );
        $this->Category_Training_Model->update($id, $data);
        $this->session->set_flashdata('success', '
            <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <span class="fa fa-check"></span> Success
            </div>');
        return redirect(site_url('category-training'));
    }

    public function unsetFile($id)
    {
        $data = $this->Category_Training_Model->get($id);
        unlink('./uploads/slide/' . $data->slide_img);
    }
}
