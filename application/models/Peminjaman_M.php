<?php

class Peminjaman_M extends CI_Model
{
    public function countAllPeminjaman() {
        return $this->db->from('t_peminjaman')->count_all_results();
    }
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

    function getWherePengguna($idpengguna)
    {
		$this->db->select('*, pengguna.nama AS nama_pengguna, petugas.nama AS nama_petugas');
		$this->db->from('t_peminjaman');
        $this->db->where('t_peminjaman.idpengguna', $idpengguna);
		$this->db->where('t_peminjaman.status', 1);
		$this->db->join('t_mobil', 't_mobil.idmobil = t_peminjaman.idmobil');
        $this->db->join('t_pengguna AS pengguna', 'pengguna.idpengguna = t_peminjaman.idpengguna');
		$this->db->join('t_pengguna AS petugas', 'petugas.idpengguna = t_peminjaman.idpetugas');
        
      return $this->db->get()->result();
    }

    function insertData($data)
    {
        $this->db->insert('t_peminjaman', $data);
    }

		function get_one($id)
    {
        $this->db->select('*');
        $this->db->from('t_peminjaman');
        $this->db->where('idpinjam', $id);
        return $this->db->get()->row();
    }

		function get_one_by_user($id)
    {
				$this->db->select('peminjaman.*, pengguna.nama AS nama_pengguna, petugas.nama AS nama_petugas, t_mobil.nama_mobil, t_mobil.no_plat, t_mobil.harga_sewa');
				$this->db->from('t_peminjaman AS peminjaman');
				$this->db->join('t_pengguna AS pengguna', 'pengguna.idpengguna = peminjaman.idpengguna');
				$this->db->join('t_pengguna AS petugas', 'petugas.idpengguna = peminjaman.idpetugas');
				$this->db->join('t_mobil', 't_mobil.idmobil = peminjaman.idmobil');
				$this->db->where('peminjaman.idpengguna', $id);
				return $this->db->get()->result();
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