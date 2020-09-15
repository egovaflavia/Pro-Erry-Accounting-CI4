<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Service_Model extends CI_Model
{
    protected $_table    = 'services';
    protected $_tableCat = 'category_service';
    protected $_id       = 'service_id';

    public function get($id = false)
    {
        if ($id == false) {
            $this->db->join($this->_tableCat, $this->_tableCat . '.category_service_id = ' . $this->_table . '.category_service_id', 'left');
            return $this->db->get($this->_table)->result();
        } else {
            $this->db->join($this->_tableCat, $this->_tableCat . '.category_service_id = ' . $this->_table . '.category_service_id', 'left');
            return $this->db->get_where($this->_table, array($this->_id => $id))->row();
        }
    }

    public function getService($id)
    {
        return $this->db->query("SELECT * FROM `services` 
        LEFT JOIN category_service 
        ON category_service.category_service_id=services.category_service_id 
        WHERE services.category_service_id = $id ")->result();
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
