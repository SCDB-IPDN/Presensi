<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h4 class="col-xs-12 col-sm-6 mt-0">Detail Absen</h4>
                <div class="col-xs-12 col-sm-6 ml-auto text-right">
                    <form action="" method="get">
                        <div class="row">
                            <div class="col">
                                <select name="bulan" id="bulan" class="form-control-lg">
                                    <option value="" disabled selected>-- Pilih Bulan --</option>
                                    <?php foreach($all_bulan as $bn => $bt): ?>
                                        <option value="<?= $bn ?>" <?= ($bn == $bulan) ? 'selected' : '' ?>><?= $bt ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col ">
                                <select name="tahun" id="tahun" class="form-control-lg">
                                    <option value="" disabled selected>-- Pilih Tahun</option>
                                    <?php for($i = date('Y'); $i >= (date('Y') - 5); $i--): ?>
                                        <option value="<?= $i ?>" <?= ($i == $tahun) ? 'selected' : '' ?>><?= $i ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="col ">
                                <button type="submit" class="btn btn-primary btn-fill btn-block">Tampilkan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <table class="table border-0">
                                        <tr>
                                            <th class="border-0 py-0">Nama</th>
                                            <th class="border-0 py-0">:</th>
                                            <th class="border-0 py-0"><?= $karyawan->nama ?></th>
                                        </tr>
                                        <tr>
                                            <th class="border-0 py-0">Unit Kerja</th>
                                            <th class="border-0 py-0">:</th>
                                            <th class="border-0 py-0"><?= $karyawan->penugasan ?></th>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>            
                        <div class="card-body">
                            <h4 class="card-title mb-4">Presensi Bulan : <?= bulan($bulan) . ' ' . $tahun ?></h4>
                            <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                    <thead>
                                        <th>No</th>
                                        <th>Hari</th>
                                        <th>Tanggal</th>
                                        <th>Jam Masuk</th>
                                        <th>Jam Keluar</th>
                                    </thead>
                                    <tbody>
                                        <?php if($absen): ?>
                                            <?php foreach($hari as $i => $h): ?>
                                                <?php
                                                    $absen_harian = array_search($h['tgl'], array_column($absen, 'tgl')) !== false ? $absen[array_search($h['tgl'], array_column($absen, 'tgl'))] : '';
                                                ?>
                                                <tr <?= (in_array($h['hari'], ['Sabtu', 'Minggu'])) ? 'class="text-black"' : '' ?> <?= ($absen_harian == '') ? 'class="text-black"' : '' ?>>
                                                    <td><?= ($i+1) ?></td>
                                                    <td><?= $h['hari'] ?></td>
                                                    <td><?= $h['tgl'] ?></td>
                                                    <td><?= is_weekend($h['tgl']) ? 'Libur Coy &#128526' : check_jam(@$absen_harian['jam_masuk'], 'masuk') ?></td>
                                                    <td><?= is_weekend($h['tgl']) ? 'Libur Coy &#128526' : check_jam(@$absen_harian['jam_pulang'], 'pulang') ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <tr>
                                                <td class="bg-light" colspan="5">Tidak ada data absen anda dibulan ini Coy &#128523</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-body">
            </div>
        </section>
    </div>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable( {
            dom: '<"row"<"col-sm-5"B><"col-sm-7"fr>>t<"row"<"col-sm-5"i><"col-sm-7"p>>',
            buttons: [
                'excel'
            ],
            responsive: true
        } );
    } );
    </script>
<?php $this->load->view('dist/_partials/footer'); ?>