<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Daftar Presensi THL</h1>
            </div>

            <div class="container">
                <!-- <h2>Bordered Table</h2> -->                
            </div>
            <div class="section-body">
                <table id="table_id" class="display">
                    <thead>
                        <th>No</th>
                        <th>Karyawan</th>
                        <th>Unit Kerja</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <?php foreach($karyawan as $i => $k): ?>
                            <tr>
                                <td><?= ($i+1) ?></td>
                                <td><?= $k->nama ?></td>
                                <td><?= $k->penugasan ?></td>
                                <td>
                                    <a href="<?= base_url('absensi/detail_absensi/' . $k->id_user) ?>" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> Detail</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>


    <script type="text/javascript">
    $(document).ready(function() {
        $('#table_id').DataTable( {
            dom: '<"row"<"col-sm-5"B><"col-sm-7"fr>>t<"row"<"col-sm-5"i><"col-sm-7"p>>',
            buttons: [
                'excel'
            ],
            responsive: true
        } );
    } );
    </script>
    

<?php $this->load->view('dist/_partials/footer'); ?>