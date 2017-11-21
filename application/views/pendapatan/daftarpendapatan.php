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
                Daftar Pendapatan<br>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-money"></i>Pendapatan</a></li>
                <li class="active">Daftar Pendapatan</li>

            </ol>
        </section>
        <section class="content">
            <form action="" method="post">
                <div class="box box-primary">
                    <div class="box-header" data-toggle="tooltip" title="Daftar Pendapatan">
                        <h3 class="box-title">DAFTAR PENDAPATAN</h3>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table">
                            <thead>
                                <th>Tanggal</th>
                                <th>Pendapatan Kotor</th>
                                <th>Pendapatan Bersih</th>
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
                            </thead>
                            <tbody>
                                <?php foreach ($daftarpendapatan as $row) {?>
                                <tr>
                                    <td><?php echo $row->tanggal; ?></td>
                                    <td><?php echo $row->pendapatan_kotor; ?></td>
                                    <td><?php echo $row->pendapatan_bersih; ?></td>
                                    <?php 

                                if($level == 'admin'){
                                ?>
                                <td><?php echo anchor(site_url('pendapatan/delete/'.$row->tanggal),
                                            '<i class="fa fa-trash"></i>',
                                            'class="btn btn-danger"');?></td>
                                <?php } ?>
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