<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
function sidemenu()
{
	return '
	<li>
	<a href="'.site_url('dashboard').'"><i class="fa fa-dashboard"></i>Dashboard</a>
	</li>
	<li>
	<a href=#>
	<i class="fa fa-files-o"></i><span>Stok Barang</span><i class="fa fa-angle-right pull-right"></i>
	</a>
	<ul class="treeview-menu">
	<li><a href="'.site_url('stokbarang').'"><i class="fa fa-files-o"></i> Daftar Barang</a></li>
	<li><a href=#><i class="fa fa-pencil"></i> Tambah Barang<i class="fa fa-angle-right pull-right"></i></a>
	<ul class="treeview-menu">
	<li><a href="'.site_url('tambahban').'"><i class="fa fa-pencil-square"></i> Tambah Data Ban</a></li>
	<li><a href="'.site_url('tambahhelm').'"><i class="fa fa-pencil-square"></i> Tambah Data Helm</a></li>
	</ul>
	</li>
	</ul>
	</li>
	<li>
	<a href=#><i class="fa fa-truck"></i>Barang Masuk<i class="fa fa-angle-right pull-right"></i></a>
	<ul class="treeview-menu">
	<li><a href="'.site_url('daftarbarangmasuk').'"><i class="fa fa-files-o"></i> Daftar Barang Masuk</a></li>
	<li><a href=#><i class="fa fa-pencil"></i> Tambah Barang Masuk <i class="fa fa-angle-right pull-right"></i></a>
	<ul class="treeview-menu">
	<li><a href="'.site_url('banmasuk').'"><i class="fa fa-pencil-square"></i> Barang Masuk Ban</a></li>
	<li><a href="'.site_url('helmmasuk').'"><i class="fa fa-pencil-square"></i> Barang Masuk Helm</a></li>
	</ul>
	</li>
	</ul>
	</li>
	<li>
	<a href=#><i class="fa fa-users"></i>Supplier<i class="fa fa-angle-right pull-right"></i></a>
	<ul class="treeview-menu">
	<li><a href="'.site_url('supplier').'"><i class="fa fa-files-o"></i> Daftar Supplier</a></li>
	<li><a href="'.site_url('tambahsupplier').'"><i class="fa fa-pencil"></i> Tambah Supplier</a></li>
	</ul>
	</li>
	<li>
	<a href=#><i class="fa fa-shopping-cart"></i>Penjualan<i class="fa fa-angle-right pull-right"></i></a>
	<ul class="treeview-menu">
	<li><a href="'.site_url('daftarpenjualan').'"><i class="fa fa-files-o"></i> Daftar Penjualan</a></li>
	<li><a href="'.site_url('tambahpenjualan').'"><i class="fa fa-pencil"></i> Tambah Penjualan</a></li>
	</ul>
	</li>
	<li>
	<a href=#><i class="fa fa-money"></i>Pendapatan<i class="fa fa-angle-right pull-right"></i></a>
	<ul class="treeview-menu">
	<li><a href="'.site_url('pendapatan/listpendapatan').'"><i class="fa fa-files-o"></i> Daftar Pendapatan</a></li>
	<li><a href="'.site_url('pendapatan').'"><i class="fa fa-pencil"></i> Tambah Pendapatan</a></li>
	</ul>
	</li>
	<li>
	<a href=#><i class="fa fa-user"></i>Member<i class="fa fa-angle-right pull-right"></i></a>
	<ul class="treeview-menu">
	<li><a href="'.site_url('member/daftarmember').'"><i class="fa fa-files-o"></i> Daftar Member</a></li>
	<li><a href="'.site_url('member/tambahmember').'"><i class="fa fa-pencil"></i> Tambah Member</a></li>
	</ul>
	</li>
	';
}

function sidemenu2()
{
	return '
	<li>
	<a href="'.site_url('dashboard').'"><i class="fa fa-dashboard"></i>Dashboard</a>
	</li>
	<li>
	<a href=#>
	<i class="fa fa-files-o"></i><span>Stok Barang</span><i class="fa fa-angle-right pull-right"></i>
	</a>
	<ul class="treeview-menu">
	<li><a href="'.site_url('stokbarang').'"><i class="fa fa-files-o"></i> Daftar Barang</a></li>
	<li><a href=#><i class="fa fa-pencil"></i> Tambah Barang<i class="fa fa-angle-right pull-right"></i></a>
	<ul class="treeview-menu">
	<li><a href="'.site_url('tambahban').'"><i class="fa fa-pencil-square"></i> Tambah Data Ban</a></li>
	<li><a href="'.site_url('tambahhelm').'"><i class="fa fa-pencil-square"></i> Tambah Data Helm</a></li>
	</ul>
	</li>
	</ul>
	</li>
	<li>
	<a href=#><i class="fa fa-truck"></i>Barang Masuk<i class="fa fa-angle-right pull-right"></i></a>
	<ul class="treeview-menu">
	<li><a href="'.site_url('daftarbarangmasuk').'"><i class="fa fa-files-o"></i> Daftar Barang Masuk</a></li>
	<li><a href=#><i class="fa fa-pencil"></i> Tambah Barang Masuk <i class="fa fa-angle-right pull-right"></i></a>
	<ul class="treeview-menu">
	<li><a href="'.site_url('banmasuk').'"><i class="fa fa-pencil-square"></i> Barang Masuk Ban</a></li>
	<li><a href="'.site_url('helmmasuk').'"><i class="fa fa-pencil-square"></i> Barang Masuk Helm</a></li>
	</ul>
	</li>
	</ul>
	</li>
	<li>
	<a href=#><i class="fa fa-users"></i>Supplier<i class="fa fa-angle-right pull-right"></i></a>
	<ul class="treeview-menu">
	<li><a href="'.site_url('supplier').'"><i class="fa fa-files-o"></i> Daftar Supplier</a></li>
	<li><a href="'.site_url('tambahsupplier').'"><i class="fa fa-pencil"></i> Tambah Supplier</a></li>
	</ul>
	</li>
	<li>
	<a href=#><i class="fa fa-shopping-cart"></i>Penjualan<i class="fa fa-angle-right pull-right"></i></a>
	<ul class="treeview-menu">
	<li><a href="'.site_url('daftarpenjualan').'"><i class="fa fa-files-o"></i> Daftar Penjualan</a></li>
	<li><a href="'.site_url('tambahpenjualan').'"><i class="fa fa-pencil"></i> Tambah Penjualan</a></li>
	</ul>
	</li>
	<li>
	<a href=#><i class="fa fa-money"></i>Pendapatan<i class="fa fa-angle-right pull-right"></i></a>
	<ul class="treeview-menu">
	<li><a href="'.site_url('pendapatan/listpendapatan').'"><i class="fa fa-files-o"></i> Daftar Pendapatan</a></li>
	<li><a href="'.site_url('pendapatan').'"><i class="fa fa-pencil"></i> Tambah Pendapatan</a></li>
	</ul>
	</li>
	
	';
}
?>