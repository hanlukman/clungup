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
					<h4>Form Pemesanan</h4>

					<form action="<?= base_url("booking/confirm") ?>" method="POST"
						class="contact-form form-horizontal">
						<div class="form-group">
							<label class="control-label col-sm-2" for="nama">Nama Koordinator</label>
							<div class="col-sm-10">
								<input type="text" name="name" class="form-control" id="nama"
									placeholder="Masukan nama anda">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="email">Email</label>
							<div class="col-sm-10">
								<input type="email" name="email" class="form-control" id="email"
									placeholder="Masukan email anda">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="contact">Contact</label>
							<div class="col-sm-10">
								<input type="text" name="contact" class="form-control" id="contact"
									placeholder="Masukan nomor HP anda">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="rekening">No. Rekening Anda</label>
							<div class="col-sm-10">
								<input type="text" name="no_rekening" class="form-control" id="rekening"
									placeholder="Masukan nomor rekening anda">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="kota">Kota</label>
							<div class="col-sm-10">
								<input type="text" name="kota" class="form-control" id="kota"
									placeholder="Masukan kota anda">
							</div>
						</div>
						<!-- <div>
					                    <label for="kota">Nationality : </label>
					                    <input type="text" name="nationality" id="contact" class="form-control">
					                </div> -->
						<!-- <div>
					                     <label for="name">Date Start : (yyyy-mm-dd) </label>
					                    <input type="text" name="datestart" id="contact" class="form-control">
					                    <label for="name">Date End : </label>
					                    <input type="text" name="dateend" id="contact" class="form-control">					                
					                </div> -->
						<div class="form-group">
							<label class="control-label col-sm-2" for="datestart">Tgl. Masuk</label>
							<div class="col-sm-10">
								<input type="date" name="datestart" class="form-control datepicker" id="datestart">
							</div>
						</div>
						<!-- <div class="form-group">
							<label class="control-label col-sm-2" for="dateend">Tgl. Keluar</label>
							<div class="col-sm-10">
								<input type="text" name="dateend" class="form-control datepicker" id="dateend">
							</div>
						</div> -->
						<div class="form-group">
							<label class="control-label col-sm-2" for="time">Jam Datang</label>
							<div class="col-sm-10">
								<input type="time" name="time" class="form-control time" id="time">
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-sm-2" for="email">Jumlah Anggota</label>
							<div class="col-sm-10">
								<!-- <input type="text" name="qty" class="form-control" id="qty" placeholder="Masukan jumlah anggota anda"> -->
								<select name="qty" class="form-control" id="qty">
									<?php
												for ($i=1; $i <= 10 ; $i++) { ?>
									<option value="<?= $i ?>"><?= $i ?> orang</option>
									<?php	
												}
												?>
								</select>
							</div>
						</div>


						<!-- <div>
					                    <label for="name">qty : </label>
					                    <input type="text" name="qty" id="email" class="form-control">
					                </div> -->
						<!--                <div>
					                    <label for="nationality">Nationality : </label>
					                    <select id="nationality" name="nationality" class="form-control">
					                        <option value="test">test</option>
					                        
					                    </select>
					                </div>-->

						<div class="form-group">
							<div class="col-sm-12">
								<br>
								<input type="submit" class="btn btn-info" value="Book">
							</div>
						</div>

					</form>
					<!-- 
								<form action="#" class="contact-form">
									<input type="text" placeholder="Your Name...">
									<input type="text" placeholder="Company Name...">
									<input type="text" placeholder="Email">
									<textarea name="" id="" placeholder="Message..."></textarea>
									<input type="submit" class="button" value="Send Message">
								</form> -->
				</div>


			</div>

		</div>

	</div>


</main> <!-- .content -->

<?= $footer ?>