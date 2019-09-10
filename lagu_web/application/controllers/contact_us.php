<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Contact_us extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper('email');
	}
	
	function index()
	{
		$this->load->helper(array('form'));
		$this->load->view('contact_us_view');
	}
	
	function sendEmail()
	{
	
		$this->form_validation->set_rules('email', 'Email', 'required|max_length[100]');
		$this->form_validation->set_rules('password', 'Password', 'required|max_length[100]');
	
		if($this->form_validation->run() == false)
		{
			echo "<script language=\"javascript\">alert('No email send... email id and password field are required!');</script>";
			$this->load->view('contact_us_view');
		}
		else
		{
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$subjek = $this->input->post('subjek');
				$pesan = $this->input->post('pesan');
				
				$config = Array(
					  'protocol' => 'smtp',
					  'smtp_host' => 'ssl://smtp.googlemail.com',
					  'smtp_port' => 465,
					  'smtp_user' => $email,
					  'smtp_pass' => $password
			   
			);
			 
			$this->load->library('email', $config);    
			$this->email->set_newline("\r\n"); /* for some reason it is needed */
			 
			$this->email->from($email, 'Member');
			$this->email->to('williamcahyadi90@gmail.com');
			$this->email->subject($subjek);
			$this->email->message($pesan);
			 
			if($this->email->send())
			{
			  //echo 'email sudah terkirim';
			  echo "<script language=\"javascript\">alert('Thanks!!! Your email has successfully sent. We will check your email and give you feedback regarding your email...');</script>";
			  $this->load->view('contact_us_view');
			}
			else
			{
				//show_error($this->email->print_debugger());
			   echo "<script language=\"javascript\">alert('Thanks for sending us an email. We will check your email and give you feedback regarding your email... note : your email might not be sent if your email id or email password aunthentication failed...');</script>";
			   $this->load->view('contact_us_view');		
			}
		}
	}
}

?>