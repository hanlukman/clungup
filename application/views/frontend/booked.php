<?= $header ?>
	<nav class="breadcrumbs">
				<a href="index.html">Home</a> &rarr;
				<a>Booking</a>&rarr;
				<a>Confirm</a>&rarr;
				<span>Booked</span>
			</nav>
				</div>
			</header> <!-- .site-header -->
	<main class="content">
		<div class="fullwidth-block">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow fadeInLeft">						
						
						<center><h3>Pesanan anda telah dibuat</h3></center>
						<br>
						<div class="col-md-2"></div>
						<div class="col-md-4">
							<center>
								<div style="border:1px solid #555555;width:200px;padding:10px;">Kode booking<br><b><?= $booking_code ?></b></div>							
							</center>		
										
						</div>
						<div class="col-md-4">					
							<center>
								<div style="border:1px solid #555555;width:200px;padding:10px;">Total pembayaran<br><b><?= "Rp. ".number_format($payment,0,'-','.').",-" ?></b></div>
							</center>		
						</div>
						<div class="col-md-2"></div>											
					</div>

					<div class="col-md-12 wow fadeInRight">
						<br>
						<center>
							Batas waktu pembayaran anda adalah <b>dua hari</b><br>
							Silahkan melakukan pembayaran melalui nomor rekening berikut<br><br><br>
							<h3>BRI. 32123321123</h3>
							atas nama
							<h3>Clungup Mangrove Conservation</h3>
						</center>
					</div>
					
				</div>

			</div>

		</div>

		
	</main> <!-- .content -->

<?= $footer ?>