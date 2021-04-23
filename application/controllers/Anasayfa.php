<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anasayfa extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->database();
			$this->load->model('Database_Model');
			
		}
	
	 
	public function index()
	{
		$query=$this->db->query("select * from sitegenel");
		$data["veriler"]=$query->result();
		
		$query=$this->db->query("select * from hakkimda");
		$data["hakkimda"]=$query->result();
		
		$query=$this->db->query("select * from iletisim");
		$data["iletisim"]=$query->result();
		
		$query=$this->db->query("select * from portfolyo");
		$data["port"]=$query->result();
		
		$query=$this->db->query("select * from form");
		$data["form"]=$query->result();
		
		$this->load->view('anasayfa',$data);
		
	}
	
	public function form(){
		
		$data=array(
				 'adsoy'=>$this->input->post('adsoy'),
				 'numara'=>$this->input->post('numara'),
				 'mesaj'=>$this->input->post('mesaj')
				 );
		$this->Database_Model->insert_data("form",$data,$id);
		redirect(base_url().'Anasayfa'.'#iletisim');
}

}
