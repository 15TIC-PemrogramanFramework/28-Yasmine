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
                Edit Data Member<br>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-user"></i>Member</a></li>
                <li class="active">Daftar Member</li>
                <li class="active">Edit Data Member</li>

            </ol>
        </section>
        <section class="content">
            <form action="<?php echo $action; ?>" method="post">
                <div class="box box-primary">
                    <div class="box-header" data-toggle="tooltip" title="Edit Data Member">
                        <h3 class="box-title">EDIT DATA MEMBER</h3>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table">
                            <tr>
                                <td><b>Password</b></td>
                                
                                <td><input type="password" class="form-control" name="password" value="<?php echo $password; ?>" placeholder="Password" required></td>
                            </tr>
                            <tr>
                                <td><b>Nama</b></td>
                                
                                <td><input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" placeholder="Nama" required></td>
                            </tr>
                            <tr>
                                <td><b>level</b></td>
                                <td>
                                    <select class="form-control" name="level">
                                            <option>--Pilih Level--</option>
                                            <?php
                                            $this->db->select('level');
                                            $level = $this->db->get('level'); 
                                                foreach($level->result() as $row) {
                                                    echo "<option value='".$row->level."'>".$row->level."</option>";
                                                }
                                            ?>
                                    </select>

                                </td>
                                
                            </tr>
                        </table>
                        <input type="hidden" name="username" value="<?php echo $username; ?>">
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary btn-block ">Edit Data Member</button>
                    </div><!-- /.box-footer-->
                </div><!-- /.box -->
            </form>
        </section>
        <br>
    </div>
    <?php $this->load->view('template/footer'); ?>
</html>