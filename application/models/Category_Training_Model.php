<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Category_Training_Model extends CI_Model
{
    protected $_table = 'category_training';
    protected $_id    = 'category_id';

    public function get($id = false)
    {
        if ($id == false) {
            return $this->db->get($this->_table)->result();
        } else {
            return $this->db->get_where($this->_table, array($this->_id => $id))->row();
        }
    }

    public function insert($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array($this->_id => $id));
    }

    public function update($id, $data)
    {
        return $this->db->update($this->_table, $data, array($this->_id => $id));
    }
}
