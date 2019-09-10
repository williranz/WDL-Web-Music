<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class First_register extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Register');
	}
	
	function index()
	{
		$this->load->helper(array('form'));
		$this->load->view('first_register_view');
	}
	
	function insertRegister()
	{
		$data['base_url'] = $this->config->item('base_url');
		
		$this->form_validation->set_rules('nama_asli', 'All column', 'required|max_length[100]');
		$this->form_validation->set_rules('email', 'All column', 'required|max_length[100]');
		$this->form_validation->set_rules('username', 'All column', 'required|max_length[100]');
		$this->form_validation->set_rules('password', 'All column', 'required|max_length[100]');
		
		if($this->form_validation->run() == false)
		{	
			$this->load->view('first_register_view');
		}
		else
		{
			$data['base_url'] = $this->config->item('base_url');
			
			$nama_asli = $this->input->post('nama_asli');
			$email = $this->input->post('email');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$role = 'member';
			
			$this->Register->InsertRegister($nama_asli,$email,$username,$password,$role);
	
			echo "<script language=\"javascript\">alert('Registration success!');</script>";
			
			$this->load->view('first_view',$data);
		}
	}


}


?>