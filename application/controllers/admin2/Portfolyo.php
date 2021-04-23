<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolyo extends CI_Controller {
	public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->database();
			$this->load->model('Database_Model');
			$this->load->library('session');
			if(!$this->session->userdata("admin_session"))
					redirect(base_url().'admin2/login');
		}
	
	 
	public function index()
	{
		$query=$this->db->query("SELECT * FROM portfolyo");
		$data["port"]= $query->result();
		
		$this->load->view('admin2/header');
		$this->load->view('admin2/menu');
		$this->load->view('admin2/portfolyo',$data);
		$this->load->view('admin2/footer');
	}
	
	
	public function sil($id)
	{
		$this->db->query("DELETE FROM portfolyo WHERE Id=$id");
		$this->session->set_flashdata("mesaj","Resim başarıyla silindi...");
		redirect(base_url().'admin2/portfolyo');
		
	}
	
	public function resim_yukle()
	{
		$this->load->view('admin2/header');
		$this->load->view('admin2/menu');
		$this->load->view('admin2/portfolyo_ekle');
		$this->load->view('admin2/footer');
	}
	
	public function resim_kaydet()
	{ 	 
				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
               // $config['max_size']             = 1000;
               // $config['max_width']            = 1024;
              //  $config['max_height']           = 1024;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('photo'))
                {
                        $error = $this->upload->display_errors();
						// $this->load->view('admin/banner_resim_yukle',$error);
                }
                else
                {
						$insert_data = $this->upload->data();
						$dosyaadi=$insert_data["file_name"];
						$data=array(
							'photo'=>$dosyaadi
							);
							$this->Database_Model->insert_data("portfolyo",$data,$id);
							 $this->session->set_flashdata("mesaj","Resim başarıyla eklendi...");
							redirect(base_url().'admin2/Portfolyo');      
													
                }
	}
}
