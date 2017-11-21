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
                Daftar Supplier<br>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-users"></i>Supplier</a></li>
                <li class="active">Daftar Supplier</li>

            </ol>
        </section>
        <section class="content">
            <form action="" method="post">
                <div class="box box-primary">
                    <div class="box-header" data-toggle="tooltip" title="Daftar Supplier">
                        <h3 class="box-title">DAFTAR SUPPLIER</h3>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table">
                            <thead>
                                <th>Nama Supplier</th>
                                <th>Alamat</th>
                                <th>No. Telp</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                <?php foreach ($daftarsupplier as $row) {?>
                                <tr>
                                    <td><?php echo $row->nama_supplier; ?></td>
                                    <td><?php echo $row->alamat; ?></td>
                                    <td><?php echo $row->no_telp; ?></td>
                                    <td><?php echo anchor(site_url('supplier/edit/'.$row->kode_supplier),
                                            '<i class="fa fa-pencil-square-o"></i>',
                                            'class="btn btn-warning"');?>
                                        <?php echo anchor(site_url('supplier/delete/'.$row->kode_supplier),
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