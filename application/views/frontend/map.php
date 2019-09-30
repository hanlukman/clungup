					<?= $header ?>
					<nav class="breadcrumbs">
						<a href="<?= base_url("home") ?>">Home</a> &rarr;
						<span>Map & Weather</span>
					</nav>
				</div>
			</header> <!-- .site-header -->

			<main class="content">
				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="col-md-4 wow fadeInLeft">
								<h4>Clungup Mangrove Conservation</h4>
								<ul class="list-fa">
									<li><i class="fa fa-map-marker"></i> 
										Jl. Raya Sendang Biru, RT 27 RW 03, Desa Tambakrejo, Kec. Sumbermanjing Wetan, Kab. Malang
									</li>
									<li><i class="fa fa-phone"></i> +6281233339889</li>
									<li><i class="fa fa-envelope"></i>bhaktialamsb@gmail.com</li>
								</ul>

							</div>
							<div class="col-md-7 col-md-push-1 wow fadeInRight">
								<h4>Weather Forecast</h4>
								<table class="table table-stripped" width="100%">
									<tr align="center">
										<th>
											<?php 
												$date=explode(" ",$cuaca->list[1]->dt_txt);
												echo $date[0];
											?>
										</th>
										<th><?php 
												$date=explode(" ",$cuaca->list[9]->dt_txt);
												echo $date[0];
											?>
										</th>
										<th><?php 
												$date=explode(" ",$cuaca->list[17]->dt_txt);
												echo $date[0];
											?>
										</th>
										<th><?php 
												$date=explode(" ",$cuaca->list[25]->dt_txt);
												echo $date[0];
											?>
										</th>
										<th><?php 
												$date=explode(" ",$cuaca->list[33]->dt_txt);
												echo $date[0];
											?>
										</th>
									</tr>
									<tr align="center">
										<td><?= ucwords($cuaca->list[1]->weather[0]->description) ?></td>
										<td><?= ucwords($cuaca->list[9]->weather[0]->description) ?></td>
										<td><?= ucwords($cuaca->list[17]->weather[0]->description) ?></td>
										<td><?= ucwords($cuaca->list[25]->weather[0]->description) ?></td>
										<td><?= ucwords($cuaca->list[33]->weather[0]->description) ?></td>
									</tr>
									<tr align="center">
										<td>
											<?php 
												$suhu=($cuaca->list[1]->main->temp)-273;
												echo $suhu." &degC";
											?>
										</td>
										<td><?php 
												$suhu=($cuaca->list[9]->main->temp)-273;
												echo $suhu." &degC";
											?>
										</td>
										<td><?php 
												$suhu=($cuaca->list[17]->main->temp)-273;
												echo $suhu." &degC";
											?>
										</td>
										<td><?php 
												$suhu=($cuaca->list[25]->main->temp)-273;
												echo $suhu." &degC";
											?>
										</td>
										<td><?php 
												$suhu=($cuaca->list[33]->main->temp)-273;
												echo $suhu." &degC";
											?>
										</td>
									</tr>
								</table>

							</div>
						</div>
						<div class="row">
							<div class="col-md-12 wow fadeInLeft">
								<div id="map">
									<iframe src="https://www.google.com/maps/embed/v1/place?q=-8.430319,112.6766958&amp;key=AIzaSyCQYpY_1fPZ4zGlUTXglRKbisfsc5jKqlM&q=WKKWKWK" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
							</div>								

								<?php
								// echo "<pre>";
								// print_r($cuaca);
								// echo "</pre>";
								?>
							</div>
						</div>
					</div>

				</div>
			</main> <!-- .content -->
			<?= $footer ?>