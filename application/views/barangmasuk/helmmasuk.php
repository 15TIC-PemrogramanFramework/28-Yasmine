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
                Helm Masuk<br>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-truck"></i>Barang Masuk</a></li>
                <li class="active">Tambah Barang Masuk</li>
                <li class="active">Barang Masuk Helm</li>

            </ol>
        </section>
        <section class="content">
            <form action="<?php echo $action; ?>" method="post">
                <div class="box box-primary">
                    <div class="box-header" data-toggle="tooltip" title="Barang Masuk Helm">
                        <h3 class="box-title">BARANG MASUK HELM</h3>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table">
                            <tr>
                                <td><b>KODE BARANG</b></td>
                                <td>
                                        <select class="form-control" name="kode_barang">
                                            <option>--Pilih Kode Helm-</option>
                                            <?php
                                            $this->db->select('kode_barang');
                                            $this->db->where('kategori','helm');
                                            $ban = $this->db->get('barang'); 
                                                foreach($ban->result() as $row) {
                                                    echo "<option value='".$row->kode_barang."'>".$row->kode_barang."</option>";
                                                }
                                            ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><b>JUMLAH</b></td>
                                
                                <td><input type="text" class="form-control" name="jumlah" value="<?php echo $jumlah; ?>" placeholder="Jumlah Barang" required></td>
                            </tr>
                        </table>
                        <input type="hidden" name="kode_barangmasuk" value="<?php echo $kode_barangmasuk; ?>">
                        <input type="hidden" name="tanggal" value="<?php echo date('y-m-d');?>">
                        <input type="hidden" name="oleh" value="<?php echo $this->session->userdata('nama');?>">
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary btn-block ">Tambah Barang Masuk Helm</button>
                    </div><!-- /.box-footer-->
                </div><!-- /.box -->
            </form>
        </section>
        <br>
    </div>
    <?php $this->load->view('template/footer'); ?>
</html>