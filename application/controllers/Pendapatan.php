<?php 

/**
* 
*/
class pendapatan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('model');
	}

	function index(){
		$this->db->where('tanggal',date('y-m-d'));
		$query=$this->db->get('pendapatan');
		// if($query->num_rows() == 0){
		// 	$data=array(
		// 		'action' => site_url('pendapatan/tambahpendapatan'),
		// 		'tanggal' => date('y-m-d'),
		// 		'pendapatan_kotor' => '0',
		// 		'pendapatan_bersih' => '0'
		// 	); 
		// 	$this->load->view('pendapatan/tambahpendapatan',$data);
		// }

		$this->db->select('SUM(harga_jualtotal) as pendapatan_kotor')
				-> from ('penjualan')
				-> where ('tanggal', date('y-m-d'));
		$pendapatan_kotor = $this->db->get()->row()->pendapatan_kotor;

		$this->db->select('SUM(laba) as pendapatan_bersih')
				-> from ('penjualan')
				-> where ('tanggal', date('y-m-d'));
		$pendapatan_bersih = $this->db->get()->row()->pendapatan_bersih;

		$data=array(
			'action' => site_url('pendapatan/tambahpendapatan'),
			'tanggal' => date('y-m-d'),
			'pendapatan_kotor' => $pendapatan_kotor,
			'pendapatan_bersih' => $pendapatan_bersih
		);
		$this->load->view('pendapatan/tambahpendapatan',$data);
	
	}

	function tambahpendapatan(){
		$data=array(
			'tanggal' => $this->input->post('tanggal'),
			'pendapatan_kotor' => $this->input->post('pendapatan_kotor'),
			'pendapatan_bersih' => $this->input->post('pendapatan_bersih')
		);
		
		$this->model->tambahpendapatan($data);
		redirect(site_url('pendapatan/listpendapatan'));
	}

	function listpendapatan(){
		$data['daftarpendapatan']=$this->model->datapendapatan();
		$this->load->view('pendapatan/daftarpendapatan',$data);
	}
	
	function delete($tanggal){
		$this->model->hapuspendapatan($tanggal);
		redirect(site_url('pendapatan/listpendapatan'));
	}
}
?>