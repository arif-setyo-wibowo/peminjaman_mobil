<?php

class Pengguna_M extends CI_Model
{
    function getPengguna()
    {
        $this->db->select('*');
        $this->db->from('t_pengguna');
        return $this->db->get()->result();
    }

    function insertData($data)
    {
        $this->db->insert('t_pengguna', $data);
    }

    function get_one($id)
    {
        $this->db->select('*');
        $this->db->from('t_pengguna');
        $this->db->where('idpengguna', $id);
        return $this->db->get()->result();
    }

    function updateData($id, $data)
    {
        $this->db->where('idpengguna', $id);
        $this->db->update('t_pengguna', $data);
    }

    function deleteData($id)
    {
        $this->db->where('idpengguna', $id);
        $this->db->delete('t_pengguna');
    }
}