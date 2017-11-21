<!DOCTYPE html>
<html>
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left info">
                    <p>
                        <?php 
                            echo $this->session->userdata('nama');
                            
                        ?>
                    </p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- menu -->
      
            <?php
            
            $level=$this->session->userdata('level');
           
            if($level=='member'){
        ?>
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <?php echo sidemenu2();?>
            </ul>
            <?php } else if($level=='admin') {?>
                <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <?php echo sidemenu();?>
            </ul>
            <?php } ?>
            
        </section>
    </aside>
</html>