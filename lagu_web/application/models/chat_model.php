<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Chat_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	
	function GetChat()
	{
		$this->db->select();
		$this->db->from('tbl_chat');
		$this->db->order_by('id_chat','DESC');
		$this->db->limit(10);
		
		$query = $this->db->get();
		return $query->result();
	}
	
	function InsertChat($nama_user,$chat)
	{
		$ch = array(
			'nama_user' => $nama_user,
			'chat' => $chat
			);
		$this->db->insert('tbl_chat',$ch);
	}
	
	
}

