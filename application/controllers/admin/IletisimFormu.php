<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IletisimFormu extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->database();
			$this->load->model('Database_Model');
			$this->load->library('session');
			if(!$this->session->userdata("admin_session"))
					redirect(base_url().'admin/login');
		}
	
	 
	public function index()
	{
		$query=$this->db->query("select * from form");
		$data["veri"]=$query->result();
		
		$this->load->view('admin/menu');
		$this->load->view('admin/navbar');
		$this->load->view('admin/iletisim_formu',$data);
		$this->load->view('admin/footer');
	}
	
	public function sil($id)
	{
		$this->db->query("DELETE FROM form WHERE Id=$id");
		$this->session->set_flashdata("mesaj","Kullanıcı tarafından gelen mesaj başarıyla silindi...");
		redirect(base_url().'admin/IletisimFormu');
		
	}
}
