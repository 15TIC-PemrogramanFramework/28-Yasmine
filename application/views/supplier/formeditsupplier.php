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
                Edit Supplier<br>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-users"></i>Supplier</a></li>
                <li class="active">Edit Supplier</li>
                <li class="active">Edit Data Supplier</li>

            </ol>
        </section>
        <section class="content">
            <form action="<?php echo $action; ?>" method="post">
                <div class="box box-primary">
                    <div class="box-header" data-toggle="tooltip" title="Edit Data Supplier">
                        <h3 class="box-title">EDIT SUPPLIER</h3>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table">
                            <tr>
                                <td><b>NAMA SUPPLIER</b></td>
                                
                                <td><input type="text" class="form-control" name="nama_supplier" value="<?php echo $nama_supplier; ?>" placeholder="Nama Supplier" required></td>
                            </tr>
                            <tr>
                                <td><b>ALAMAT</b></td>
                                
                                <td><input type="text" class="form-control" name="alamat" value="<?php echo $alamat; ?>" placeholder="Alamat" required></td>
                            </tr>
                            <tr>
                                <td><b>NO. TELP</b></td>
                                
                                <td><input type="text" class="form-control" name="no_telp" value="<?php echo $no_telp; ?>" placeholder="Nomor Telepon" required></td>
                            </tr>
                        </table>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <input type="hidden" name="kode_supplier" value="<?php echo $kode_supplier?>">
                        <button type="submit" class="btn btn-primary btn-block ">Edit Data Supplier</button>
                    </div><!-- /.box-footer-->
                </div><!-- /.box -->
            </form>
        </section>
        <br>
    </div>
    <?php $this->load->view('template/footer'); ?>
</html>