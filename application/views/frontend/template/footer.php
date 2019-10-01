<footer class="site-footer wow fadeInUp">
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="widget">
						<h3 class="widget-title">About us</h3>
						<p>Inside the CMC Tiga Warna destination there are 6 beaches with different view of the
							uniqueness of Clungup Beach and Gatra Beach as Mangrove conservation area, Sapana
							Beach-Pantai Mini-Pantai Batu Rupee-Pantai Tiga Warna as a coral reef conservation area.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="widget">
						<h3 class="widget-title">The Beach</h3>
						<ul class="list-arrow">
							<li><a href="#">Clungup Beach</a></li>
							<li><a href="#">Gatra Beach</a></li>
							<li><a href="#">3 Warna Beach</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="widget">
						<h3 class="widget-title">Helpful Links</h3>
						<ul class="list-arrow">
							<li>Canoe</li>
							<li>Snorkeling</li>
							<li>Camping</li>
							<li>Fishing</li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="widget widget-customer-info">
						<h3 class="widget-title">Customer Service</h3>
						<img src="<?= base_url("assets/images/bhakti-alam.png")?>" weight="150px" height="100px" alt=""
							class="pull-left">
						<div class="cs-info">
							<p>Yayasan Bhakti Alam Sendang Biru</p>
							<p>+6281 233 339 889 <br> <a href="mailto:bhaktialamsb@gmail.com">bhaktialamsb@gmail.com</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="branding pull-left col-md-4">
				<img src="<?= base_url("assets/images/logo.png")?>" alt="Company Name" class="logo">
			</div>

			<div class="contact-links pull-right col-md-8">
				<a href="<?= base_url("home/map") ?>"><i class="fa fa-map-marker"></i> Jl. Raya Sendang Biru,
					Tambakrejo, Sumbermanjing Wetan, Kab. Malang</a>
				<a href="tel:+6281233339889"><i class="fa fa-phone"></i> +6281233339889</a>
				<a href="mailto:bhaktialamsb@gmail.com"><i class="fa fa-envelope"></i> bhaktialamsb@gmail.com</a>
			</div>
		</div>
	</div>
	<div class="colophon">
		<div class="container">
			<p class="copy">Copyright 2018 TF-Scale IV.</p>
		</div>
	</div>
</footer> <!-- .site-footer -->






</div> <!-- #site-content -->
<script src="<?= base_url("assets/js/jquery-1.11.1.min.js")?>"></script>
<script src="<?= base_url("assets/js/min/plugins-min.js")?>"></script>
<script src="<?= base_url("assets/js/min/app-min.js")?>"></script>
<script src="<?= base_url("assets/js/datepickerscript.js") ?>"></script>

<!-- mulai aku ngedit -->
<script src="https://uxsolutions.github.io/bootstrap-datepicker/bootstrap-datepicker/js/bootstrap-datepicker.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
	integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
	integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="<?= base_url("assets/timepicker/js/bootstrap-timepicker.min.js") ?>"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$('.contact-form .datepicker').datepicker({
			format: 'yyyy-mm-dd',
			startDate: new Date(),
			daysOfWeekDisabled: [4],

		});
		$('#datestart').change(function () {
			$('#dateend').val($('#datestart').val());
		});
		$('.contact-form .time').timepicker({
			minuteStep: 1,
			showInputs: true,
			showMeridian: false,
			disableFocus: true
		});
	});
</script>
<script>
	function show_date() {
		var str = document.getElementById("mymonth").value;
		if (str == '') {
			return;
		}
		if (window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}

		xmlhttp.onreadystatechange = function () {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("txtHint").innerHTML = this.responseText;
			}
		}

		xmlhttp.open("GET", "../index.php/booking/get_tanggal/" + str, true);
		xmlhttp.send();
	}
</script>

</body>

</html>