<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Kelola_member extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Member_model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		$this->load->library('pagination');
	}
	
	function index()
	{
		$this->load->helper(array('form'));
		
		$this->db->select('*');
		$this->db->from('tbl_user');
		$getData = $this->db->get('');
		
		$a = $getData->num_rows();
		
		$config['base_url'] = base_url().'index.php/kelola_member/GetMemberPagination';
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '8'; //the number of per page for pagination
		$config['uri_segment'] = 3; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		$data['title'] = 'menampilkan list member';
		$data['member_listX'] = $this->Member_model->GetMemberPagination($config['per_page'],$this->uri->segment(3));
		
		$this->load->view('kelola_member_view', $data);
	}
	
	function GetMemberPagination() 
	{
		$this->db->select('*');
		$this->db->from('tbl_user');
		$getData = $this->db->get('');
		
		$a = $getData->num_rows();
		
		$config['base_url'] = base_url().'index.php/kelola_member/GetMemberPagination';
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '8'; //the number of per page for pagination
		$config['uri_segment'] = 3; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		$data['title'] = 'menampilkan list member';
		$data['member_listX'] = $this->Member_model->GetMemberPagination($config['per_page'],$this->uri->segment(3));
		
		$this->load->view('kelola_member_view', $data);
	}
	
	function ToDelMember()
	{	
		$this->load->view('delete_member_view');
	}
	
	function ToEditMember()
	{	
		$this->load->view('edit_member_view');
	}
	
	function DelMember()
	{
		$id = $this->input->post('id_user');
			
		$this->Member_model->DeleteMember($id);
		
		$this->db->select('*');
		$this->db->from('tbl_user');
		$getData = $this->db->get('');
		
		$a = $getData->num_rows();
		
		$config['base_url'] = base_url().'index.php/kelola_member/GetMemberPagination';
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '8'; //the number of per page for pagination
		$config['uri_segment'] = 3; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		$data['title'] = 'menampilkan list member';
		$data['member_listX'] = $this->Member_model->GetMemberPagination($config['per_page'],$this->uri->segment(3));
		
		echo "<script language=\"javascript\">alert('Member has been deleted...');</script>";
		$this->load->view('kelola_member_view',$data);
	}
	
	
	function ubahMember()
	{
		$id = $this->input->post('id_user');
		$nama = $this->input->post('nama_asli');
		$email = $this->input->post('email');
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		
		$this->form_validation->set_rules('nama_asli', 'All column', 'required|max_length[100]');
		$this->form_validation->set_rules('email', 'All column', 'required|max_length[100]');
		$this->form_validation->set_rules('username', 'All column', 'required|max_length[100]');
		$this->form_validation->set_rules('password', 'All column', 'required|max_length[100]');
		
		if($this->form_validation->run() == false)
		{
			echo "<script language=\"javascript\">alert('No data edited... All column fields are required!');</script>";
			error_reporting(E_ERROR | E_PARSE);
			$this->load->view('edit_member_view');
			
		}
		else
		{	
			$this->Member_model->UpdateMember($id,$nama,$email,$user,$pass);
	
			$this->db->select('*');
			$this->db->from('tbl_user');
			$getData = $this->db->get('');
			$a = $getData->num_rows();
			
			$config['base_url'] = base_url().'index.php/kelola_member/GetMemberPagination';
			$config['total_rows'] = $a; //total rows
			$config['per_page'] = '8'; //the number of per page for pagination
			$config['uri_segment'] = 3; //see from base_url. 3 for this case
			$config['full_tag_open'] = '<p>';
			$config['full_tag_close'] = '</p>';
			$this->pagination->initialize($config); //initialize pagination
			$data['title'] = 'menampilkan list member';
			$data['member_listX'] = $this->Member_model->GetMemberPagination($config['per_page'],$this->uri->segment(3));
			
			echo "<script language=\"javascript\">alert('Data Member Successfully Edited');</script>";
			$this->load->view('kelola_member_view', $data);
		}
	}
	
	function GetMemberPaginationBy() 
	{
		$keyword = $this->input->post('mncari');
		
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where('role','member');
		$this->db->like('id_user',$keyword);
		$this->db->or_like('nama_asli',$keyword);
		$this->db->or_like('email',$keyword);
		$this->db->or_like('username',$keyword);
		$this->db->or_like('password',$keyword);
		
		$getData = $this->db->get('');
		
		$a = $getData->num_rows();
		
		
		$config['base_url'] = base_url().'index.php/kelola_member/GetMemberPaginationBy';
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '5'; //the number of per page for pagination
		$config['uri_segment'] = 3; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		$data['title'] = 'menampilkan list member';
		$data['member_listX'] = $this->Member_model->GetMemberPaginationBy($config['per_page'],$this->uri->segment(3),$keyword);
		
		$this->load->view('kelola_member_view', $data);
	}
	
}


?>