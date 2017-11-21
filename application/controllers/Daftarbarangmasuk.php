<?php 

/**
* 
*/
class daftarbarangmasuk extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('model');
	}

	function index(){
		$data['daftarbarangmasuk']=$this->model->databarangmasuk();
		$this->load->view('barangmasuk/daftarbarangmasuk',$data);
	}

	function delete($kode_barangmasuk){
		$this->model->hapusbarangmasuk($kode_barangmasuk);
		redirect(site_url('daftarbarangmasuk'));
	}
}

?>
