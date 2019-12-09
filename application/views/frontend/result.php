<?= $header ?>
<nav class="breadcrumbs">
    <a href="<?= base_url("home") ?>">Home</a> &rarr;
    <span>Booking</span>
</nav>
</div>
</header> <!-- .site-header -->
<main class="content">
    <div class="fullwidth-block">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInLeft">
                    <div class="container">
                        <h1>Cek Booking</h1>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box">
                                    <!-- input month-->
                                    <div class="box-body">
                                        <table class="table table-hover">
                                            <tr>
                                                <td><b>Kode Booking</b></td>
                                                <td><?= $pesan['booking_code']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Nama</b></td>
                                                <td><?= $pesan['name']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Email</b></td>
                                                <td><?= $pesan['email']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Kontak</b></td>
                                                <td><?= $pesan['contact']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Alamat</b></td>
                                                <td><?= $pesan['alamat']; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Total Bayar</b></td>
                                                <td>Rp. <?= number_format($pesan['payment'], 2, ',', '.'); ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Status</b></td>
                                                <td><b><?= $pesan['status']; ?></b></td>
                                            </tr>
                                            <tr>
                                                <td><b>Cetak</b></td>
                                                <?php if($pesan['status'] == 'Belum Bayar') : ?>
                                                <td>
                                                    <button class="btn btn-success" disabled>Cetak Bukti</button>
                                                </td>
                                                <?php else: ?>
                                                <td>
                                                    <a href="<?= base_url('layanan/cetak_pdf/' . $pesan['booking_code']); ?>"
                                                        class="btn btn-success">
                                                        Cetak Bukti</a>
                                                </td>
                                                <?php endif; ?>
                                            </tr>
                                        </table>
                                    </div>
                                    <!-- year -->
                                    <!-- <div class="box-body">
									</div> -->
                                </div>
                            </div>
                        </div>
                        <!-- end month + year -->
                    </div>
                </div>


            </div>

        </div>

    </div>


</main> <!-- .content -->

<?= $footer ?>