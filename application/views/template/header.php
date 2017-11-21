<!DOCTYPE html>
<html>
    <body class="skin-blue">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="dashboard.jsp" class="logo"><b>RANI MOTOR</b></a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle glyphicon glyphicon-align-justify" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <?php 
                                        $username=$this->session->userdata('username');
                                        $this->db->select('nama as nama')
                                                -> from ('member')
                                                -> where ('username',$username);

                                        $nama = $this->db->get()->row()->nama;

                                        echo $nama; ?>
                                </a>
                                <?php 
            $this->db->select('level as level')
                    ->from('member')
                    ->where('username',$username);
            $level = $this->db->get()->row()->level;

            if($level == 'member'){
            ?>
            <ul class="dropdown-menu" style="width: 180px;">
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="<?php echo site_url('profil'); ?>" class="btn btn-primary btn-flat">Edit Profil</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo site_url('login/logout'); ?>" class="btn btn-primary btn-flat">Keluar</a>
                                        </div>
                                    </li>
                                </ul>
            <?php } else if($level == 'admin') {?>
                <ul class="dropdown-menu" style="width: 180px;">
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="<?php echo site_url('profil'); ?>" class="btn btn-primary btn-flat">Edit Profil</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo site_url('login/adminlogout'); ?>" class="btn btn-primary btn-flat">Keluar</a>
                                        </div>
                                    </li>
                                </ul>
            </ul>

            <?php } ?>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
    </body>
</html>
