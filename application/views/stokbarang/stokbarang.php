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
        Daftar Barang<br>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-files-o"></i>Stok Barang</a></li>
        <li class="active">Daftar Barang</li>

    </ol>
</section>
<section class="content">
    <div class="box box-primary collapsed-box">
        <div class="box-header" data-toggle="tooltip" title="Data Ban">
            <h3 class="box-title">BAN</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-primary btn-xs" data-widget="collapse"><i class="fa fa-plus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <!-- BAN -->
            <div class="nav-tabs-custom">
                <?php echo ban();?>
                <div class="tab-content">

                    <!-- FDR -->
                    <div class="tab-pane active" id="tab_1">
                        <table id="example1" class="table table-bordered table-striped">
                            <?php echo thead();?>
                            <tbody>
                                <?php foreach ($databanfdr as $row) {?>
                                <tr>
                                    <td><?php echo $row->kode_barang; ?></td>
                                    <td><?php echo $row->nama_barang; ?></td>
                                    <td><?php echo $row->ukuran; ?></td>
                                    <td><?php echo $row->jenis; ?></td>
                                    <td><?php echo $row->jumlah; ?></td>
                                    <td><?php echo $row->harga; ?></td>
                                    <td><?php echo $row->oleh; ?></td>
                                    <td><?php echo $row->editoleh; ?></td>
                                    <td><?php echo anchor(site_url('stokbarang/edit/'.$row->kode_barang),
                                            '<i class="fa fa-pencil-square-o"></i>',
                                            'class="btn btn-warning"');?>
                                    <?php echo anchor(site_url('stokbarang/delete/'.$row->kode_barang),
                                            '<i class="fa fa-trash"></i>',
                                            'class="btn btn-danger"');?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>

                        </table>
                    </div>
                    <!--AKHIR FDR-->
                    <!--CORSA-->
<div class="tab-pane" id="tab_2">
<table id="example1" class="table table-bordered table-striped">
    <?php echo thead();?>
    <tbody>
        <?php foreach ($databancorsa as $row) {?>
        <tr>
            <td><?php echo $row->kode_barang; ?></td>
            <td><?php echo $row->nama_barang; ?></td>
            <td><?php echo $row->ukuran; ?></td>
            <td><?php echo $row->jenis; ?></td>
            <td><?php echo $row->jumlah; ?></td>
            <td><?php echo $row->harga; ?></td>
            <td><?php echo $row->oleh; ?></td>
            <td><?php echo $row->editoleh; ?></td>
            <td><?php echo anchor(site_url('stokbarang/edit/'.$row->kode_barang),
                                            '<i class="fa fa-pencil-square-o"></i>',
                                            'class="btn btn-warning"');?>
                                    <?php echo anchor(site_url('stokbarang/delete/'.$row->kode_barang),
                                            '<i class="fa fa-trash"></i>',
                                            'class="btn btn-danger"');?>
            </td>
        </tr>
    </tbody>
    <?php } ?>
</table>
</div>
<!--AKHIR CORSA-->
<!--MAXXIS-->
<div class="tab-pane" id="tab_3">
<table id="example1" class="table table-bordered table-striped">
    <?php echo thead();?>
    <tbody>
        <?php foreach ($databanmaxxis as $row) {?>
        <tr>
            <td><?php echo $row->kode_barang; ?></td>
            <td><?php echo $row->nama_barang; ?></td>
            <td><?php echo $row->ukuran; ?></td>
            <td><?php echo $row->jenis; ?></td>
            <td><?php echo $row->jumlah; ?></td>
            <td><?php echo $row->harga; ?></td>
            <td><?php echo $row->oleh; ?></td>
            <td><?php echo $row->editoleh; ?></td>
            <td><?php echo anchor(site_url('stokbarang/edit/'.$row->kode_barang),
                                            '<i class="fa fa-pencil-square-o"></i>',
                                            'class="btn btn-warning"');?>
                                    <?php echo anchor(site_url('stokbarang/delete/'.$row->kode_barang),
                                            '<i class="fa fa-trash"></i>',
                                            'class="btn btn-danger"');?>
            </td>
        </tr>
    </tbody>
    <?php } ?>
</table>
</div>
<!--AKHIR MAXXIS-->
</div>
</div>
</div>
</div>
<!--AKHIR BAN-->

<div class="box box-primary collapsed-box">
<div class="box-header" data-toggle="tooltip" title="Data Helm">
    <h3 class="box-title">HELM</h3>
    <div class="box-tools pull-right">
        <button class="btn btn-primary btn-xs" data-widget="collapse"><i class="fa fa-plus"></i></button>
    </div>
</div>
<div class="box-body">
    <!-- HELM -->
    <div class="nav-tabs-custom">
        <?php echo helm();?>
        <div class="tab-content">

            <!-- GM -->
            <div class="tab-pane active" id="tab_4">
                <table id="example1" class="table table-bordered table-striped">
                    <?php echo thead();?>
                    <tbody>
                        <?php foreach ($datahelmgm as $row) {?>
                        <tr>
                            <td><?php echo $row->kode_barang; ?></td>
                            <td><?php echo $row->nama_barang; ?></td>
                            <td><?php echo $row->ukuran; ?></td>
                            <td><?php echo $row->jenis; ?></td>
                            <td><?php echo $row->jumlah; ?></td>
                            <td><?php echo $row->harga; ?></td>
                            <td><?php echo $row->oleh; ?></td>
                            <td><?php echo $row->editoleh; ?></td>
                            <td><?php echo anchor(site_url('stokbarang/edit/'.$row->kode_barang),
                                            '<i class="fa fa-pencil-square-o"></i>',
                                            'class="btn btn-warning"');?>
                                    <?php echo anchor(site_url('stokbarang/delete/'.$row->kode_barang),
                                            '<i class="fa fa-trash"></i>',
                                            'class="btn btn-danger"');?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>

                </table>
            </div>
            <!--AKHIR GM-->
            <!--KYT-->
            <div class="tab-pane" id="tab_5">
                <table id="example1" class="table table-bordered table-striped">
                    <?php echo thead();?>
                    <tbody>
                        <?php foreach ($datahelmkyt as $row) {?>
                        <tr>
                            <td><?php echo $row->kode_barang; ?></td>
                            <td><?php echo $row->nama_barang; ?></td>
                            <td><?php echo $row->ukuran; ?></td>
                            <td><?php echo $row->jenis; ?></td>
                            <td><?php echo $row->jumlah; ?></td>
                            <td><?php echo $row->harga; ?></td>
                            <td><?php echo $row->oleh; ?></td>
                            <td><?php echo $row->editoleh; ?></td>
                            <td><?php echo anchor(site_url('stokbarang/edit/'.$row->kode_barang),
                                            '<i class="fa fa-pencil-square-o"></i>',
                                            'class="btn btn-warning"');?>
                                    <?php echo anchor(site_url('stokbarang/delete/'.$row->kode_barang),
                                            '<i class="fa fa-trash"></i>',
                                            'class="btn btn-danger"');?>
                            </td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
            <!--AKHIR KYT-->
            <!--DYR-->
            <div class="tab-pane" id="tab_6">
                <table id="example1" class="table table-bordered table-striped">
                    <?php echo thead();?>
                    <tbody>
                        <?php foreach ($datahelmdyr as $row) {?>
                        <tr>
                            <td><?php echo $row->kode_barang; ?></td>
                            <td><?php echo $row->nama_barang; ?></td>
                            <td><?php echo $row->ukuran; ?></td>
                            <td><?php echo $row->jenis; ?></td>
                            <td><?php echo $row->jumlah; ?></td>
                            <td><?php echo $row->harga; ?></td>
                            <td><?php echo $row->oleh; ?></td>
                            <td><?php echo $row->editoleh; ?></td>
                            <td><?php echo anchor(site_url('stokbarang/edit/'.$row->kode_barang),
                                            '<i class="fa fa-pencil-square-o"></i>',
                                            'class="btn btn-warning"');?>
                                    <?php echo anchor(site_url('stokbarang/delete/'.$row->kode_barang),
                                            '<i class="fa fa-trash"></i>',
                                            'class="btn btn-danger"');?>
                            </td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
            <!--AKHIR DYR-->
            <!--MDS-->
            <div class="tab-pane" id="tab_7">
                <table id="example1" class="table table-bordered table-striped">
                    <?php echo thead();?>
                    <tbody>
                        <?php foreach ($datahelmmds as $row) {?>
                        <tr>
                            <td><?php echo $row->kode_barang; ?></td>
                            <td><?php echo $row->nama_barang; ?></td>
                            <td><?php echo $row->ukuran; ?></td>
                            <td><?php echo $row->jenis; ?></td>
                            <td><?php echo $row->jumlah; ?></td>
                            <td><?php echo $row->harga; ?></td>
                            <td><?php echo $row->oleh; ?></td>
                            <td><?php echo $row->editoleh; ?></td>
                            <td><?php echo anchor(site_url('stokbarang/edit/'.$row->kode_barang),
                                            '<i class="fa fa-pencil-square-o"></i>',
                                            'class="btn btn-warning"');?>
                                    <?php echo anchor(site_url('stokbarang/delete/'.$row->kode_barang),
                                            '<i class="fa fa-trash"></i>',
                                            'class="btn btn-danger"');?>
                            </td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
            <!--AKHIR MDS-->
            <!--GTZONE-->
            <div class="tab-pane" id="tab_8">
                <table id="example1" class="table table-bordered table-striped">
                    <?php echo thead();?>
                    <tbody>
                        <?php foreach ($datahelmgtzone as $row) {?>
                        <tr>
                            <td><?php echo $row->kode_barang; ?></td>
                            <td><?php echo $row->nama_barang; ?></td>
                            <td><?php echo $row->ukuran; ?></td>
                            <td><?php echo $row->jenis; ?></td>
                            <td><?php echo $row->jumlah; ?></td>
                            <td><?php echo $row->harga; ?></td>
                            <td><?php echo $row->oleh; ?></td>
                            <td><?php echo $row->editoleh; ?></td>
                            <td><?php echo anchor(site_url('stokbarang/edit/'.$row->kode_barang),
                                            '<i class="fa fa-pencil-square-o"></i>',
                                            'class="btn btn-warning"');?>
                                    <?php echo anchor(site_url('stokbarang/delete/'.$row->kode_barang),
                                            '<i class="fa fa-trash"></i>',
                                            'class="btn btn-danger"');?>
                            </td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
            <!--AKHIR GTZONE-->
            <!--NPN-->
            <div class="tab-pane" id="tab_9">
                <table id="example1" class="table table-bordered table-striped">
                    <?php echo thead();?>
                    <tbody>
                        <?php foreach ($datahelmnpn as $row) {?>
                        <tr>
                            <td><?php echo $row->kode_barang; ?></td>
                            <td><?php echo $row->nama_barang; ?></td>
                            <td><?php echo $row->ukuran; ?></td>
                            <td><?php echo $row->jenis; ?></td>
                            <td><?php echo $row->jumlah; ?></td>
                            <td><?php echo $row->harga; ?></td>
                            <td><?php echo $row->oleh; ?></td>
                            <td><?php echo $row->editoleh; ?></td>
                            <td><?php echo anchor(site_url('stokbarang/edit/'.$row->kode_barang),
                                            '<i class="fa fa-pencil-square-o"></i>',
                                            'class="btn btn-warning"');?>
                                    <?php echo anchor(site_url('stokbarang/delete/'.$row->kode_barang),
                                            '<i class="fa fa-trash"></i>',
                                            'class="btn btn-danger"');?>
                            </td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
            <!--AKHIR NPN-->
            <!--TAKIRA-->
            <div class="tab-pane" id="tab_10">
                <table id="example1" class="table table-bordered table-striped">
                    <?php echo thead();?>
                    <tbody>
                        <?php foreach ($datahelmtakira as $row) {?>
                        <tr>
                            <td><?php echo $row->kode_barang; ?></td>
                            <td><?php echo $row->nama_barang; ?></td>
                            <td><?php echo $row->ukuran; ?></td>
                            <td><?php echo $row->jenis; ?></td>
                            <td><?php echo $row->jumlah; ?></td>
                            <td><?php echo $row->harga; ?></td>
                            <td><?php echo $row->oleh; ?></td>
                            <td><?php echo $row->editoleh; ?></td>
                            <td><?php echo anchor(site_url('stokbarang/edit/'.$row->kode_barang),
                                            '<i class="fa fa-pencil-square-o"></i>',
                                            'class="btn btn-warning"');?>
                                    <?php echo anchor(site_url('stokbarang/delete/'.$row->kode_barang),
                                            '<i class="fa fa-trash"></i>',
                                            'class="btn btn-danger"');?>
                            </td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
            <!--AKHIR TAKIRA-->
        </div>
    </div>
</div>
</div>
<!--AKHIR HELM-->
</div>
</div>
</section>
</div>

<?php $this->load->view('template/footer'); ?>
</html>