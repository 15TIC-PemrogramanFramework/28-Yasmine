<?php 

/**
* 
*/
class profil extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('model');
	}

	function index(){
		$username=$this->session->userdata('username');
		$member=$this->model->ambilusername($username);
		$data=array(
			'username' => set_value('username', $member->username),
			'password' => set_value('password', $member->password),
			'nama' => set_value('nama', $member->nama),
			'action' => site_url('profil/editprofilaksi')

		);
		$this->load->view('member/profil',$data);
	}

	function editprofilaksi(){
		$data=array(
			'password' => $this->input->post('password'),
			'nama' => $this->input->post('nama')
		);
		$username=$this->input->post('username');
		$this->model->editmember($username,$data);
		redirect(site_url('dashboard'));
	}
}

?>