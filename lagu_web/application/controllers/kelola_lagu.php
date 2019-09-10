<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Kelola_lagu extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Lagu_model');
		$this->load->library('pagination');
		$this->load->helper(array('form', 'url'));
		$this->load->helper('date');
	}
	
	function index()
	{
		$this->load->helper(array('form'));
		
		$this->db->select('*');
		$this->db->from('tbl_lagu');
		$getData = $this->db->get('');
		
		$a = $getData->num_rows();
		
		$config['base_url'] = base_url().'index.php/kelola_lagu/GetLaguPagination';
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '5'; //the number of per page for pagination
		$config['uri_segment'] = 3; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		$data['title'] = 'menampilkan list lagu';
		$data['lagu_listX'] = $this->Lagu_model->GetLaguPagination($config['per_page'],$this->uri->segment(3));
		
		$this->load->view('kelola_lagu_view', $data);
		
	}
	
	function do_upload()
	{
		$config['upload_path'] = 'C:\xampp\htdocs\lagu_web\file\uploads';
        $config['allowed_types'] = '*';
        $config['max_size']    = '20480';

		$this->load->library('upload', $config);
		$data = array('upload_data' => $this->upload->data());	
		$this->load->view('kelola_lagu_view', $data);		
	}
	
	function insertLagu()
	{
		$data['base_url'] = $this->config->item('base_url');
		
		$this->form_validation->set_rules('artis', 'Artis', 'required|max_length[100]');
		$this->form_validation->set_rules('album', 'Album', 'required|max_length[100]');
		
		if($this->form_validation->run() == false|| empty($_FILES['userfile']['name']))
		{	
			//display lagu
			$this->db->select('*');
			$this->db->from('tbl_lagu');
			$getData = $this->db->get('');
				
			$a = $getData->num_rows();
				
			$config['base_url'] = base_url().'index.php/kelola_lagu/GetLaguPagination';
			$config['total_rows'] = $a; //total rows
			$config['per_page'] = '5'; //the number of per page for pagination
			$config['uri_segment'] = 3; //see from base_url. 3 for this case
			$config['full_tag_open'] = '<p>';
			$config['full_tag_close'] = '</p>';
			$this->pagination->initialize($config); //initialize pagination
			$data['title'] = 'menampilkan list lagu';
			$data['lagu_listX'] = $this->Lagu_model->GetLaguPagination($config['per_page'],$this->uri->segment(3));
			echo "<script language=\"javascript\">alert('No data inserted... Fill all upload fields, use file in allowed size and correct file format !');</script>";
			$this->load->view('kelola_lagu_view', $data);
		}
		else
		{
			//code for insert song data
			$data['base_url'] = $this->config->item('base_url');
			
			$artis = $this->input->post('artis');
			$album = $this->input->post('album');
			$genre = $this->input->post('genre');
			$tgl_edit = $this->input->post('tgl');
			$download_time = 1;
			$path_gambar_album = '-';
			
			//code for upload song
			$config['upload_path'] = 'C:\xampp\htdocs\lagu_web\file\uploads';
			$config['allowed_types'] = '*';
			$config['max_size']    = '20480';

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload())
			{
				echo "<script language=\"javascript\">alert('Upload error, check your upload path before you upload the file...');</script>";
				error_reporting(E_ERROR | E_PARSE);
				$this->load->view('kelola_lagu_view', $data);
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				
				//insert lagu
				
				$upload_dataX = $this->upload->data(); 
				
				$judul =  $upload_dataX['file_name'];
				$size_lagu =  $upload_dataX['file_size'];
				$path_lagu =  $upload_dataX['full_path'];
			
				$this->Lagu_model->InsertLagu($artis,$judul,$album,$genre,$tgl_edit,$download_time,$path_gambar_album,$size_lagu,$path_lagu);
			
				
				//display lagu
				$this->db->select('*');
				$this->db->from('tbl_lagu');
				$getData = $this->db->get('');
				
				$a = $getData->num_rows();
				
				$config['base_url'] = base_url().'index.php/kelola_lagu/GetLaguPagination';
				$config['total_rows'] = $a; //total rows
				$config['per_page'] = '5'; //the number of per page for pagination
				$config['uri_segment'] = 3; //see from base_url. 3 for this case
				$config['full_tag_open'] = '<p>';
				$config['full_tag_close'] = '</p>';
				$this->pagination->initialize($config); //initialize pagination
				$data['title'] = 'menampilkan list lagu';
				$data['lagu_listX'] = $this->Lagu_model->GetLaguPagination($config['per_page'],$this->uri->segment(3));
				echo "<script language=\"javascript\">alert('Song has successfully inserted...');</script>";
				$this->load->view('kelola_lagu_view',$data);
			}
			
		}
			
	}
	
	function GetLaguPagination() 
	{
		$this->db->select('*');
		$this->db->from('tbl_lagu');
		$getData = $this->db->get('');
		
		$a = $getData->num_rows();
		
		$config['base_url'] = base_url().'index.php/kelola_lagu/GetLaguPagination';
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '5'; //the number of per page for pagination
		$config['uri_segment'] = 3; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		$data['title'] = 'menampilkan list lagu';
		$data['lagu_listX'] = $this->Lagu_model->GetLaguPagination($config['per_page'],$this->uri->segment(3));
		
		$this->load->view('kelola_lagu_view', $data);
	}
	
	function ToDelLagu()
	{	
		$this->load->view('delete_lagu_view');
	}
	
	function ToEditLagu()
	{	
		$this->load->view('edit_lagu_view');
	}
	
	function ToAddLagu()
	{	
		$this->load->view('add_lagu_view');
	}
	
	function DelLagu()
	{
		$id = $this->input->post('id_lagu');
			
		$this->Lagu_model->DeleteLagu($id);
		
		//get lagu
		$this->db->select('*');
		$this->db->from('tbl_lagu');
		$getData = $this->db->get('');
		
		$a = $getData->num_rows();
		
		$config['base_url'] = base_url().'index.php/kelola_lagu/GetLaguPagination';
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '5'; //the number of per page for pagination
		$config['uri_segment'] = 3; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		$data['title'] = 'menampilkan list lagu';
		$data['lagu_listX'] = $this->Lagu_model->GetLaguPagination($config['per_page'],$this->uri->segment(3));//get lagu
		
		echo "<script language=\"javascript\">alert('Song has successfully deleted...');</script>";
		$this->load->view('kelola_lagu_view',$data);
		
	}
	
	
	function ubahLagu()
	{
		$this->form_validation->set_rules('artis', 'Artis', 'required|max_length[100]');
		$this->form_validation->set_rules('album', 'Album', 'required|max_length[100]');
		
		if($this->form_validation->run() == false)
		{
			echo "<script language=\"javascript\">alert('No data edited... All column fields are required!');</script>";
			error_reporting(E_ERROR | E_PARSE);
			$this->load->view('edit_lagu_view');
		}
		else
		{
			$id = $this->input->post('id_lagu');
			$artis = $this->input->post('artis');
			$judul = $this->input->post('judul');
			$album = $this->input->post('album');
			$genre = $this->input->post('genre');
			$tgl_edit = $this->input->post('tgl_edit');
			
			$this->Lagu_model->UpdateLagu($id,$artis,$judul,$album,$genre,$tgl_edit);
	
			//get lagu
			$this->db->select('*');
			$this->db->from('tbl_lagu');
			$getData = $this->db->get('');
			
			$a = $getData->num_rows();
			
			$config['base_url'] = base_url().'index.php/kelola_lagu/GetLaguPagination';
			$config['total_rows'] = $a; //total rows
			$config['per_page'] = '5'; //the number of per page for pagination
			$config['uri_segment'] = 3; //see from base_url. 3 for this case
			$config['full_tag_open'] = '<p>';
			$config['full_tag_close'] = '</p>';
			$this->pagination->initialize($config); //initialize pagination
			$data['title'] = 'menampilkan list lagu';
			$data['lagu_listX'] = $this->Lagu_model->GetLaguPagination($config['per_page'],$this->uri->segment(3));//get lagu

			echo "<script language=\"javascript\">alert('Song has successfully edited...');</script>";
			$this->load->view('kelola_lagu_view', $data);
		}
	}
	
	function GetLaguPaginationBy() 
	{
		$keyword = $this->input->post('mencari');
	
		$this->db->select('*');
		$this->db->from('tbl_lagu');
		$this->db->like('judul',$keyword);
		$this->db->or_like('artis',$keyword);
		$this->db->or_like('genre',$keyword);
		$this->db->or_like('album',$keyword);
		$this->db->or_like('tgl_edit',$keyword);
		$this->db->or_like('download_time',$keyword);
		$this->db->or_like('size_lagu',$keyword);
		$getData = $this->db->get('');
		
		$a = $getData->num_rows();
		
		
		$config['base_url'] = base_url().'index.php/kelola_lagu/GetLaguPaginationBy';
		$config['total_rows'] = $a; //total rows
		$config['per_page'] = '5'; //the number of per page for pagination
		$config['uri_segment'] = 3; //see from base_url. 3 for this case
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
		$this->pagination->initialize($config); //initialize pagination
		$data['title'] = 'menampilkan list lagu';
		$data['lagu_listX'] = $this->Lagu_model->GetLaguPaginationBy($config['per_page'],$this->uri->segment(3),$keyword);
		$this->load->view('kelola_lagu_view', $data);
	}
}

?>