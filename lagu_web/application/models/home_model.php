<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	function InsertKomentar($komentar,$nama)
	{
		$comment = array(
			'komentar' => $komentar,
			'nama_user' => $nama
			);
		$this->db->insert('tbl_komentar',$comment);
	}
	
	function GetKomentar()
	{
		$this->db->select();
		$this->db->from('tbl_komentar');
		
		$query = $this->db->get();
		return $query->result();
	}
	
	
}

