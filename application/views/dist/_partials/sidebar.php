<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="#">PRESENSI THL IPDN</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">PTI</a>
          </div>
          <ul class="sidebar-menu">

            <li class="menu-header">Dashboard</li>
            <?php if(is_level('Manager')){ ?>
              <li class="<?php echo $this->uri->segment(1) == 'dashboard' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>dashboard"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
            <?php }else{ ?>
              <li class="<?php echo $this->uri->segment(2) == 'check_absen' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>absensi/check_absen"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
            <?php } ?>  
            
            <li class="menu-header">Starter</li>
              <?php if(is_level('Manager')): ?>
                  <li class="<?php echo $this->uri->segment(1) == 'jam' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>jam"><i class="fas fa-clock"></i> <span>Jam Kerja</span></a></li>
                  <li class="<?php echo $this->uri->segment(1) == 'absensi' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>absensi"><i class="fas fa-users"></i> <span>Absensi</span></a></li>
              <?php else: ?>
                  <li class="<?php echo $this->uri->segment(2) == 'detail_absensi' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>absensi/detail_absensi"><i class="fas fa-list"></i> <span>Detail Presensi</span></a></li>
            <?php endif; ?>
          </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://scdb.ipdn.ac.id" target="_blank" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> SCDB IPDN
            </a>
          </div>
        </aside>
      </div>
