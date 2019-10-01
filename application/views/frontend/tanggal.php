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
						<h1>Form Pemesanan</h1>
						<div class="row">
							<div class="col-md-12">
								<div class="box">
									<!-- input month-->
									<div class="box-body">
										<div class="form-group row">
											<label class="col-sm-2 control-label">Month</label>
											<div class="col-sm-10">
												<form>
													<select class="form-control" name="mymonth" id="mymonth"
														onchange="show_date()">
														<option value>-</option>
														<option value="01">January</option>
														<option value="02">February</option>
														<option value="03">March</option>
														<option value="04">April</option>
														<option value="05">May</option>
														<option value="06">June</option>
														<option value="07">July</option>
														<option value="08">August</option>
														<option value="09">September</option>
														<option value="10">October</option>
														<option value="11">November</option>
														<option value="12">Desember</option>
													</select>
												</form>
											</div>
										</div>
									</div>
									<!-- year -->
									<!-- <div class="box-body">
										<div class="form-group row">
											<label class="col-sm-2 control-label">Year</label>
											<div class="col-sm-10">
												<select class="form-control" name="years" id="myyear">
													<option value>-</option>
													<option value="2019">2019</option>
													<option value="2020">2020</option>
													<option value="2021">2021</option>
													<option value="2022">2022</option>
													<option value="2023">2023</option>
												</select>
											</div>
										</div>
									</div> -->
								</div>
							</div>
						</div>
						<!-- end month + year -->
						<!-- start list day -->
						<div id="txtHint"></div>
						<!-- <table class="table table-bordered">
							<thead>
								<tr>
									<th scope="col">Date</th>
									<th scope="col">Session</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Mark</td>
								</tr>
							</tbody>
						</table> -->


					</div>
				</div>


			</div>

		</div>

	</div>


</main> <!-- .content -->

<?= $footer ?>