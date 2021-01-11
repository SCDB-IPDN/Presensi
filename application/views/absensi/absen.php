<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-hero">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="far fa-question-circle"></i>
                            </div>
                            <h4>SELAMAT DATANG</h4>
                            <div class="card-description">PRESENSI HARIAN THL IPDN</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <!-- <h2>Bordered Table</h2> -->
                <p><?= tgl_hari(date('d-m-Y')) ?></p>            
                <table class="table table-bordered">
                    <thead>
                        <th>Status</th>
                        <th>Presensi Masuk</th>
                        <th>Presensi Pulang</th>
                    </thead>
                    <tbody>
                        <tr>
                            <?php if(is_weekend()): ?>
                                <td class="bg-light text-danger" colspan="4">Hari ini libur. Tidak Perlu Presensi</td>
                            <?php else: ?>
                                <td><i class="fas fa-<?= ($absen < 2) ? "lightbulb text-warning" : "lightbulb text-success" ?>"></i></td>
                                <td>
                                    <a href="<?= base_url('absensi/absen/masuk') ?>" class="btn <?= ($absen == 1 || $absen == 2) ? 'disabled' : '' ?> btn-primary btn-sm"<?= ($absen == 1 || $absen == 2) ? ' style="pointer-events: none"' : '' ?>>Masuk</a>
                                </td>
                                <td>
                                    <a href="<?= base_url('absensi/absen/pulang') ?>" class="btn <?= ($absen !== 1 || $absen == 2) ? 'disabled' : '' ?> btn-dark btn-sm btn-fill"<?= ($absen !== 1 || $absen == 2) ? ' style="pointer-events: none"' : '' ?>>Pulang</a>
                                </td>
                            <?php endif; ?>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="section-body">
            </div>
        </section>
      </div>
<?php $this->load->view('dist/_partials/footer'); ?>