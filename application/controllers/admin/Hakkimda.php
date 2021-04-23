<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hakkimda extends CI_Controller {
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
		$query=$this->db->query("select * from hakkimda");
		$data["veriler"]=$query->result();
		
		$this->load->view('admin/menu');
		$this->load->view('admin/navbar');
		$this->load->view('admin/hakkimda',$data);
		$this->load->view('admin/footer');
	}
	
	public function guncelle($id)
	{
			//form verilerini alcaz
			$data=array(
				 'hakkimda'=>$this->input->post('hakkimda'),
				 'facebook'=>$this->input->post('facebook'),
				 'instagram'=>$this->input->post('instagram'),
				 'twitter'=>$this->input->post('twitter')
				 
				 );
				 
				 $this->Database_Model->update_data("hakkimda",$data,$id);
				  $this->session->set_flashdata("mesaj","Hakkımda bilgileri başarıyla güncellendi...");
				redirect(base_url().'admin/Hakkimda');
				
	}
	
	public function resim_yukle($id)
	{
		
		$data["id"]=$id;
		$this->load->view('admin/hakkimda_resim_yukle',$data);
		
	}
	
	public function resim_kaydet($id)
	{ 	 
		$data["id"]=$id;
		
				$config['upload_path']          = './uploads/hakkimda';
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
                        $data = $this ->upload->data();
						$dosyaadi=$data["file_name"];
						
						$data=array(
							'photo'=>$dosyaadi
							);
							
							$this->Database_Model->update_data("Hakkimda",$data,$id);
							 $this->session->set_flashdata("mesaj","Resim başarıyla güncellendi...");
							redirect(base_url().'admin/Hakkimda');      
													
                }	
	}
}
