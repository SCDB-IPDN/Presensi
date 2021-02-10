<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Lambang_IPDN.png/781px-Lambang_IPDN.png">
  <title><?php echo $title; ?> &mdash; PRESENSI THL IPDN</title>


  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/fontawesome/css/all.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.8/css/fixedHeader.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap.min.css">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script> -->

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <!-- <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script> -->
  <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/fixedheader/3.1.8/js/dataTables.fixedHeader.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap.min.js"></script>
  
  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>


  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">
  <!-- Start GA -->
  <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script> -->
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-94034622-3');
  </script>
  <!-- /END GA --></head>

  <?php
  if ($this->uri->segment(2) == "layout_transparent") {
    $this->load->view('dist/_partials/layout-2');
    $this->load->view('dist/_partials/sidebar-2');
  }elseif ($this->uri->segment(2) == "layout_top_navigation") {
    $this->load->view('dist/_partials/layout-3');
    $this->load->view('dist/_partials/navbar');
  }elseif ($this->uri->segment(2) != "auth_login" && $this->uri->segment(2) != "auth_forgot_password"&& $this->uri->segment(2) != "auth_register" && $this->uri->segment(2) != "auth_reset_password" && $this->uri->segment(2) != "errors_503" && $this->uri->segment(2) != "errors_403" && $this->uri->segment(2) != "errors_404" && $this->uri->segment(2) != "errors_500" && $this->uri->segment(2) != "utilities_contact" && $this->uri->segment(2) != "utilities_subscribe") {
    $this->load->view('dist/_partials/layout');
    $this->load->view('dist/_partials/sidebar');
  }
  ?>
