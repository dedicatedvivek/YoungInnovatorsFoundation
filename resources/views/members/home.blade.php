

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

  $select_query= App\Organizations::select('registration_numbers','o_names','o_types','o_addresses','contact_nos')->get();
  

  $count_arr = count($select_query);

$donor_query= App\Stakeholders::select('s_names','emails','addresses','contact_nos','dobs')->where('types','donors')->get();

$count_donor = count($donor_query);

$volunteer_query= App\Stakeholders::select('s_names','emails','addresses','contact_nos','job_types','dobs')->where('types','volunteer')->get();

$count_volunteer = count($volunteer_query);


  ?>
  <h2><i> Associated Organizations </i></h2>
  <div class="table-container">
    

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
<h2><i> Our Donors </i> </h2>
<div class="table-container">
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
<h2><i> Our Volunteers </i> </h2>
 <div class="table-container">
    

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

      
        
        
          
</body>
</html>


