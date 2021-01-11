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
                <table class="table table-striped">
                    <thead>
                        <th>No</th>
                        <th>Karyawan</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <?php foreach($karyawan as $i => $k): ?>
                            <tr>
                                <td><?= ($i+1) ?></td>
                                <td><?= $k->nama ?></td>
                                <td>
                                    <a href="<?= base_url('absensi/detail_absensi/' . $k->id_user) ?>" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> Detail</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="section-body">
            </div>
        </section>
      </div>
<?php $this->load->view('dist/_partials/footer'); ?>