<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iletisim extends CI_Controller {
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
		$query=$this->db->query("select * from iletisim");
		$data["veriler"]=$query->result();
		
		$this->load->view('admin/menu');
		$this->load->view('admin/navbar');
		$this->load->view('admin/iletisim',$data);
		$this->load->view('admin/footer');
	}
	
	public function guncelle($id)
	{
			//form verilerini alcaz
			$data=array(
				 'adres'=>$this->input->post('adres'),
				 'telefon'=>$this->input->post('telefon'),
				 'email'=>$this->input->post('email'),
				 'facebook'=>$this->input->post('facebook'),
				 'instagram'=>$this->input->post('instagram'),
				 'twitter'=>$this->input->post('twitter')
				 );
				 
				 $this->Database_Model->update_data("iletisim",$data,$id);
				 $this->session->set_flashdata("mesaj","İletişim bilgileri başarıyla güncellendi...");
				redirect(base_url().'admin/Iletisim');
				
	}
}
