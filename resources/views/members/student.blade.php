<!DOCTYPE html>
<html>
<head>
	<title></title>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style type="text/css">
	
body{
    background: #eee;
}
span{
    font-size:15px;
}
a{
  text-decoration:none; 
  color: #0062cc;
  /* border-bottom:2px solid #0062cc; */
}
.heading{
	text-align: center;
}

.box{
    padding:60px 0px;
}

.abc{
	color: black;
}
.box-part{
    background:#FFF;
    border-radius:0;
    padding:60px 10px;
    margin:30px 0px;
}
.text{
    margin:20px 0px;
}

.fa{
     color:#4183D7;
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
          <li class="nav-item"><a href="/memberhome" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="/members/add" class="nav-link">Add Member</a></li>
					<li class="nav-item"><a href="/members/assign" class="nav-link">Assign Members</a></li>
					<li class="nav-item active"><a href="/studenthome" class="nav-link">Student Attendance</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="hero-wrap" style="background-image: url('/colrib/images/bg_7.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
             <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Home</a></span> <span>Student Attendance</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Student Attendance</h1>
          </div>
        </div>
      </div>
    </div>
<br>
<br>
<br>
<br>
<br>
		<?php
echo"<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<h2 class='heading'>STUDENT DETAILS<h2>
<div class='box'>
    <div class='container'>
     	<div class='row'>

			 ";

$res = App\Students::select('st_ids','st_names','addresses','st_emails','dobs')->get();




for($i=0;$i<count($res);$i++){

	$array1 = $res[$i];
	$name = $array1['st_names'];
	$email = $array1['st_emails'];
	$address = $array1['addresses'];
	$id = $array1['st_ids'];
	$dob = $array1['dobs'];


$res1 = App\StudentAttendances::select('st_dates','st_attendeds','st_leavenotes','st_ids')->where('st_ids',$id)->get();
    
	$array3 = $res1[0];
	$date = $array3['st_dates'];
	$attendeds = $array3['st_attendeds'];
	$stid = $array3['st_ids'];




 


	

echo "			
			 
			    <div class='col-lg-4 col-md-4 col-sm-4 col-xs-12'>

               
					<div class='box-part text-center'>
                        <img src='avatar.jpg' class='fa fa-instagram fa-3x' alt=Avatar'>
                        
                        
						<div class='title'>
							<h4>$id</h4>
							<h4>$name</h4>
							<h4>$dob</h4>
							<h4>$email</h4>
						</div>
                        
						<div class='text'>
							<span>$address</span>
						</div>
                        
						<button type='button' class='btn btn-secondary' data-toggle='modal' data-target='#exampleModalCenter'>Show Attendance</button>

						<div class='modal fade' id='exampleModalCenter' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
						  <div class='modal-dialog modal-dialog-centered' role='document'>
						    <div class='modal-content'>
						      <div class='modal-header'>
						        <h5 class='modal-title' id='exampleModalLongTitle'>Attendance</h5>
						        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
						          <span aria-hidden='true'>&times;</span>
						        </button>
						      </div>
						      <div class='modal-body'>
						      Percentage = 69.8%
						      Dates attended -> $date
						      </div>
						      <div class='modal-footer'>
						        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
						  						      </div>
						    </div>
						  </div>
						</div>




                        
					 </div>
				</div>	" ;

}

 ?>

		</div>		
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
</body>
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

</html>


