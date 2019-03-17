<!DOCTYPE html>
<html lang="en">
<head>
	<title>StakeHolder's Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="ContactFrom_v5/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v5/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v5/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v5/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v5/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v5/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v5/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v5/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v5/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v5/vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom_v5/css/util.css">
	<link rel="stylesheet" type="text/css" href="ContactFrom_v5/css/main.css">
<!--===============================================================================================-->

<style type="text/css">
	#sub-type{
		display: none;
	}
</style>
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

    <link rel="stylesheet" href="/colrib/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/colrib/css/animate.css">
    
    <link rel="stylesheet" href="/colrib/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/colrib/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/colrib/css/magnific-popup.css">

    <link rel="stylesheet" href="/colrib/css/aos.css">

    <link rel="stylesheet" href="/colrib/css/ionicons.min.css">

    <link rel="stylesheet" href="/colrib/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/colrib/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="/colrib/css/flaticon.css">
    <link rel="stylesheet" href="/colrib/css/icomoon.css">
    <link rel="stylesheet" href="/colrib/css/style.css">
    <style>
      a,.contact100-form-title{
        font-family: 'Calibri';
      }
      .container-contact100{
        background-color:#fff;
      }
      .wrap-contact100{
        background-color: #fff;
        color:grey;
        border:solid 2px;
        border-color: #f77c41;
      }
      .contact100-form-btn{
        background-color: #fff;
        color: #f77c41;
        border-radius:0px;
      }
      .contact100-form-btn:hover{
        background-color: #000;
        color: #fff;
      }
      .label-input100{
        color: #f77c41;
      }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="/">YIFNGO</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="/donorcauses" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="/donation" class="nav-link">Donors</a></li>
          <li class="nav-item active"><a href="/newdonation" class="nav-link">Donate</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="hero-wrap" style="background-image: url('/colrib/images/bg_7.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Home</a></span> <span>Donate</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Donate</h1>
          </div>
        </div>
      </div>
    </div>



	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="POST" action='/insert_donation'>
				{{csrf_field()}}

				<span class="contact100-form-title">
					Donation's Page
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">Amount *</span>
					<input class="input100" type="text" name="d_amounts" placeholder="Enter the Amount">
				</div>

				

				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Date *</span>
					<input class="input100" type="date" name="d_dates" placeholder="Enter Date">
				</div>


				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Donation Mode *</span>
					<input class="input100" type="text" name="d_modes">
				</div>

				
				
		

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>


	<footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(/colrib/images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(/colrib/images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Site Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Home</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Donate</a></li>
                <li><a href="#" class="py-2 d-block">Causes</a></li>
                <li><a href="#" class="py-2 d-block">Event</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>

<!--===============================================================================================-->
	<script src="ContactFrom_v5/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="ContactFrom_v5/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="ContactFrom_v5/vendor/bootstrap/js/popper.js"></script>
	<script src="ContactFrom_v5/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="ContactFrom_v5/vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if(($(this).val() == "Please chooses") || ($(this).val() == "donor")) {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="ContactFrom_v5/vendor/daterangepicker/moment.min.js"></script>
	<script src="ContactFrom_v5/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="ContactFrom_v5/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="ContactFrom_v5/vendor/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<script src="/colrib/js/jquery.min.js"></script>
  <script src="/colrib/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/colrib/js/popper.min.js"></script>
  <script src="/colrib/js/bootstrap.min.js"></script>
  <script src="/colrib/js/jquery.easing.1.3.js"></script>
  <script src="/colrib/js/jquery.waypoints.min.js"></script>
  <script src="/colrib/js/jquery.stellar.min.js"></script>
  <script src="/colrib/js/owl.carousel.min.js"></script>
  <script src="/colrib/js/jquery.magnific-popup.min.js"></script>
  <script src="/colrib/js/aos.js"></script>
  <script src="/colrib/js/jquery.animateNumber.min.js"></script>
  <script src="/colrib/js/bootstrap-datepicker.js"></script>
  <script src="/colrib/js/jquery.timepicker.min.js"></script>
  <script src="/colrib/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="/colrib/js/google-map.js"></script>
  <script src="/colrib/js/main.js"></script>
</body>
</html>



