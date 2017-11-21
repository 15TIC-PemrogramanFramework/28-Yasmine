<?php 

/**
* 
*/
class banmasuk extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('model');
	}

	function index(){
		$data=array(
			'action' => site_url('banmasuk/tambahbanaksi'),
			'kode_barangmasuk' => set_value('kode_barangmasuk'),
			'kode_barang' => set_value('kode_barang'),
			'jumlah' => set_value('jumlah'),
			'harga' => set_value('harga'),
			'oleh' => set_value('oleh')
		);
		$this->load->view('barangmasuk/banmasuk',$data);
	}

	function tambahbanaksi(){

		$oleh = $this->input->post('oleh');

		$data=array(
			'kode_barangmasuk' => $this->input->post('kode_barangmasuk'),
			'kode_barang' => $this->input->post('kode_barang'),
			'jumlah' => $this->input->post('jumlah'),
			'tanggal' => $this->input->post('tanggal'),
			'oleh' => $oleh
		);
		$this->model->tambahbarangmasuk($data);
		redirect(site_url('daftarbarangmasuk'));

	}
}
?>