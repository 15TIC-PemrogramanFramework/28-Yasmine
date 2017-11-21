<?php 

/**
* 
*/
class editban extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('model');
	}

	function edit($kode_barang){
		$barang=$this->model->ambilkodebarang($kode_barang);
		$data=array(
			'kode_barang' => set_value('$kode_barang', $barang->kode_barang),
			'nama_barang' => set_value('$nama_barang', $barang->nama_barang),
			'merk_barang' => set_value('$merk_barang', $barang->merk_barang),
			'ukuran' => set_value('$ukuran', $barang->ukuran),
			'jenis' => set_value('$jenis', $barang->jenis),
			'jumlah' => set_value('$jumlah', $barang->jumlah),
			'harga' => set_value('$harga', $barang->harga),
			'oleh' => set_value('$oleh', $barang->oleh),
			'action' => site_url('stokbarang/editbarangaksi')
		);
		$this->load->view('stokbarang/formeditban',$data);
	}



}

?>