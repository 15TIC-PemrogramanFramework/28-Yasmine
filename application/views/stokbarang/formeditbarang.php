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
                Edit Data Barang<br>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-files-o"></i>Stok Barang</a></li>
                <li class="active">Daftar Stok Barang</li>
                <li class="active">Form Edit Barang</li>

            </ol>
        </section>
        <section class="content">
            <form action="<?php echo $action; ?>" method="post">
                <div class="box box-primary">
                    <div class="box-header" data-toggle="tooltip" title="Edit Data Barang">
                        <h3 class="box-title">EDTI DATA BARANG</h3>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table">
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
                                <td><b>HARGA (RUPIAH)</b></td>
                                
                                <td><input type="text" class="form-control" name="harga" value="<?php echo $harga; ?>" placeholder="Harga per satuan" required></td>
                            </tr>
                        </table>
                        <input type="hidden" name="kode_barang" value="<?php echo $kode_barang; ?>">
                        <input type="hidden" name="editoleh" value="<?php echo $this->session->userdata('nama');?>"
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary btn-block ">Edit Data Barang</button>
                    </div><!-- /.box-footer-->
                </div><!-- /.box -->
            </form>
        </section>
        <br>
    </div>
    <?php $this->load->view('template/footer'); ?>
</html>