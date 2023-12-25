<?php

class Mobil_M extends CI_Model
{
    public function countAllData() {
        return $this->db->count_all('t_mobil');
    }

    function getMobil()
    {
        $this->db->select('*');
        $this->db->from('t_mobil');
        return $this->db->get()->result();
    }

    function getMobildanKategori()
    {
        $this->db->select('*');
        $this->db->from('t_mobil');
        $this->db->join('t_kategori', 't_mobil.idkategori = t_kategori.idkategori');
        return $this->db->get()->result();
    }

    function insertData($data)
    {
        $this->db->insert('t_mobil', $data);
    }

    function get_one($id)
    {
        $this->db->select('*');
        $this->db->from('t_mobil');
        $this->db->where('idmobil', $id);
        $this->db->join('t_kategori', 't_mobil.idkategori = t_kategori.idkategori');
        return $this->db->get()->row();
    }

    function updateData($id, $data)
    {
        $this->db->where('idmobil', $id);
        $this->db->update('t_mobil', $data);
    }

    function deleteData($id)
    {
        $this->db->where('idmobil', $id);
        $this->db->delete('t_mobil');
    }
}
