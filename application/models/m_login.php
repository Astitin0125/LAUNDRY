
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login Extends CI_Model {

	public function proses_login($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query = $this->db->get('user');
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$sess = array(
					'id_user' => $row->id_user,
					'username' => $row->username,
					'password' => $row->username,
				);
				$this->session->set_userdata($sess);	
	      }
		  redirect('dashboard');
		}else{
			$this->session->set_flashdata('info','<div class="alert alert-danger" role="alert">Login Gagal, Silahakan Periksa Kembali Username dan Password Anda !  </div>');
			redirect('panel');
	}
}
}

