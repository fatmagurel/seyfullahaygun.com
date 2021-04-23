<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->library('session');
				$this->load->helper('url');
				$this->load->database();
				$this->load->model('Database_Model');
        }
	public function index()
	{
		$this->load->view('admin2\login');
	}
	public function login()
	{
		$kullaniciadi=$this->input->post("kullaniciadi");
		$sifre=$this->input->post("sifre");
		
		$kullaniciadi=$this->security->xss_clean($kullaniciadi);
		$sifre=$this->security->xss_clean($sifre);
		$this->load->model('Database_Model');
		$result=$this->Database_Model->login("login",$kullaniciadi,$sifre);
		
		if($result)
		{
			$sess_array=array(
			'id'=>$result[0]->Id,
			'kullaniciadi'=>$result[0]->kullaniciadi,
			'sifre'=>$result[0]->sifre
			);
			$this->session->set_userdata("admin_session",$sess_array);
			redirect(base_url().'admin2/AdminAna');
		}
		else
		{
			$this->session->set_flashdata("mesaj","Hatalı kullanıcı adı ya da şifre!");
			redirect(base_url().'admin2/login');
			
		}
	}
	public function login_cik()
	{
		$this->session->unset_userdata("admin_session");
			redirect(base_url().'admin2/login');
	}
}
