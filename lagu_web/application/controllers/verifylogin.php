<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
		$this->load->model('user','',TRUE);
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('User');
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
   
  

   if($this->form_validation->run() == FALSE)
   {
	 $this->load->view('first_view');
	 	
   }
   else
   {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $role = $this->User->getrole($username,$password);
	
	 foreach($role as $row)
     {
      
		if($row->role=='member')
		{
		 //Go to member area
		 redirect('first_submit', 'refresh'); 
		}
		else
		{
		 //Go to admin area
		 redirect('admin_submit', 'refresh');
		}
	 }
   }

 }

 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');

   //query the database
   $result = $this->user->login($username, $password);

   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id_user' => $row->id_user,
         'username' => $row->username
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
}
?>