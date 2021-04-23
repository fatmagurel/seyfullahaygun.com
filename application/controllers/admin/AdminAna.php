<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminAna extends CI_Controller {
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
		$query=$this->db->query("SELECT * FROM sitegenel");
		$data["veri"]= $query->result();
		
		$query=$this->db->query("SELECT * FROM login");
		$data["login"]= $query->result();
		
		$this->load->view('admin/menu');
		$this->load->view('admin/navbar');
		$this->load->view('admin/giris',$data);
		$this->load->view('admin/footer');
	}
	
	public function sitegenel()
	{
		$query=$this->db->query("select * from sitegenel");
		$data["site"]=$query->result();
		
		$this->load->view('admin/menu');
		$this->load->view('admin/navbar');
		$this->load->view('admin/sitegenel',$data);
		$this->load->view('admin/footer');
		
	}
	
	public function guncelle($id)
	{
			//form verilerini alcaz
			$data=array(
				 'siteBasligi'=>$this->input->post('siteBasligi'),
				 'bannerYazisi'=>$this->input->post('bannerYazisi'),
				 'bannerYazisi2'=>$this->input->post('bannerYazisi2'),
				 'bannerFotografi'=>$this->input->post('bannerFotografi'),
				 
				 );
				 $data["id"]=$id;
		
				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 1024;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('bannerFotografi'))
                {
                        $error = $this->upload->display_errors();
                        $this->load->view('AdminAna\sitegenel', $data);
                }
                else
                {
                        $upload_data = $this->upload->data();
						$dosyaadi=$upload_data["file_name"];
						
						$data=array(

							'bannerFotografi'=>$upload_data["file_name"]
							);
							$this->load->model('Database_Model');
							$this->Database_Model->update_data("sitegenel",$data,$id);
							redirect(base_url().'AdminAna/sitegenel');                        
                }		
				
				  $this->load->model('Database_Model');
				 
				 $this->Database_Model->update_data("sitegenel",$data,$id);
				 
				redirect(base_url().'admin/AdminAna/sitegenel');
	}
	
	public function guncelleLogin($id)
	{
			//form verilerini alcaz
			$data=array(
				 'kullaniciadi'=>$this->input->post('kullaniciadi'),
				 'sifre'=>$this->input->post('sifre')
				 );
				 $this->load->model('Database_Model');
				 $this->Database_Model->update_data("login",$data,$id);
				 $this->session->set_flashdata("mesaj","Kullanıcı bilgileri başarıyla güncellendi...");
				redirect(base_url().'admin/AdminAna/');
	}
			
}
