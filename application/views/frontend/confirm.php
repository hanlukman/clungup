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
						<br>
						<a href="" class="btn btn-info">Ubah data</a>
						<br><br>
						
						<table class="table">						
							<tr>
								<td width="400">Nama Koordinator</td>
								<td><?= $_SESSION['name'] ?></td>
							</tr>
							<tr>
								<td>Email</td>
								<td><?= $_SESSION['email'] ?></td>
							</tr>
							<tr>
								<td>Contact Person</td>
								<td><?= $_SESSION['contact'] ?></td>
							</tr>
							<tr>
								<td>Kota</td>
								<td><?= $_SESSION['kota'] ?></td>
							</tr>
							<tr>
								<td>Tgl. Masuk</td>
								<td><?= format_tgl($_SESSION['booking_date_start']) ?> - <b><?= $total ?> orang sudah mendaftar</b></td>
							</tr>
							<tr>
								<td>Tgl. Keluar</td>
								<td><?= format_tgl($_SESSION['booking_date_end']) ?></td>
							</tr>
							<tr>
								<td>Jam Datang</td>
								<td><?= $_SESSION['time_of_arrival'] ?> WIB</td>
							</tr>
							<tr>
								<td>Jumlah Anggota</td>
								<td><?= $_SESSION['quantity'] ?> orang</td>
							</tr>
							<tr>
								<td>Jumlah yang harus dibayarkan</td>
								<td><?= "Rp. ".number_format($_SESSION['payment'],0,'-','.').",-" ?></td>
							</tr>
							<tr>
								<td><b>Pastikan data yang anda masukan sudah benar</b></td>
								<td>
									<?php									
									if (($total+$_SESSION['quantity']) > 30) {?>
										<a class="btn btn-success" disabled>Konfirmasi pemesanan</a>
										Tidak bisa melakukan pemesanan karena kuota sudah penuh
									<?php
									} else{ ?>
										<a href="<?= base_url('booking/post') ?>" class="btn btn-success">Konfirmasi pemesanan</a>
									<?php
									}
									?>
									<!-- <a href="post" class="btn btn-success">Konfirmasi pemesanan</a> -->									
								</td>
							</tr>
						</table>
					</div>

					
				</div>

			</div>

		</div>

		
	</main> <!-- .content -->

<?= $footer ?>

<?php
function format_tgl($tanggal) {
	$bulan = array('Bulan', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Novermber', 'Desember');

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