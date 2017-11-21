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
                Daftar Penjualan<br>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-shopping-cart"></i>Penjualan</a></li>
                <li class="active">Daftar Penjualan</li>

            </ol>
        </section>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header" data-toggle="tooltip" title="Daftar Penjualan">
                    <h3 class="box-title">DAFTAR PENJUALAN</h3>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Kode Barang</th>
                                <th>Jumlah</th>
                                <th>Harga Pokok / satuan (Rupiah)</th>
                                <th>Harga Jual / satuan (Rupiah)</th>
                                <th>Harga Jual Total</th>
                                <th>Harga Pokok Total</th>
                                <th>Laba</th>
                                <th>Tanggal</th>
                                <th>Oleh</th>
                                <?php 

                                $username = $this->session->userdata('username');

                                $this->db->select('level as level')
                                        -> from ('member')
                                        -> where ('username',$username);

                                $level = $this->db->get()->row()->level;

                                if($level == 'admin'){
                                ?>
                                <th>Aksi</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <?php foreach ($datapenjualan as $row) {?>
                        <tbody>
                            <tr>
                                <td><?php echo $row->kode_barang; ?></td>
                                <td><?php echo $row->jumlah; ?></td>
                                <td><?php echo $row->harga_pokok; ?></td>
                                <td><?php echo $row->harga_jual; ?></td>
                                <td><?php echo $row->harga_jualtotal; ?></td>
                                <td><?php echo $row->harga_pokoktotal; ?></td>
                                <td><?php echo $row->laba; ?></td>
                                <td><?php echo $row->tanggal; ?></td>
                                <td><?php echo $row->oleh; ?></td>
                                <?php 

                                if($level == 'admin'){
                                ?>
                                <td><?php echo anchor(site_url('daftarpenjualan/delete/'.$row->kode_jual),
                                            '<i class="fa fa-trash"></i>',
                                            'class="btn btn-danger"');?></td>
                                <?php } ?>
                                
                            </tr>
                        </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </section>
    </div>
<?php $this->load->view('template/footer'); ?>
</html>