<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_M');
        $this->load->model('Mobil_M');
    }

    public function index()
    {
		$pengguna = $this->session->userdata('role');
        if ($pengguna == 'Admin' || $pengguna == 'Petugas') {
            $data = array(
				'header' 	=> 'template/header_admin',
				'footer' 	=> 'template/footer_admin',
				'kategori'	=> $this->Kategori_M->getKategori(),
				'mobil'		=> $this->Mobil_M->getMobil(),
			);
	
			return $this->load->view('mobil',$data);
        }else{
            $this->session->set_flashdata('msg','Login sebagai admin');
            redirect('/');
        }
    }

    function insertUpdate(){
		$pengguna = $this->session->userdata('role');
		if ($pengguna == 'Admin' || $pengguna == 'Petugas') {
			if ($this->input->post('proses') == 'Tambah') {

				// Proses Gambar
				$config['upload_path'] 	= './uploads/mobil/';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['overwrite']     = FALSE;
				$config['encrypt_name'] = TRUE;

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('gambar')) {
					$gambar = '';
				} else {
					$dataNama = $this->upload->data();
					$gambar = $dataNama['file_name'];
				}

				$data = [
					'merk_mobil' 	=> $this->input->post('merk_mobil'),
					'nama_mobil' 	=> $this->input->post('nama_mobil'),
					'idkategori' 	=> $this->input->post('idkategori'),
					'tahun_mobil' 	=> $this->input->post('tahun_mobil'),
					'kapasitas' 	=> $this->input->post('kapasitas'),
					'harga_sewa' 	=> $this->input->post('harga_sewa'),
					'stok' 			=> $this->input->post('stok'),
					'no_plat' 		=> $this->input->post('no_plat'),
					'warna' 		=> $this->input->post('warna'),
					'no_bpkb' 		=> $this->input->post('no_bpkb'),
					'gambar'		=> $gambar
				];
				$this->Mobil_M->insertData($data);
				$this->session->set_flashdata('msg', 'Berhasil Menambah Data Mobil');
				redirect('/mobil');
			}elseif ($this->input->post('proses') == 'Update') {
				$config['upload_path'] 	= './uploads/mobil/';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['overwrite']     = FALSE;
				$config['file_name']        = $gambar;
				$config['encrypt_name'] = TRUE;

				$this->load->library('upload', $config);

				$gambar_lama = $this->input->post('gambar_lama');

				if (!$this->upload->do_upload('gambar')) {
					$gambar = '';
				} else {
					unlink('uploads/mobil/'.$gambar_lama);

					$dataNama = $this->upload->data();
					$gambar = $dataNama['file_name'];
				}

				$data = [
					'merk_mobil' 	=> $this->input->post('merk_mobil'),
					'nama_mobil' 	=> $this->input->post('nama_mobil'),
					'idkategori' 	=> $this->input->post('idkategori'),
					'tahun_mobil' 	=> $this->input->post('tahun_mobil'),
					'kapasitas' 	=> $this->input->post('kapasitas'),
					'harga_sewa' 	=> $this->input->post('harga_sewa'),
					'stok' 			=> $this->input->post('stok'),
					'no_plat' 		=> $this->input->post('no_plat'),
					'warna' 		=> $this->input->post('warna'),
					'no_bpkb' 		=> $this->input->post('no_bpkb'),
					'gambar'		=> $gambar
				];
				$this->Mobil_M->updateData($this->input->post('idmobil'),$data);
				$this->session->set_flashdata('msg', 'Berhasil Mengubah Data Mobil');
				redirect('/mobil');
			}else{
				redirect('/mobil');
			}
		}else{
			$this->session->set_flashdata('msg','Login sebagai admin');
			redirect('/');
		}
    }

    public function delete($id){
		$pengguna = $this->session->userdata('role');
        if ($pengguna == 'Admin' || $pengguna == 'Petugas') {
			
			$data =  $this->Mobil_M->get_one($id);
			unlink('uploads/mobil/'.$data->gambar);

			$this->Mobil_M->deleteData($id);
			$this->session->set_flashdata('msg', 'Berhasil Menghapus Data Mobil');
			redirect('/mobil');
		}else{
			$this->session->set_flashdata('msg','Login sebagai admin');
			redirect('/');
		}
    }

    function detail($id){
		$pengguna = $this->session->userdata('role');
        if ($pengguna == 'Admin' || $pengguna == 'Petugas') {
			$data = array(
				'header' => 'template/header_admin',
				'footer' => 'template/footer_admin',
				'mobil'  => $this->Mobil_M->get_one($id)
			);
		
			return $this->load->view('mobil_detail',$data);
		}else{
			$this->session->set_flashdata('msg','Login sebagai admin');
			redirect('/');
		}
    }
}

/* End of file Mobil.php */
