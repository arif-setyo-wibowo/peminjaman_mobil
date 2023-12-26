<?php

class Laporan_M extends CI_Model
{
    function jumlahBarang()
    {
        $this->db->select('*');
        $this->db->from('t_mobil');
        return $this->db->get()->result();
    }

    function barang_belum_kembali()
    {
		$sql = "SELECT
		t_mobil.nama_mobil AS nama_mobil,
		t_mobil.stok AS stok,
		COALESCE(SUM(CASE WHEN t_peminjaman.status = 0 THEN t_peminjaman.jumlah ELSE 0 END), 0) AS belum_kembali
		FROM
				t_mobil
		LEFT JOIN
				t_peminjaman ON t_mobil.idmobil = t_peminjaman.idmobil
		GROUP BY
				t_mobil.idmobil;";

		$query = $this->db->query($sql);
		return $query->result();
    }

    function barang_sering_dipinjam()
    {
		$sql = "SELECT t_mobil.nama_mobil AS mobil,
               COUNT(t_peminjaman.idmobil) AS kali_dipinjam
					FROM t_mobil
					LEFT JOIN t_peminjaman ON t_mobil.idmobil = t_peminjaman.idmobil
					GROUP BY t_mobil.nama_mobil
					ORDER BY kali_dipinjam DESC";

		$query = $this->db->query($sql);
		return $query->result();
		
    }

	 function stokhabis() {
			$this->db->select('*');
        	$this->db->from('t_mobil');
        	$this->db->where('stok', 0);
        	return $this->db->get()->result();
	 }
}
