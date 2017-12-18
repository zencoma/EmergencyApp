
<!-- sidebar: style can be found in sidebar.less -->
 <!-- <aside class="main-sidebar"> udah di content-->

    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/dist/img/ambulance.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('level'); ?></p>
          <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        </div>
      </div>
     
     <ul class="sidebar-menu" data-widget="tree">
      <li class="header">HALAMAN MAIN MENU</li>
        <li class="treeview">
            <a href="<?php echo base_url('home'); ?>" ><i class="fa fa-dashboard"></i> HOME</a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text"></i> <span>EMERGENCY ALLERT</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <!-- <ul class="treeview-menu"> -->
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('Alarm'); ?>"><i class="fa fa-ship"></i>Alarm Bantuan</a></li>
            <li><a href="<?php echo base_url('RiwayatBantuan'); ?>"><i class="fa fa-cube"></i>Riwayat Bantuan</a></li>
            <li><a href="<?php echo base_url('DataUser'); ?>"><i class="fa fa-briefcase"></i>Data User Emergency</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-dollar"></i> <span>DATA PASIEN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('DataPasien'); ?>"> <i class="fa fa-archive"></i>Data Lengkap Pasien</a></li>
          </ul>
        </li> 

        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>DATA KASUS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('RepLaporan'); ?>"><i class="fa fa-calendar"></i> Laporan Periodik</a></li>
            <li><a href="<?php echo base_url('RepPengiriman'); ?>"><i class="fa fa-envelope-o"></i> Pengiriman Nota</a></li>
            <li><a href="<?php echo base_url('RepMaterai'); ?>"><i class="fa fa-area-chart"></i> Penggunaan e-Materai</a></li>
          </ul>
        </li> 

        <li class="treeview">
          <a href="#">
            <i class="fa fa-gear"></i> <span>E-Mergency-Call</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php //echo base_url(''); ?>"></i> Call</a></li>
            <li><a href="<?php //echo base_url(''); ?>"></i> Register</a></li>
            <li><a href="<?php //echo base_url(''); ?>"></i> Panduan</a></li>
          </ul>
        </li> 

      </ul>
      
    </section>



  <!-- </aside> udah ada di isi halaman--> 
    <!-- /.sidebar -->


  