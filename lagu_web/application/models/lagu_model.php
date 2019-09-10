<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Lagu_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function InsertLagu($artis,$judul,$album,$genre,$tgl_edit,$download_time,$path_gambar_album,$size_lagu,$path_lagu)
	{
		$regLagu = array(
			'artis' => $artis,
			'judul' => $judul,
			'album' => $album,
			'genre' => $genre,
			'tgl_edit' => $tgl_edit,
			'download_time' => $download_time,
			'path_gambar_album' => $path_gambar_album,
			'size_lagu' => $size_lagu,
			'path_lagu' => $path_lagu
			);
		$this->db->insert('tbl_lagu',$regLagu);
	}
	
	function GetLagu()
	{
		$this->db->select();
		$this->db->from('tbl_lagu');
		
		$query = $this->db->get();
		return $query->result();
	}
	
	function GetLaguPagination($perPage,$uri) 
	{ //to get all data in tb_book
		$this->db->select('*');
		$this->db->from('tbl_lagu');
		$this->db->order_by('id_lagu','ASC');
		$getData = $this->db->get('', $perPage, $uri);
		if($getData->num_rows() > 0)
			return $getData->result_array();
		return null;
	}
	
	function DeleteLagu($id_lagu)
	{
		$this->db->where('id_lagu',$id_lagu);
		$this->db->delete('tbl_lagu');	
	}
	
	function UpdateLagu($id,$artis,$judul,$album,$genre,$tgl_edit)
	{
	
		$lagu = array(
			'artis' => $artis,
			'judul' => $judul,
			'album' => $album,
			'genre' => $genre,
			'tgl_edit' => $tgl_edit,
			);
			
		$this->db->where('id_lagu', $id);
		$this->db->update('tbl_lagu', $lagu);
	}
	
	function GetLaguPaginationBy($perPage,$uri,$keyword) 
	{ //to get all data in tb_book
	
		$this->db->select('*');
		$this->db->from('tbl_lagu');
		$this->db->like('id_lagu',$keyword);
		$this->db->or_like('judul',$keyword);
		$this->db->or_like('artis',$keyword);
		$this->db->or_like('genre',$keyword);
		$this->db->or_like('album',$keyword);
		$this->db->or_like('tgl_edit',$keyword);
		$this->db->or_like('download_time',$keyword);
		$this->db->or_like('size_lagu',$keyword);
		$this->db->order_by('id_lagu','ASC');
		$getData = $this->db->get('', $perPage, $uri);
		
		if($getData->num_rows() > 0)
			return $getData->result_array();
		
		else
			return null;	
	}
	
	
	function GetLaguPaginationBy2($perPage,$uri,$keyword) 
	{ //to get all data in tb_book
		
		$this->db->select('*');
		$this->db->from('tbl_lagu');
		$this->db->like('id_lagu',$keyword);
		$this->db->or_like('judul',$keyword);
		$this->db->or_like('artis',$keyword);
		$this->db->or_like('genre',$keyword);
		$this->db->or_like('album',$keyword);
		$this->db->or_like('size_lagu',$keyword);
		$this->db->order_by('id_lagu','ASC');
		$getData = $this->db->get('', $perPage, $uri);
		
		if($getData->num_rows() > 0)
			return $getData->result_array();
		
		else
			return null;
		
	}
	function UpdateDownTime($namaL,$dtL)
	{
		
		$lagu = array
		(
			'download_time' => ($dtL + 1),
		);
			
		$this->db->where('judul', $namaL);
		$this->db->update('tbl_lagu', $lagu);
	}	
}

