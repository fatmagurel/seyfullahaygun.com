<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitegenel extends CI_Controller {
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
		$query=$this->db->query("SELECT * FROM sitegenel");
		$data["site"]= $query->result();
		
		$this->load->view('admin2/header');
		$this->load->view('admin2/menu');
		$this->load->view('admin2/sitegenel',$data);
		$this->load->view('admin2/footer');
		
	}
	
	public function guncelle($id)
	{
			//form verilerini alcaz
				$data=array(
				 'siteBasligi'=>$this->input->post('siteBasligi'),
				 'bannerYazisi'=>$this->input->post('bannerYazisi'),
				 'bannerYazisi2'=>$this->input->post('bannerYazisi2')
				 );
				 $this->load->model('Database_Model');
				 
				 $this->Database_Model->update_data("sitegenel",$data,$id);
				 $this->session->set_flashdata("mesaj","Bilgiler başarıyla güncellendi...");
				 redirect(base_url().'admin2/Sitegenel/');
				 
	}
	
	public function resim_yukle($id)
	{
		
		$data["id"]=$id;
		$this->load->view('admin2/banner_resim_yukle',$data);
		
	}
	
	public function resim_kaydet($id)
	{ 	 
		$data["id"]=$id;
		
				$config['upload_path']          = './uploads/banner';
                $config['allowed_types']        = 'gif|jpg|png';
               // $config['max_size']             = 1000;
               // $config['max_width']            = 1024;
              //  $config['max_height']           = 1024;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('bannerFotografi'))
                {
                        $error = $this->upload->display_errors();
						// $this->load->view('admin/banner_resim_yukle',$error);
                }
                else
                {
                        $data = $this ->upload->data();
						$dosyaadi=$data["file_name"];
						
						$data=array(
							'bannerFotografi'=>$dosyaadi
							);
							
							$this->Database_Model->update_data("Sitegenel",$data,$id);
							$this->session->set_flashdata("mesaj","Resim başarıyla güncellendi...");
							redirect(base_url().'admin2/Sitegenel');      
													
                }	
	}
	
	
	
			
}
