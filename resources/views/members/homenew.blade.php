<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="w3css.css">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://www.chartjs.org/dist/2.8.0/Chart.min.js"></script>
    <script src="https://www.chartjs.org/samples/latest/utils.js"></script>
<style>
body {font-family: Arial, Helvetica, sans-serif;
background-color: #fff}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

#myBtn{
	padding: 2%;
	width: 30%;
	position: fixed;
	left: 15%;
	top: 65%;
	background-color: #333333;
	font-family: sans-serif;
	font-size: 1.2vw;
	font-weight: bolder;
	color: white;

}

#myBtn:hover{
	background-color: grey;

}

#myBtn2{
	padding: 2%;
	width: 30%;
	position: fixed;
	left: 55%;
	top: 65%;
	background-color: #333333;
	font-family: sans-serif;
	font-size: 1.2vw;
	font-weight: bolder;
	color: white;

}

#myBtn3{
	padding: 2%;
	width: 30%;
	position: fixed;
	left: 35%;
	top: 85%;
	background-color: #333333;
	font-family: sans-serif;
	font-size: 1.2vw;
	font-weight: bolder;
	color: white;

}

@import url(https://fonts.googleapis.com/css?family=Montserrat);
body,html{
    margin: 0;
    padding: 0;
    font-family: 'Montserrat', sans-serif;
}
.hero-nav{
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 400px;
    min-height: 105px;
    background-image: url(https://i.ytimg.com/vi/tNJQY1tP5mY/maxresdefault.jpg);
    background-size: cover;
    background-position: center;
    overflow: hidden;
    .hero-nav__inner{
        z-index: 1;
    }
    h1{
        color: #efefef;
        font-size: 5vw;
    }
    &:before{
        content: "";
        background: rgba(#000, 0);
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        transition: background 400ms;
    }
    &.fixme{
        &:before{
            background: rgba(#000, 0.8);
        }
    }
}
.page-content{
    width: 30em;
    margin: 0 auto;
    line-height: 1.625;
}




</style>
</head>
<body>
	 <?php

  $select_query= App\Organizations::select('registration_numbers','o_names','o_types','o_addresses','contact_nos')->get();
  

  $count_arr = count($select_query);

$donor_query= App\Stakeholders::select('s_names','emails','addresses','contact_nos','dobs')->where('types','donors')->get();

$count_donor = count($donor_query);

$volunteer_query= App\Stakeholders::select('s_names','emails','addresses','contact_nos','job_types','dobs')->where('types','volunteer')->get();

$count_volunteer = count($volunteer_query);


  ?>

  <div class="hero-nav">
    <div class="hero-nav__inner">
        <h1>Welcome Member</h1>
        <div class="hero-nav__button">
            <a href="#" class="btn"></a>
        </div>
    </div>
</div>

  
<div class="button-container">
	<button id="myBtn" class="btn rainbow-button">View Organizations</button>
</div>
<div class="button-container">
	<button id="myBtn2" class="btn rainbow-button">View Donors</button>
</div>
<div class="button-container">
	<button id="myBtn3" class="btn rainbow-button">View Volunteers</button>
</div>
	<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2><i>Associated Organizations</i></h2>
   <table class="w3-table-all" id="org-disp-table" >
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

<div id="myModal2" class="modal">

	<div class="modal-content">
		<h2><i>Our Donors</i></h2>

		<span class="close">&times;</span>
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

<div id="myModal3" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
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
		var randomScalingFactor = function() {
			return Math.round(Math.random() * 100);
		};

		var config = {
			type: 'pie',
			data: {
				datasets: [{
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
					],
					backgroundColor: [
						window.chartColors.red,
						window.chartColors.orange,
						window.chartColors.yellow,
						window.chartColors.green,
						window.chartColors.blue,
					],
					label: 'Dataset 1'
				}],
				labels: [
					'Red',
					'Orange',
					'Yellow',
					'Green',
					'Blue'
				]
			},
			options: {
				responsive: true
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('chart-area').getContext('2d');
			window.myPie = new Chart(ctx, config);
		};

		document.getElementById('randomizeData').addEventListener('click', function() {
			config.data.datasets.forEach(function(dataset) {
				dataset.data = dataset.data.map(function() {
					return randomScalingFactor();
				});
			});

			window.myPie.update();
		});

		var colorNames = Object.keys(window.chartColors);
		document.getElementById('addDataset').addEventListener('click', function() {
			var newDataset = {
				backgroundColor: [],
				data: [],
				label: 'New dataset ' + config.data.datasets.length,
			};

			for (var index = 0; index < config.data.labels.length; ++index) {
				newDataset.data.push(randomScalingFactor());

				var colorName = colorNames[index % colorNames.length];
				var newColor = window.chartColors[colorName];
				newDataset.backgroundColor.push(newColor);
			}

			config.data.datasets.push(newDataset);
			window.myPie.update();
		});

		document.getElementById('removeDataset').addEventListener('click', function() {
			config.data.datasets.splice(0, 1);
			window.myPie.update();
		});
	</script>



<script>
// Get the modal
var modal = document.getElementById('myModal');

var modal2 = document.getElementById('myModal2');

var modal3 = document.getElementById('myModal3');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

var btn2 = document.getElementById("myBtn2");
var btn3 = document.getElementById("myBtn3");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

btn2.onclick = function() {
  modal2.style.display = "block";
}

btn3.onclick = function() {
  modal3.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
  modal2.style.display= "none";
  modal3.style.display= "none";
}



// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
  if (event.target == modal3) {
    modal2.style.display = "none";
  }
}
</script>

<script type="text/javascript">
	var heroShinker = function() {
    var hero = $('.hero-nav'),
        heroHeight = $('.hero-nav').outerHeight(true);
        $(hero).parent().css('padding-top', heroHeight);
    $(window).scroll(function() {
        var scrollOffset = $(window).scrollTop();
        if (scrollOffset < heroHeight) {
            $(hero).css('height', (heroHeight - scrollOffset));
        }
        if (scrollOffset > (heroHeight - 215)) {
            hero.addClass('fixme');
        } else {
            hero.removeClass('fixme');
        };
    });
}
heroShinker();
</script>

</body>
</html>