<!DOCTYPE html>
<html lang="en">
<head>
	<title>StakeHolder's Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="/ContactFrom_v5/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/ContactFrom_v5/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/ContactFrom_v5/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/ContactFrom_v5/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/ContactFrom_v5/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/ContactFrom_v5/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/ContactFrom_v5/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/ContactFrom_v5/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/ContactFrom_v5/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/ContactFrom_v5/vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/ContactFrom_v5/css/util.css">
	<link rel="stylesheet" type="text/css" href="/ContactFrom_v5/css/main.css">
<!--===============================================================================================-->
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

<style type="text/css">
	#sub-type{
		display: none;
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
          <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
          <li class="nav-item"><a href="/causes" class="nav-link">Causes</a></li>
          <li class="nav-item"><a href="/donate" class="nav-link">Donate</a></li>
          <li class="nav-item"><a href="/gallery" class="nav-link">Gallery</a></li>
          <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="hero-wrap" style="background-image: url('/colrib/images/bg_7.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Home</a></span> <span>Home</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Home</h1>
          </div>
        </div>
      </div>
    </div>

<div class="row container-contact100">
	<div class="col-sm-6">
	<div class="container-contact100">
		<div class="wrap-contact100">
			<span class="contact100-form-title">
				Assigned Volunteer
			</span>
			<div class="wrap-input100 input100-select bg1" id="volunteer-name">
				
			</div>
		</div>
	</div>
	</div>
	<div class="col-sm-6">
		<div class="container-contact100">
			<div class="wrap-contact100">
				<form class="contact100-form validate-form" action="/members/assign" method="POST">
					{{csrf_field()}}
					<span class="contact100-form-title">
						Assign Volunteer
					</span>
					<div class="wrap-input100 input100-select bg1">
						<span class="label-input100">Select Organization *</span>
						<div>
							<select class="js-select2" name="o_ids" id="o_ids">
								<option disabled>Select</option>
								<?php
									for ($i=0; $i < count($organization); $i++) { 
								?>
									<option vlaue="{{$organization[$i]['registration_numbers']}}">{{$organization[$i]['o_names']}}-{{$organization[$i]['registration_numbers']}}</option>
								<?php
									}
								?>
							</select>							
							<div class="dropDownSelect2"></div>
						</div>
					</div>
					<div class="wrap-input100 input100-select bg1">
						<span class="label-input100">Select Volunteer *</span>
						<div>
							<select class="js-select2" name="v_ids">
								<option disabled>Select</option>
								<?php
									for ($i=0; $i < count($volunteer); $i++) { 
								?>
									<option vlaue="{{$volunteer[$i]['s_ids']}}">{{$volunteer[$i]['s_names']}}-{{$volunteer[$i]['s_ids']}}</option>
								<?php
									}
								?>
							</select>							
							<div class="dropDownSelect2"></div>
						</div>
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
	</div>
	
</div>



<!--===============================================================================================-->
<script src="/ContactFrom_v5/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/ContactFrom_v5/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/ContactFrom_v5/vendor/bootstrap/js/popper.js"></script>
	<script src="/ContactFrom_v5/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/ContactFrom_v5/vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
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
	<script>
		document.getElementById('o_ids').onchange = function(){
			$.ajax({
				type: 'GET', 
				url: "/members/fetch_ovrelations",
				data: {"id":this.value},
				success: function(results){
					$('#volunteer-name').empty();
					if(results.length<1){
						$("#volunteer-name").html("<span class='label-input100'><h6> No volunteers are assigned.</h6></span>");
					}else{
						results.forEach(function(result){
							$("#volunteer-name").append("<span class='label-input100'><h6> <b>Name:</b> "+result['s_names']+"</h6></span><br>");
						})
					}
					
					// console.log(result);
					
			}});
		}
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
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> -->
  <script src="/colrib/js/google-map.js"></script>
  <script src="/colrib/js/main.js"></script>
  

<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script> -->

</body>
</html>
