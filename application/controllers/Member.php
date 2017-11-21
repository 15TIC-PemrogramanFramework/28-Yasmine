<?php 

/**
* 
*/
class member extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('model');
	}

	function daftarmember(){
		$data['daftarmember']=$this->model->datamember();
		$this->load->view('member/daftarmember',$data);
	}

	public function tambahmember()
	{
		$data=array(
			'action' => site_url('member/tambahmemberaksi'),
			'username' => set_value('username'),
			'password' => set_value('password'),
			'nama' => set_value('nama'),
			'level' => set_value('level')
		);
		$this->load->view('member/tambahmember',$data);
	}

	function tambahmemberaksi(){
		// $username = $this->input->post('username');

		// $this->db->select('username');
		// $username=$this->db->get('member')->num_rows();

		// if($username == 0){
		$data=array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'nama' => $this->input->post('nama'),
			'level' => $this->input->post('level')
		);
		$user = $this->input->post('username');
		$this->model->tambahmember($user,$data);
		redirect(site_url('member/daftarmember'));
	// } else {
	// 	echo "Username sudah digunakan!";
	// }
	}

	function edit($username){
		$member=$this->model->ambilusername($username);
		$data=array(
			'username' => set_value('username', $member->username),
			'password' => set_value('password', $member->password),
			'nama' => set_value('nama', $member->nama),
			'level' => set_value('level', $member->level),
			'action' => site_url('member/editmemberaksi')

		);
		$this->load->view('member/formeditmember',$data);
	}

	function editmemberaksi(){
		$data=array(
			'password' => $this->input->post('password'),
			'nama' => $this->input->post('nama'),
			'level' => $this->input->post('level')
		);
		$username=$this->input->post('username');
		$this->model->editmember($username,$data);
		redirect(site_url('member/daftarmember'));
	}

	function delete($username){
		$this->model->hapusmember($username);
		redirect(site_url('member/daftarmember'));
	}
}


?>
