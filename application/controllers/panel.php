<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel Extends CI_Controller{
	public function index()
	{
		$this->load->view('backend/login');
		
	}
}
