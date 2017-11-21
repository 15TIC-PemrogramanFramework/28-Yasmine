<?php 
/**
* 
*/
class model extends CI_Model
{
	public $barang = 'barang';
	public $barangmasuk = 'barangmasuk';
	public $kode_barangmasuk = 'kode_barangmasuk';

	public $kode_barang = 'kode_barang';
	public $kategori = 'kategori';
	public $merk_barang = 'merk_barang';
	public $nama_barang='nama_barang';
	public $ukuran = 'ukuran';
	public $jenis = 'jenis';
	public $jumlah = 'jumlah';
	public $harga = 'harga';


	public $member = 'member';
	public $username = 'username';

	public $pendapatan = 'pendapatan';
	public $tanggal = 'tanggal';

	public $penjualan = 'penjualan';
	public $kode_jual = 'kode_jual';

	public $supplier = 'supplier';
	public $kode_supplier = 'kode_supplier';

	public $merkban = 'merkban';
	
	function __construct()
	{
		parent::__construct();
	}


	function cek_login($username, $password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get($this->member)->row();
	}

	function databanfdr(){
		$this->db->where('kategori','ban');
		$this->db->where('merk_barang','FDR');
		return $this->db->get($this->barang)->result();
	}

	function databancorsa(){
		$this->db->where('kategori','ban');
		$this->db->where('merk_barang','CORSA');
		return $this->db->get($this->barang)->result();
	}

	function databanmaxxis(){
		$this->db->where('kategori','ban');
		$this->db->where('merk_barang','MAXXIS');
		return $this->db->get($this->barang)->result();
	}

	function datahelmgm(){
		$this->db->where('kategori','helm');
		$this->db->where('merk_barang','GM');
		return $this->db->get($this->barang)->result();
	}

	function datahelmkyt(){
		$this->db->where('kategori','helm');
		$this->db->where('merk_barang','KYT');
		return $this->db->get($this->barang)->result();
	}

	function datahelmdyr(){
		$this->db->where('kategori','helm');
		$this->db->where('merk_barang','DYR');
		return $this->db->get($this->barang)->result();
	}

	function datahelmmds(){
		$this->db->where('kategori','helm');
		$this->db->where('merk_barang','MDS');
		return $this->db->get($this->barang)->result();
	}

	function datahelmgtzone(){
		$this->db->where('kategori','helm');
		$this->db->where('merk_barang','GTZONE');
		return $this->db->get($this->barang)->result();
	}

	function datahelmnpn(){
		$this->db->where('kategori','helm');
		$this->db->where('merk_barang','NPN');
		return $this->db->get($this->barang)->result();
	}

	function datahelmtakira(){
		$this->db->where('kategori','helm');
		$this->db->where('merk_barang','TAKIRA');
		return $this->db->get($this->barang)->result();
	}

	function tambahbarang($data){
		return $this->db->insert($this->barang,$data);
	}

	function ambilkodebarang($kode_barang){
		$this->db->where($this->kode_barang,$kode_barang);
		return $this->db->get($this->barang)->row();
	}

	function editbarang($kode_barang, $data){
		$this->db->where($this->kode_barang,$kode_barang);
		$this->db->update($this->barang,$data);
	}

	function hapusbarang($kode_barang){
		$this->db->where($this->kode_barang,$kode_barang);
		$this->db->delete($this->barang);
	}

	function databarangmasuk(){
		return $this->db->get($this->barangmasuk)->result();
	}

	function tambahbarangmasuk($data){
		return $this->db->insert($this->barangmasuk,$data);
	}

	function hapusbarangmasuk($kode_barangmasuk){
		$this->db->where($this->kode_barangmasuk,$kode_barangmasuk);
		$this->db->delete($this->barangmasuk);
	}

	function datasupplier(){
		return $this->db->geT($this->supplier)->result();
	}

	function tambahsupplier($data){
		return $this->db->insert($this->supplier,$data);
	}

	function datapenjualan(){
		return $this->db->get($this->penjualan)->result();
	}

	function tambahpenjualan($data){
		return $this->db->insert($this->penjualan,$data);
	}

	function hapuspenjualan($kode_jual){
		$this->db->where($this->kode_jual,$kode_jual);
		$this->db->delete($this->penjualan);
	}

	function hapussupplier($kode_supplier){
		$this->db->where($this->kode_supplier,$kode_supplier);
		$this->db->delete($this->supplier);
	}

	function ambilkodesupplier($kode_supplier){
		$this->db->where($this->kode_supplier,$kode_supplier);
		return $this->db->get($this->supplier)->row();
	}

	function editsupplier($kode_supplier, $data){
		$this->db->where($this->kode_supplier,$kode_supplier);
		$this->db->update($this->supplier,$data);
	}

	function datapendapatan(){
		return $this->db->get($this->pendapatan)->result();
	}

	function tambahpendapatan($data){
		$this->db->where('tanggal',date('y-m-d'));
		$query=$this->db->get('pendapatan');
		if($query->num_rows() == 0){
			return $this->db->insert($this->pendapatan,$data);
		} else {
			$this->db->where('tanggal',date('y-m-d'));
			$this->db->update($this->pendapatan,$data);
		}

	}

	function hapuspendapatan($tanggal){
		$this->db->where($this->tanggal,$tanggal);
		$this->db->delete($this->pendapatan);
	}

	function datamember(){
		return $this->db->get($this->member)->result();
	}

	function tambahmember($user, $data){
		$this->db->select('username as username')
				->from('member');
		$username = $this->db->get()->row()->username;
		if($username == $user){
			redirect('/member/tambahmember');
		} else {
				return $this->db->insert($this->member,$data);
		}
	}

	function ambilusername($username){
		$this->db->where($this->username,$username);
		return $this->db->get($this->member)->row();
	}

	function editmember($username, $data){
		$this->db->where($this->username,$username);
		$this->db->update($this->member,$data);
	}

	function hapusmember($username){
		$this->db->where($this->username,$username);
		$this->db->delete($this->member);
	}

}
?>