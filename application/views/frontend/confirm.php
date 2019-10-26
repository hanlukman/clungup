<?= $header ?>
<nav class="breadcrumbs">
	<a href="index.html">Home</a> &rarr;
	<a>Booking</a>&rarr;
	<span>Confirm</span>
</nav>
</div>
</header> <!-- .site-header -->
<main class="content">
	<div class="fullwidth-block">
		<div class="container">
			<div class="row">
				<div class="col-md-12 wow fadeInLeft">
					<h4>Konfirmasi Pemesanan</h4>
					<br><br>

					<form action="<?= base_url('booking/post'); ?>" method="post">
						<table class="table">
							<tr>
								<td width="400">Kode Booking</td>
								<td><input type="text" name="booking_code" id="booking_code" class="form-control"
										value="<?= $this->session->userdata('booking_code'); ?>" readonly></td>
							</tr>
							<tr>
								<td>Nama Koordinator</td>
								<td><input type="text" name="name" id="name" class="form-control"
										value="<?= $this->session->userdata('name'); ?>" readonly></td>
							</tr>
							<tr>
								<td>Nomor Rekening</td>
								<td><input type="text" name="no_rekening" id="no_rekening" class="form-control"
										value="<?= $this->session->userdata('no_rekening'); ?>" readonly></td>
							</tr>
							<tr>
								<td>Email</td>
								<td><input type="text" name="email" id="email" class="form-control"
										value="<?= $this->session->userdata('email'); ?>" readonly></td>
							</tr>
							<tr>
								<td>Contact Person</td>
								<td><input type="text" name="contact" id="contact" class="form-control"
										value="<?= $this->session->userdata('contact'); ?>" readonly></td>
							</tr>
							<tr>
								<td>Alamat</td>
								<td><input type="text" name="alamat" id="alamat" class="form-control"
										value="<?= $this->session->userdata('alamat'); ?>" readonly></td>
							</tr>
							<tr>
								<td>Tgl. Masuk</td>
								<td><input type="date" name="date" id="date" class="form-control"
										value="<?= date('Y-m-d', strtotime($this->session->userdata('booking_date_start'))) ?>"
										readonly> -
									<b><?= $total ?>
										orang sudah
										mendaftar</b></td>
							</tr>
							<tr>
								<td>Sesi</td>
								<td><input type="text" name="sesi" id="sesi" class="form-control"
										value="<?= $this->session->userdata('sesi'); ?>" readonly></td>
							</tr>
							<!-- <tr>
								<td>Tgl. Keluar</td>
								<td></td>
							</tr> -->
							<tr>
								<td>Jam Datang</td>
								<td><input type="text" name="time" id="time" class="form-control"
										value="<?= $this->session->userdata('time'); ?>" readonly></td>
							</tr>
							<tr>
								<td>Jumlah Anggota</td>
								<td><input type="text" name="quantity" id="quantity" class="form-control"
										value="<?= $this->session->userdata('quantity'); ?>" readonly></td>
							</tr>
							<tr>
								<td>Jumlah yang harus dibayarkan</td>
								<td><input type="text" name="payment" id="payment" class="form-control"
										value="<?= $this->session->userdata('payment'); ?>" readonly>

							</tr>
							<tr>
								<td><b>Pastikan data yang anda masukan sudah benar</b></td>
								<td>
									<?php									
									if (($total+$_SESSION['quantity']) > 10) {?>
									<a class="btn btn-success" disabled>Konfirmasi pemesanan</a>
									Tidak bisa melakukan pemesanan karena kuota sudah penuh
									<?php
									} else{ ?>
									<button class="btn btn-success" type="submit">Konfirmasi Pemesanan</button>
									<?php
									}
									?>
									<a href="<?= base_url('booking/tanggal'); ?>" class="btn btn-danger">Batalkan
										Pemesanan</a>
									<!-- <a href="post" class="btn btn-success">Konfirmasi pemesanan</a> -->
								</td>
							</tr>
						</table>
					</form>
				</div>


			</div>

		</div>

	</div>


</main> <!-- .content -->

<?= $footer ?>

<?php
function format_tgl($tanggal) {
	$bulan = array('Bulan', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');

	$cal = explode("-",$tanggal);
	$tgl = $cal[2];
	$bln = $cal[1];
	$thn = $cal[0];

	for ($i=0; $i < 13; $i++) { 
		if ($bln==$i) {
			$bln=$bulan[$i];
		}
	}

	echo "$tgl $bln $thn";
}
?>