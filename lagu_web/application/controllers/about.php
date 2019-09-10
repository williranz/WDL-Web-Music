<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class About extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	
	function index()
	{
		$this->load->helper(array('form'));
		$this->load->view('about_view');
	}
	
}


?>