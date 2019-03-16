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

<style type="text/css">
	#sub-type{
		display: none;
	}
</style>
</head>
<body>

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
