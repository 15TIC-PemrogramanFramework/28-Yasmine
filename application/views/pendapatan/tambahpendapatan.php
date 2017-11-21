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
                Tambah Pendapatan<br>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-money"></i>Pendapatan</a></li>
                <li class="active">Tambah Pendapatan</li>

            </ol>
        </section>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header" data-toggle="tooltip" title="Tambah Pendapatan">
                    <h3 class="box-title">TAMBAH PENDAPATAN</h3>
                </div>
                <div class="box-body">
                    <!--<h4><b><u><a href="<?php //echo base_url().'pendapatan/listpendapatan'?>">Lihat List Pendapatan</a></u></b></h4>-->
                    <form action="<?php echo $action; ?>" method="post">
                        <table id="example1" class="table">
                            <tr>
                                <td><b>Tanggal</b></td>
                                <td><b><?php echo $tanggal; ?></b></td>
                            </tr>
                            <input type="hidden" name="tanggal" value="<?php echo $tanggal; ?>">
                            <tr>
                                <td><b>Pendapatan Kotor</b></td>
                                <td><b>Rp <?php echo $pendapatan_kotor; ?>,-</b></td>
                            </tr>
                            <input type="hidden" name="pendapatan_kotor" value="<?php echo $pendapatan_kotor; ?>">
                            <tr>
                                <td><b>Pendapatan Bersih</b></td>
                                <td><b>Rp <?php echo $pendapatan_bersih; ?>,-</b></td>
                            </tr>
                            <input type="hidden" name="pendapatan_bersih" value="<?php echo $pendapatan_bersih; ?>">
                            <tr>
                                <td></td>
                                <td>
                                    <button type="submit" class="btn btn-success btn-block btn-flat">SIMPAN</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <?php $this->load->view('template/footer'); ?>
</html>