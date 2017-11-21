<?php 

/**
* 
*/
class tambahhelm extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('model');
	}

	function index(){
		$data=array(
			'action' => site_url('tambahhelm/tambahhelmaksi'),
			'kategori' => set_value('kategori'),
			'kode_barang' => set_value('kode_barang'),
			'merk_barang' => set_value('merk_barang'),
			'nama_barang' => set_value('nama_barang'),
			'ukuran' => set_value('ukuran'),
			'jenis' => set_value('jenis'),
			'jumlah' => set_value('jumlah'),
			'harga' => set_value('harga'),
			'oleh' => set_value('oleh')
		);
		$this->load->view('stokbarang/formtambahhelm',$data);
	}

	function tambahhelmaksi(){
		$kode_barang = $this->input->post('kode_barang');

		$this->db->select('kode_barang as kode')
				->from('barang');
		$kode = $this->db->get()->row()->kode;
		
		if($kode == $kode_barang){
			echo "Kode barang sudah digunakan!";
		} else {
		$oleh = $this->input->post('oleh');

		$data=array(
			'kategori' => $this->input->post('kategori'),
			'kode_barang' => $this->input->post('kode_barang'),
			'merk_barang' => $this->input->post('merk_barang'),
			'nama_barang' => $this->input->post('nama_barang'),
			'ukuran' => $this->input->post('ukuran'),
			'jenis' => $this->input->post('jenis'),
			'jumlah' => $this->input->post('jumlah'),
			'harga' => $this->input->post('harga'),
			'oleh' => $oleh
		);
		$this->model->tambahbarang($data);
		redirect(site_url('stokbarang'));
	}
	}
}
?>