<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Member_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	
	function GetMember()
	{
		$this->db->select();
		$this->db->from('tbl_user');
		$this->db->where('role','member');
		
		$query = $this->db->get();
		return $query->result();
	}
	
	function GetMemberPagination($perPage,$uri) 
	{ //to get all data in tb_book
		
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where('role','member');
		
		$this->db->order_by('id_user','ASC');
		$getData = $this->db->get('', $perPage, $uri);
		if($getData->num_rows() > 0)
			return $getData->result_array();
		else
			return null;
	}
	
	function DeleteMember($id_member)
	{
		$this->db->where('ID_USER',$id_member);
		$this->db->delete('tbl_user');	
	}
	
	function UpdateMember($id,$nama,$email,$user,$pass)
	{
	
		$member = array(
			'nama_asli' => $nama,
			'email' => $email,
			'username' => $user,
			'password' => $pass
			);
			
		$this->db->where('id_user', $id);
		$this->db->update('tbl_user', $member);
	}
	
	function GetMemberPaginationBy($perPage,$uri,$keyword) 
	{ //to get all data in tb_book
	
		$id=1;
		$role='admin';
		$username='william';
		$password='william';
		$fullname='William';
		$email='williamcahyadi90@gmail.com';
		
		if($keyword=='')
		{
			$this->db->select('*');
			$this->db->from('tbl_user');
		
			$this->db->where('id_user !=',$id);
			$this->db->where('nama_asli !=',$fullname);
			$this->db->where('email !=',$email);
			$this->db->where('username !=',$username);
			$this->db->where('password !=',$password);
			$this->db->where('role !=',$role);
			
			$this->db->order_by('id_user','ASC');
			$getData = $this->db->get('', $perPage, $uri);
		
			if($getData->num_rows() > 0)
				return $getData->result_array();
		
			else
				return null;
		}
		else
		{
			$this->db->select('*');
			$this->db->from('tbl_user');
	
			$this->db->where('id_user !=',$id);
			$this->db->where('nama_asli !=',$fullname);
			$this->db->where('email !=',$email);
			$this->db->where('username !=',$username);
			$this->db->where('password !=',$password);
			$this->db->where('role !=',$role);
		
			$this->db->like('id_user',$keyword);
			$this->db->or_like('nama_asli',$keyword);
			$this->db->or_like('email',$keyword);
			$this->db->or_like('username',$keyword);
			$this->db->or_like('password',$keyword);
			$this->db->or_like('role',$keyword);
		
			$this->db->order_by('id_user','ASC');
			$getData = $this->db->get('', $perPage, $uri);
	
			if($getData->num_rows() > 0)
				return $getData->result_array();
	
			else
				return null;
		
		}		
		
	}
	
}

