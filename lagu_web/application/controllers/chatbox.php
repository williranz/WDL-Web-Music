<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Chatbox extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Chat_model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	
	function index()
	{
		$this->load->helper(array('form'));
		
		$data['chat_list'] = $this->Chat_model->GetChat();
		
		$this->load->view('chatbox_view', $data);
	}
	
	function insertChat()
	{
		$data['base_url'] = $this->config->item('base_url');
		
		$this->form_validation->set_rules('nama_user', 'Nama', 'required|max_length[100]');
		$this->form_validation->set_rules('chat', 'Chat', 'required|max_length[100]');
		
		if($this->form_validation->run() == false)
		{	
			$data['chat_list'] = $this->Chat_model->GetChat();
	
			$this->load->view('chatbox_view',$data);
		}
		else
		{
			$data['base_url'] = $this->config->item('base_url');
			
			$nama_user = $this->input->post('nama_user');
			$chat = $this->input->post('chat');
			
			
			$this->Chat_model->InsertChat($nama_user,$chat);
			
			$data['chat_list'] = $this->Chat_model->GetChat();
	
			$this->load->view('chatbox_view',$data);
		}
	}
	


}


?>