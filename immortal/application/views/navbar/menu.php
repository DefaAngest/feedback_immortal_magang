<!DOCTYPE html>
<nav class="navbar navbar-inverse navbar-expand-lg navbar-light bg-light" >
<div class="container-fluid">
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav">
    <?php if($this->session->userdata('akses')=='1'):?>
      <li><a href="<?php echo base_url().'diagram_admin'?>">Dashboard</a></li>
      <li><a href="<?php echo base_url().'view' ?>">Data Semua Feedback</a></li>
      <li><a href="<?php echo base_url(). 'karyawan' ?>">Data Karyawan</a></li>
      <li><a href="<?php echo base_url(). 'pegawai' ?>">Data Pegawai</a></li>
  <?php elseif($this->session->userdata('akses')=='2'):?>
      <li><a href="<?php echo base_url().'diagram_ard'?>">Dashboard</a></li>
      <li><a href="<?php echo base_url().'view_ard' ?>">Data Feedback ARD</a></li>
  <?php elseif($this->session->userdata('akses')=='3'):?>
      <li><a href="<?php echo base_url().'diagram_ga'?>">Dashboard</a></li>
      <li><a href="<?php echo base_url().'view_ga' ?>">Data Feedback GA</a></li>
  <?php elseif($this->session->userdata('akses')=='4'):?>
      <li><a href="<?php echo base_url().'diagram_it'?>">Dashboard</a></li>
      <li><a href="<?php echo base_url().'view_it' ?>">Data Feedback IT</a></li>
  <?php endif;?>
  </ul>
 
  <ul class="nav navbar-nav navbar-right">
      <li><a><strong><?php echo $this->session->userdata('ses_nama');?></strong></a></li>
    <li><a href="<?php echo base_url().'login/logout'?>">Sign Out</a></li>
  </ul>
</div>
</div>
</nav> 
