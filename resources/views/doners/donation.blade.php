<!DOCTYPE html>
<html>
<head>

  <title></title>

  
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3css.css">
</head>
<body>

  <?php
  #$d_ids=e(donor_id);

  $session_var="building of toilet";
  $select_query= App\donations::select('donor_ids','d_ids','d_amounts','d_dates','d_modes')->get();
  

  $count_arr = count($select_query);




  ?>
<table class="w3-table-all" id="org-disp-table">
        <thead>
          <tr class="w3-grey">
        <th>ID</th>
        <th>Date</th>
        <th>Amount</th>
        <th>Mode</th>
        <th>Purpose</th>
        
      </tr>
      </thead>
    
    <!-- Row 1 - fadeIn -->
<tr>
    <!-- Row 1 - fadeIn -->

    <?php
        for ($i=0; $i <$count_arr ; $i++) { 
          echo "<section class='row-fadeIn-wrapper'>";
          echo "<article class='row fadeIn nfl'>";
          echo "<ul>";
          $list = $select_query[$i];
          $ID = $list['d_ids'];
          $d_amounts = $list['d_amounts'];
          $d_dates = $list['d_dates'];
          $d_modes = $list['d_modes'];
          



       	  echo "<td>";
          echo $ID;
          echo "</td>";


          echo "<td>";
          echo $d_dates;
          echo "</td>";


          echo "<td>";
          echo $d_amounts;
          echo "</td>";


          echo "<td>";
          echo $d_modes;
          echo "</td>";

          echo "<td>";
          echo $session_var;
          echo "</td>";



         

          echo "</td>";

          echo "</tr>";

         
         
}
         
?>



</table>
      

      
        
        
          
</body>
</html>

