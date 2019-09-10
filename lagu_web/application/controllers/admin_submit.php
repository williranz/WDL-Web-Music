<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
session_start(); 
class Admin_submit extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('user');
	}
	
	function index()
	{
		$this->load->helper(array('form'));
		
		if($this->session->userdata('logged_in'))
	   {
		 $session_data = $this->session->userdata('logged_in');
		 $data['username'] = $session_data['username'];
		 $this->load->view('admin_submit_view', $data);
	   }
	   else
	   {
		 //If no session, redirect to login page
		 redirect('first', 'refresh');
	   }
		
	}
	
	function logout()
	{
	   $this->session->unset_userdata('logged_in');
	   session_destroy();
	   redirect('first', 'refresh');
	}


}


?>