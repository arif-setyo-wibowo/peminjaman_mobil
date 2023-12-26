<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Laporan_M');
    }

    public function index()
    {
			$pengguna = $this->session->userdata('role');
			if ($pengguna == 'Admin' || $pengguna == 'Petugas') {
            	$data = array(
                	'header' => 'template/header_admin',
                	'footer' => 'template/footer_admin',
						'laporan'=> $this->Laporan_M->jumlahBarang(),
						'judul'		=> "Laporan Jumlah Barang"
            	);

            	return $this->load->view('laporan/jumlahbarang',$data);
        	}else{
            	$this->session->set_flashdata('msg','Login sebagai user');
            	redirect('/');
        	}
    }

	 public function barangDipinjam()
    {
			$pengguna = $this->session->userdata('role');
			if ($pengguna == 'Admin' || $pengguna == 'Petugas') {
            	$data = [
                	'header' => 'template/header_admin',
                	'footer' => 'template/footer_admin',
						'laporan'=> $this->Laporan_M->barang_belum_kembali(),
						'judul'		=> "Laporan Jumlah Barang Dipinjam"
					];
            	return $this->load->view('laporan/barangdipinjam',$data);
        	}else{
            	$this->session->set_flashdata('msg','Login sebagai user');
            	redirect('/');
        	}
    }
	 

	 public function barangBelumKembali()
    {
			$pengguna = $this->session->userdata('role');
			if ($pengguna == 'Admin' || $pengguna == 'Petugas') {
            	$data = [
                	'header' => 'template/header_admin',
                	'footer' => 'template/footer_admin',
						'laporan'=> $this->Laporan_M->barang_belum_kembali(),
						'judul'		=> "Laporan Jumlah Barang Belum Kembali"
					];

            	return $this->load->view('laporan/barangbelumkembali',$data);
        	}else{
            	$this->session->set_flashdata('msg','Login sebagai user');
            	redirect('/');
        	}
    }
	 
	 public function barangSeringDipinjam()
    {
			$pengguna = $this->session->userdata('role');
			if ($pengguna == 'Admin' || $pengguna == 'Petugas') {
            	$data = [
                	'header' => 'template/header_admin',
                	'footer' => 'template/footer_admin',
						'laporan'=> $this->Laporan_M->barang_sering_dipinjam(),
						'judul'		=> "Laporan Jumlah Barang Sering Dipinjam"
					];
            	return $this->load->view('laporan/barangseringdipinjam',$data);
        	}else{
            	$this->session->set_flashdata('msg','Login sebagai user');
            	redirect('/');
        	}
    }

	 public function stokHabis()
    {
			$pengguna = $this->session->userdata('role');
			if ($pengguna == 'Admin' || $pengguna == 'Petugas') {
            	$data = [
                	'header' => 'template/header_admin',
                	'footer' => 'template/footer_admin',
						'laporan'=> $this->Laporan_M->stokHabis(),
						'judul'		=> "Laporan Jumlah Barang Stok Habis"
					];
            	return $this->load->view('laporan/stokhabis',$data);
        	}else{
            	$this->session->set_flashdata('msg','Login sebagai user');
            	redirect('/');
        	}
    }
}

/* End of file Kategori.php */
