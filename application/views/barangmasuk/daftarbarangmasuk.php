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
                Daftar Barang Masuk<br>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-truck"></i>Barang Masuk</a></li>
                <li class="active">Daftar Barang Masuk</li>

            </ol>
        </section>
        <section class="content">
            <form action="" method="post">
                <div class="box box-primary">
                    <div class="box-header" data-toggle="tooltip" title="Daftar Barang Masuk">
                        <h3 class="box-title">DAFTAR BARANG MASUK</h3>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table">
                            <thead>
                                <th>Kode Barang</th>
                                <th>Jumlah</th>
                                <th>Tanggal</th>
                                <th>Oleh</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                <?php foreach ($daftarbarangmasuk as $row) {?>
                                <tr>
                                    <td><?php echo $row->kode_barang; ?></td>
                                    <td><?php echo $row->jumlah; ?></td>
                                    <td><?php echo $row->tanggal; ?></td>
                                    <td><?php echo $row->oleh; ?></td>
                                    <td><?php echo anchor(site_url('daftarbarangmasuk/delete/'.$row->kode_barangmasuk),
                                            '<i class="fa fa-trash"></i>',
                                            'class="btn btn-danger"');?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </form>
        </section>
        <br>
    </div>
    <?php $this->load->view('template/footer'); ?>
</html>