<?php

class Peminjaman_M extends CI_Model
{
    function getJoinPinjam()
    {
		$this->db->select('peminjaman.*, pengguna.nama AS nama_pengguna, petugas.nama AS nama_petugas, t_mobil.nama_mobil, t_mobil.no_plat');
		$this->db->from('t_peminjaman AS peminjaman');
		$this->db->join('t_pengguna AS pengguna', 'pengguna.idpengguna = peminjaman.idpengguna');
		$this->db->join('t_pengguna AS petugas', 'petugas.idpengguna = peminjaman.idpetugas');
		$this->db->join('t_mobil', 't_mobil.idmobil = peminjaman.idmobil');
		$this->db->where('peminjaman.status', 0);
      return $this->db->get()->result();
    }

	 function getJoinPengembalian()
    {
		$this->db->select('peminjaman.*, pengguna.nama AS nama_pengguna, petugas.nama AS nama_petugas, t_mobil.nama_mobil, t_mobil.no_plat');
		$this->db->from('t_peminjaman AS peminjaman');
		$this->db->join('t_pengguna AS pengguna', 'pengguna.idpengguna = peminjaman.idpengguna');
		$this->db->join('t_pengguna AS petugas', 'petugas.idpengguna = peminjaman.idpetugas');
		$this->db->join('t_mobil', 't_mobil.idmobil = peminjaman.idmobil');
		$this->db->where('peminjaman.status', 1);
      return $this->db->get()->result();
    }

    function insertData($data)
    {
        $this->db->insert('t_peminjaman', $data);
    }

    function updateData($id, $data)
    {
        $this->db->where('idpinjam', $id);
        $this->db->update('t_peminjaman', $data);
    }

    function deleteData($id)
    {
        $this->db->where('idpinjam', $id);
        $this->db->delete('t_peminjaman');
    }
}