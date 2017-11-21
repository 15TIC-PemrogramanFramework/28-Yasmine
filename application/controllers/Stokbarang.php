<?php 

/**
* 
*/
class stokbarang extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('model');
	}

	function index(){
		$data['databanfdr']=$this->model->databanfdr();
		$data['databancorsa']=$this->model->databancorsa();
		$data['databanmaxxis']=$this->model->databanmaxxis();
		$data['datahelmgm']=$this->model->datahelmgm();
		$data['datahelmkyt']=$this->model->datahelmkyt();
		$data['datahelmdyr']=$this->model->datahelmdyr();
		$data['datahelmmds']=$this->model->datahelmmds();
		$data['datahelmgtzone']=$this->model->datahelmgtzone();
		$data['datahelmnpn']=$this->model->datahelmnpn();
		$data['datahelmtakira']=$this->model->datahelmtakira();
		$this->load->view('stokbarang/stokbarang',$data);

	}

	public function tambahbarang()
	{
		$data=array(
			'action' => site_url('stokbarang/tambahbarangaksi'),
			'kategori' => set_value('kategori'),
			'kode_barang' => set_value('kode_barang'),
			'merk_barang' => set_value('merk_barang'),
			'nama_barang' => set_value('nama_barang'),
			'ukuran' => set_value('ukuran'),
			'jenis' => set_value('jenis'),
			'jumlah' => set_value('jumlah'),
			'harga' => set_value('harga')
		);
		$this->load->view('stokbarang/formtambahbarang',$data);
	}

	function tambahbarangaksi(){
		$data=array(
			'kategori' => $this->input->post('kategori'),
			'kode_barang' => $this->input->post('kode_barang'),
			'merk_barang' => $this->input->post('merk_barang'),
			'nama_barang' => $this->input->post('nama_barang'),
			'ukuran' => $this->input->post('ukuran'),
			'jenis' => $this->input->post('jenis'),
			'jumlah' => $this->input->post('jumlah'),
			'harga' => $this->input->post('harga')
		);
		$this->model->tambahbarang($data);
		redirect(site_url('stokbarang'));

	}

	function edit($kode_barang){
		$barang=$this->model->ambilkodebarang($kode_barang);
		$data=array(
			'kode_barang' => set_value('kode_barang', $barang->kode_barang),
			'nama_barang' => set_value('nama_barang', $barang->nama_barang),
			'ukuran' => set_value('ukuran', $barang->ukuran),
			'jenis' => set_value('jenis', $barang->jenis),
			'jumlah' => set_value('jumlah', $barang->jumlah),
			'harga' => set_value('harga', $barang->harga),
			'action' => site_url('stokbarang/editbarangaksi')

		);
		$this->load->view('stokbarang/formeditbarang',$data);
	}

	function editbarangaksi(){
		$oleh = $this->input->post('editoleh');

		$data=array(
			'nama_barang' => $this->input->post('nama_barang'),
			'ukuran' => $this->input->post('ukuran'),
			'jenis' => $this->input->post('jenis'),
			'jumlah' => $this->input->post('jumlah'),
			'harga' => $this->input->post('harga'),
			'editoleh' => $oleh
		);
		$kode_barang=$this->input->post('kode_barang');
		$this->model->editbarang($kode_barang,$data);
		redirect(site_url('stokbarang'));
	}

	function delete($kode_barang){
		$this->model->hapusbarang($kode_barang);
		redirect(site_url('stokbarang'));
	}

}
?>