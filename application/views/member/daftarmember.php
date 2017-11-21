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
                Daftar Member<br>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-user"></i>Member</a></li>
                <li class="active">Daftar Member</li>

            </ol>
        </section>
        <section class="content">
            <form action="" method="post">
                <div class="box box-primary">
                    <div class="box-header" data-toggle="tooltip" title="Daftar Member">
                        <h3 class="box-title">DAFTAR MEMBER</h3>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table">
                            <thead>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Nama</th>
                                <th>Level</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                <?php foreach ($daftarmember as $row) {?>
                                <tr>
                                    <td><?php echo $row->username; ?></td>
                                    <td><?php echo $row->password; ?></td>
                                    <td><?php echo $row->nama; ?></td>
                                    <td><?php echo $row->level; ?></td>
                                    <td><?php echo anchor(site_url('member/edit/'.$row->username),
                                            '<i class="fa fa-pencil-square-o"></i>',
                                            'class="btn btn-warning"');?>
                                        <?php echo anchor(site_url('member/delete/'.$row->username),
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