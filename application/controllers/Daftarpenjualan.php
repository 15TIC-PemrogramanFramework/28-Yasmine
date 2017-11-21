<?php 

/**
* 
*/
class daftarpenjualan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('model');
	}

	function index(){
		$data['datapenjualan']=$this->model->datapenjualan();
		$this->load->view('penjualan/daftarpenjualan',$data);
	}

	function delete($kode_jual){
		$this->model->hapuspenjualan($kode_jual);
		redirect(site_url('daftarpenjualan'));
	}

	
}
?>