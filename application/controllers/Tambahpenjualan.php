<?php 

/**
* 
*/
class tambahpenjualan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('model');
	}

	function index(){
		$data=array(
			'action' => site_url('tambahpenjualan/tambahpenjualanaksi'),
			'kode_jual' => set_value('kode_jual'),
			'kode_barang' => set_value('kode_barang'),
			'jumlah' => set_value('jumlah'),
			'harga_pokok' => set_value('harga_pokok'),
			'harga_jual' => set_value('harga_jual'),
			'harga_jualtotal' => set_value('harga_jualtotal'),
			'harga_pokoktotal' => set_value('harga_pokoktotal'),
			'laba' => set_value('laba'),
			'tanggal' => set_value('tanggal'),
			'oleh' => set_value('oleh')
		);
		$this->load->view('penjualan/tambahpenjualan',$data);
	}

	function tambahpenjualanaksi(){
		$kode_barang = $this->input->post('kode_barang');
		$oleh = $this->input->post('oleh');

		$this->db->select('harga as harga')
					  ->from('barang')
					  ->where('kode_barang',$kode_barang);

		$harga_pokok = $this->db->get()->row()->harga;

		$jumlah = $this->input->post('jumlah');
		$harga_jual = $this->input->post('harga_jual');

		$harga_pokoktotal= $harga_pokok * $jumlah;
		$harga_jualtotal = $harga_jual * $jumlah;
		$laba = $harga_jualtotal - $harga_pokoktotal;

		$data=array(
			'kode_jual' => $this->input->post('kode_jual'),
			'kode_barang' => $this->input->post('kode_barang'),
			'jumlah' => $jumlah,
			'harga_pokok' => $harga_pokok,
			'harga_jual' => $harga_jual,
			'harga_jualtotal' => $harga_jualtotal,
			'harga_pokoktotal' => $harga_pokoktotal,
			'laba' => $laba,
			'tanggal' => $this->input->post('tanggal'),
			'oleh' => $oleh
		);
		$this->model->tambahpenjualan($data);
		redirect(site_url('daftarpenjualan'));
	}
}
?>