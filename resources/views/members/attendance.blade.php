

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




table tr th{
  border:2px solid black;
  color: white;
}
table tr td{
  border:2px dotted black;
}

}

  </style>
</head>
<body>

<?php

  
$volunteer_query= App\Stakeholders::select('s_names','s_ids','emails','addresses','contact_nos','job_types','dobs')->where('types','volunteer')->get();

$count_volunteer = count($volunteer_query);


  ?>
  
<div class="table-container" id="three">
<h2><i> Our Volunteers </i> </h2>
 
    
<div class="tab">
      <table id="table1" class="w3-table-all" id="org-disp-table">
        <thead>
          <tr class="w3-grey">
        <th> Sr No </th>
        <th>Registeration Number</th>
        <th>Name</th>
        <th>Type</th>
        <th>Address</th>
        <th>Contact Number</th>
        <th>Date Of Birth</th>
        <th>Attendance</th>
      </tr>
      </thead>
    
    <!-- Row 1 - fadeIn -->
<tr>
      <?php
      $id_arr  = array();
        for ($i=0; $i <$count_volunteer ; $i++) { 
          echo "<section class='row-fadeIn-wrapper'>";
          echo "<article class='row fadeIn nfl' >";
          echo "<ul style='height:100%;'>";
          $list3 = $volunteer_query[$i];
          $s_names3 = $list3['s_names'];
          $emails3 = $list3['emails'];
          $v_id3 = $list3['s_ids'];
          $addresses3 = $list3['addresses'];
          $job_types3 = $list3['job_types'];
          $contact_nos3 = $list3['contact_nos'];
          $dobs3 = $list3['dobs'];

          array_push($id_arr, $v_id3);


          echo "<td>";
          echo $v_id3;
          echo "</td>";

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
        
         

         echo "<td>";
         echo "<button id='$v_id3' value = 'Insert Attendance'>Insert Attendace</button>";
                 
                  echo "</td>";
      


        echo"<td>";
        echo"<a href = '#'>Text Here</a>";

          echo "</tr>";
          

         
}
         
?>
   


</table>
</div>
</div>

<div id="myModal" class="modal">

  <div class="modal-content">
    <span class="close">&times;</span>
    <div class="container-contact100">
    <div class="wrap-contact100">
      <form class="contact100-form validate-form" action="/volunteers/add_attendance" method="POST">
                {{csrf_field()}}
        <span class="contact100-form-title">
          volunteer's Attendance Page
        </span>

         <div class="wrap-input100 validate-input bg1" data-validate="Please Select The Date">
          <span class="label-input100">Student ID</span>
          <input  id="idi" class="input100" type="number" name="name" placeholder="Select The Date" disabled/>
        </div>

        <div class="wrap-input100 validate-input bg1" data-validate="Please Select The Date">
          <span class="label-input100">v_a_dates *</span>
          <input id="date" class="input100" type="date" name="name" placeholder="Select The Date">
        </div>

        

        <div class="wrap-input100 bg1 rs1-wrap-input100">
          <span class="label-input100">Status *</span>
          <input id="v_attendeds" class="input100" type="text" name="v_attendeds" placeholder="Enter 1 or o ">
        </div>


        <div class="wrap-input100 bg1 rs1-wrap-input100">
          <span class="label-input100">leavenotes*</span>
          Select a file: <input type="file" name="myFile"><br><br>
          
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

<script type="text/javascript">
  let table= document.getElementById('table1'), iIndex;
  for(let i=0; i<table.rows.length; i++){
    table.rows[i].onclick= function(){
      rIndex=this.rowIndex;
      document.getElementById('idi').value=this.cells[0].innerHTML;
     
     

    }
  }
</script>

<script>
// Get the modal
    var id = <?php echo json_encode($id_arr); ?>;
    var count_id = id.length;
var modal = document.getElementById('myModal');
var btns = [];
for (var i = id[0]; i > count_id; i++) {


btns[i]= document.getElementById(id[i])
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
for (var i = id[0]; i > count_id; i++) {
btns[i].onclick = function() {
  modal.style.display = "block";
}
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
</html>


