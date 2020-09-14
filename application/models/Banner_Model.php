<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Banner_Model extends CI_Model
{
    protected $_table    = 'banners';
    protected $_id       = 'banner_id';

    public function get($id = false)
    {
        if ($id == false) {
            return $this->db->get($this->_table)->row();
        } else {
            return $this->db->get_where($this->_table, array($this->_id => 1))->row();
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
