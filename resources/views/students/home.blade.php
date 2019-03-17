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
  border-bottom:2px solid #0062cc;
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
</head>
<body>

</body>
</html>

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


