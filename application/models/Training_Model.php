<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Training_Model extends CI_Model
{
    protected $_table    = 'trainings';
    protected $_tableCat = 'category_training';
    protected $_id       = 'training_id';

    public function get($id = false)
    {
        if ($id == false) {
            $this->db->join($this->_tableCat, $this->_tableCat . '.category_id = ' . $this->_table . '.category_id', 'left');
            return $this->db->get($this->_table)->result();
        } else {
            $this->db->join($this->_tableCat, $this->_tableCat . '.category_id = ' . $this->_table . '.category_id', 'left');
            return $this->db->get_where($this->_table, array($this->_id => $id))->row();
        }
    }

    public function getByIdTraining($id)
    {
        return $this->db->query("SELECT * FROM $this->_table WHERE category_id = $id")->result();
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
