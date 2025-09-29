<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi Extends CI_Controller {
	function __construct()
	{
		parent:: __construct();
		$this->load->model('m_transaksi');		
	}
	
	public function tambah()
	{
		$isi['content'] = 'backend/transaksi/t_transaksi';
		$isi['judul'] = 'Form Tambah Transaksi';
		$isi['konsumen'] = $this->db->get('konsumen')->result();
		$isi['paket'] = $this->db->get('paket')->result();
		$isi['kode_transaksi'] = $this->m_transaksi->generateKode();
		$this->load->view('backend/dashboard',$isi);
	}

    public function getHargaPaket()
    {
        $kode_paket = $this->input->post('kode_paket');
        $data = $this->m_transaksi->getHargaPaket($kode_paket);
        echo json_encode($data);
    }

}

?>