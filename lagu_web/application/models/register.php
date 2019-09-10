<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	function InsertRegister($nama_asli,$email,$username,$password,$role)
	{
		$reg = array(
			'nama_asli' => $nama_asli,
			'email' => $email,
			'username' => $username,
			'password' => $password,
			'role' => $role
			);
		$this->db->insert('tbl_user',$reg);
	}
	
	
	
}

