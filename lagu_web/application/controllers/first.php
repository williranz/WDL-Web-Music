<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class First extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$this->load->helper(array('form'));
		$this->load->view('first_view');
	}


}


?>