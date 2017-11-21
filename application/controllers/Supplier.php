<?php 

/**
* 
*/
class supplier extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('model');
	}

	function index(){
		$data['daftarsupplier']=$this->model->datasupplier();
		$this->load->view('supplier/daftarsupplier',$data);
	}

	function delete($kode_supplier){
		$this->model->hapussupplier($kode_supplier);
		redirect(site_url('supplier'));
	}

	function edit($kode_supplier){
		$supplier=$this->model->ambilkodesupplier($kode_supplier);
		$data=array(
			'kode_supplier' => set_value('kode_supplier', $supplier->kode_supplier),
			'nama_supplier' => set_value('nama_supplier', $supplier->nama_supplier),
			'alamat' => set_value('alamat', $supplier->alamat),
			'no_telp' => set_value('no_telp', $supplier->no_telp),
			'action' => site_url('supplier/editsupplieraksi')

		);
		$this->load->view('supplier/formeditsupplier',$data);
	}

	function editsupplieraksi(){
		$data=array(
			'nama_supplier' => $this->input->post('nama_supplier'),
			'alamat' => $this->input->post('alamat'),
			'no_telp' => $this->input->post('no_telp')
		);
		$kode_supplier=$this->input->post('kode_supplier');
		$this->model->editsupplier($kode_supplier,$data);
		redirect(site_url('supplier'));
	}
	
}
?>