<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
if ( ! function_exists('thead_helper')){
	function thead()
	{
		return
		'<thead>
		<tr>
		<th>Kode Barang</th>
		<th>Nama Produk</th>
		<th>Ukuran</th>
		<th>Jenis/Warna</th>
		<th>Jumlah</th>
		<th>Harga</th>
		<th>Ditambahkan oleh</th>
		<th>Diedit terakhir oleh</th>
		<th>Aksi</th>
		</tr>
		</thead>
		';
	}
}
?>

