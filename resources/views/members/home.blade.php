

<!DOCTYPE html>
<html>
<head>

  <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3css.css">


<style type="text/css">

.table-container{
  width: 40%;
}
.headtext{

}


.tab
{
  overflow-y:scroll;
  max-height: 20%;

}



#two{
  display: none;
}

#three{
  display: none;
}


table tr th{
  border:2px solid black;
  color: white;
}
table tr td{
  border:2px dotted black;
}

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

<button id="myBtn">Open Modal</button>






  <?php

  $select_query= App\Organizations::select('registration_numbers','o_names','o_types','o_addresses','contact_nos')->get();
  

  $count_arr = count($select_query);

$donor_query= App\Stakeholders::select('s_names','emails','addresses','contact_nos','dobs')->where('types','donors')->get();

$count_donor = count($donor_query);

$volunteer_query= App\Stakeholders::select('s_names','emails','addresses','contact_nos','job_types','dobs')->where('types','volunteer')->get();

$count_volunteer = count($volunteer_query);


  ?>
  <h2 style="margin-top:80px;"><i> Associated Organizations </i></h2>
  <div class="table-container">
    
  <div class="tab">
      <table class="w3-table-all" id="org-disp-table">
        <thead>
          <tr class="w3-grey headtext">
        <th>Registeration Number</th>
        <th>Name</th>
        <th>Type</th>
        <th>Address</th>
        <th>Contact Number</th>

      </tr>
      </thead>
    
    <!-- Row 1 - fadeIn -->
<tr>
    <?php
        for ($i=0; $i <$count_arr ; $i++) { 
          echo "<section class='row-fadeIn-wrapper'>";
          echo "<article class='row fadeIn nfl' >";
          echo "<ul style='height:100%;'>";
          $list = $select_query[$i];
          $registration_numbers = $list['registration_numbers'];
          $o_names = $list['o_names'];
          $o_types = $list['o_types'];
          $o_addresses = $list['o_addresses'];
          $contact_nos = $list['contact_nos'];



          echo "<td>";
          echo $registration_numbers;
          echo "</td>";


          echo "<td>";
          echo $o_names;
          echo "</td>";


          echo "<td>";
          echo $o_types;
          echo "</td>";


          echo "<td>";
          echo $o_addresses;
          echo "</td>";


          echo "<td>";
          echo $contact_nos;
          echo "</td>";

          echo "</td>";

          echo "</tr>";

         
}
         
?>



</table>
</div>
</div>
</div>
<br>
<br>
<div class="table-container" id="two">
<h2><i> Our Donors </i> </h2>
<div class="tab">
  <table class="w3-table-all" id="org-disp-table">
        <thead>
          <tr class="w3-grey">
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Contact Number</th>
       
        <th>Date Of Birth</th>
      </tr>
      </thead>
    
    <!-- Row 1 - fadeIn -->
<tr>
    <?php
        for ($i=0; $i <$count_donor ; $i++) { 
          echo "<section class='row-fadeIn-wrapper'>";
          echo "<article class='row fadeIn nfl' >";
          echo "<ul style='height:100%;'>";
          $list2 = $donor_query[$i];
          $s_names = $list2['s_names'];
          $emails = $list2['emails'];
          $addresses = $list2['addresses'];
          $contact_nos = $list2['contact_nos'];
          
          $dobs = $list2['dobs'];



          echo "<td>";
          echo $s_names;
          echo "</td>";


          echo "<td>";
          echo $emails;
          echo "</td>";


          echo "<td>";
          echo $addresses;
          echo "</td>";


          echo "<td>";
          echo $contact_nos;
          echo "</td>";





          echo "<td>";
          echo $dobs;
          echo "</td>";

          echo "</td>";

          echo "</tr>";

         
}
         
?>
  
</table>
</div>
</div>
<div class="table-container" id="three">
<h2><i> Our Volunteers </i> </h2>
 
    
<div class="tab">
      <table class="w3-table-all" id="org-disp-table">
        <thead>
          <tr class="w3-grey">
        <th>Registeration Number</th>
        <th>Name</th>
        <th>Type</th>
        <th>Address</th>
        <th>Contact Number</th>
        <th>Date Of Birth</th>
      </tr>
      </thead>
    
    <!-- Row 1 - fadeIn -->
<tr>
      <?php
        for ($i=0; $i <$count_volunteer ; $i++) { 
          echo "<section class='row-fadeIn-wrapper'>";
          echo "<article class='row fadeIn nfl' >";
          echo "<ul style='height:100%;'>";
          $list3 = $volunteer_query[$i];
          $s_names3 = $list3['s_names'];
          $emails3 = $list3['emails'];
          $addresses3 = $list3['addresses'];
          $job_types3 = $list3['job_types'];
          $contact_nos3 = $list3['contact_nos'];
          
          $dobs3 = $list3['dobs'];



          echo "<td>";
          echo $s_names3;
          echo "</td>";


          echo "<td>";
          echo $emails3;
          echo "</td>";


          echo "<td>";
          echo $addresses3;
          echo "</td>";

          echo "<td>";
          echo $job_types3;
          echo "</td>";

          




          echo "<td>";
          echo $contact_nos3;
          echo "</td>";





          echo "<td>";
          echo $dobs3;
          echo "</td>";

          echo "</td>";

          echo "</tr>";

         
}
         
?>
   


</table>
</div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

      
        
        
          
</body>
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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


