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
										<form action="" method="post">
											<div class="form-group row">
												<input type="text" name="kode" id="kode" class="form-control"
													placeholder="Masukkan Kode Booking Anda">
												<?= form_error('kode', '<small class="text-danger">', '</small>') ?>
											</div>
											<div class="form-group row">
												<button type="submit" class="btn btn-primary btn-block">Submit</button>
											</div>
										</form>
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