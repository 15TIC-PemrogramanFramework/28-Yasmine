<!DOCTYPE html>
<style>
    .color-palette {
        height: 50px;
        line-height: 50px;
        text-align: center;

    }
    .color-palette-set {
        margin-bottom: 15px;
    }
    .color-palette span {
        display: none;
    }
    .color-palette:hover span {
        display: block;
    }
</style>
<html>
    <?php $this->load->view('template/title'); ?>
    <?php $this->load->view('template/header'); ?>
    <?php $this->load->view('template/menu'); ?>
        <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Tambah Data Helm<br>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-files-o"></i>Stok Barang</a></li>
                <li class="active">Tambah Barang</li>
                <li class="active">Tambah Data Helm</li>

            </ol>
        </section>
        <section class="content">
            <form action="<?php echo $action; ?>" method="post">
                <div class="box box-primary">
                    <div class="box-header" data-toggle="tooltip" title="Tambah Data Helm">
                        <h3 class="box-title">TAMBAH DATA HELM</h3>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table">
                            <tr>
                                <td><b>KODE BARANG</b></td>
                                
                                <td><input type="text" class="form-control" name="kode_barang" placeholder="Kode Barang" required></td>
                            </tr>
                            <tr>
                                <td><b>MERK BARANG</b></td>
                                <td>
                                    <select class="form-control" name="merk_barang">
                                            <option>--Pilih Merk HELM--</option>
                                            <?php
                                            $this->db->select('merkhelm');
                                            $merkhelm = $this->db->get('merkhelm'); 
                                                foreach($merkhelm->result() as $row) {
                                                    echo "<option name='merk_barang' value='".$row->merkhelm."'>".$row->merkhelm."</option>";
                                                }
                                            ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><b>NAMA BARANG</b></td>
                                
                                <td><input type="text" class="form-control" name="nama_barang" value="<?php echo $nama_barang; ?>" placeholder="Nama Produk" required></td>
                            </tr>
                            <tr>
                                <td><b>UKURAN</b></td>
                                
                                <td><input type="text" class="form-control" name="ukuran" value="<?php echo $ukuran; ?>" placeholder="Ukuran" required></td>
                            </tr>
                            <tr>
                                <td><b>JENIS</b></td>
                                
                                <td><input type="text" class="form-control" name="jenis" value="<?php echo $jenis; ?>" placeholder="Jenis" required></td>
                            </tr>
                            <tr>
                                <td><b>JUMLAH</b></td>
                                
                                <td><input type="text" class="form-control" name="jumlah" value="<?php echo $jumlah; ?>" placeholder="Jumlah Barang" required></td>
                            </tr>
                            <tr>
                                <td><B>HARGA (RUPIAH)</b></td>
                                
                                <td><input type="text" class="form-control" name="harga" value="<?php echo $nama_barang; ?>" placeholder="Harga per satuan" required></td>
                            </tr>
                        </table>
                        <input type="hidden" name="kategori" value="helm">
                        <input type="hidden" name="oleh" value="<?php echo $this->session->userdata('nama');?>">
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary btn-block ">Tambah Data Helm</button>
                    </div><!-- /.box-footer-->
                </div><!-- /.box -->
            </form>
        </section>
        <br>
    </div>
    <?php $this->load->view('template/footer'); ?>
</html>