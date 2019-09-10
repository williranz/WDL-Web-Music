<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Album extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Lagu_model');
		$this->load->library('pagination');
	}
	
	function index()
	{
		$this->load->helper(array('form'));
		
		$this->db->select('*');
		$this->db->from('tbl_lagu');
		$getData = $this->db->get('');
		
		$a = $getData->num_rows();
		
		$config['base_url'] = base_url().'index.php/album/GetLaguPagination';
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '8'; //the number of per page for pagination
		$config['uri_segment'] = 3; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		$data['title'] = 'menampilkan list lagu';
		$data['lagu_listX'] = $this->Lagu_model->GetLaguPagination($config['per_page'],$this->uri->segment(3));
		
		$this->load->view('album_view', $data);
	}
	
	function to_download()
	{	
		$this->load->view('download_view');
	}
	
	function do_download()
	{
		$this->load->helper('download');
		$namaL = $this->input->post('judul');
		$dtL = $this->input->post('dt');
		$url = "http://localhost/lagu_web/file/uploads/".$namaL;
		//$url="C:\\xampp\htdocs\LAGU_web\\file\uploads\\".$namaL;
		$data = file_get_contents($url); 
		force_download($namaL, $data);
		$this->Lagu_model->UpdateDownTime($namaL,$dtL);
	}
	
	
	function GetLaguPagination() 
	{
		$this->db->select('*');
		$this->db->from('tbl_lagu');
		$getData = $this->db->get('');
		
		$a = $getData->num_rows();
		
		$config['base_url'] = base_url().'index.php/album/GetLaguPagination';
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '8'; //the number of per page for pagination
		$config['uri_segment'] = 3; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		$data['title'] = 'menampilkan list lagu';
		$data['lagu_listX'] = $this->Lagu_model->GetLaguPagination($config['per_page'],$this->uri->segment(3));
		
		$this->load->view('album_view', $data);
	}
	
	function GetLaguPaginationBy() 
	{
		$keyword = $this->input->post('cari');
	
		$this->db->select('*');
		$this->db->from('tbl_lagu');
		$this->db->where('path_gambar_album','-');
		$this->db->like('id_lagu',$keyword);
		$this->db->or_like('artis',$keyword);
		$this->db->or_like('judul',$keyword);
		$this->db->or_like('album',$keyword);
		$this->db->or_like('size_lagu',$keyword);
		$this->db->or_like('genre',$keyword);
		$getData = $this->db->get('');
		
		$a = $getData->num_rows();
		
		
		$config['base_url'] = base_url().'index.php/album/GetLaguPaginationBy';
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '8'; //the number of per page for pagination
		$config['uri_segment'] = 3; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		$data['title'] = 'menampilkan list lagu';
		$data['lagu_listX'] = $this->Lagu_model->GetLaguPaginationBy2($config['per_page'],$this->uri->segment(3),$keyword);
		
		$this->load->view('album_view', $data);
	}
}
?>