<?php

class Kategori_M extends CI_Model
{
    function getKategori()
    {
        $this->db->select('*');
        $this->db->from('t_kategori');
        return $this->db->get()->result();
    }

    function insertData($data)
    {
        $this->db->insert('t_kategori', $data);
    }

    function updateData($id, $data)
    {
        $this->db->where('idkategori', $id);
        $this->db->update('t_kategori', $data);
    }

    function deleteData($id)
    {
        $this->db->where('idkategori', $id);
        $this->db->delete('t_kategori');
    }
}
