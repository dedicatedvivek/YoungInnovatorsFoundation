<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);

body {
  background-color: #E6E6E6;
  font-family: "Roboto", helvetica, arial, sans-serif;
  font-size: 16px;
  font-weight: 400;
  text-rendering: optimizeLegibility;
}
#heading{
	color: black;
}

div.table-title {
   display: block;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
}

.table-title h3 {
	text-align: center;
   color: #fafafa;
   font-size: 30px;
   font-weight: 400;
   font-style:normal;
   font-family: "Roboto", helvetica, arial, sans-serif;
   text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
   text-transform:uppercase;
}


/*** Table Styles **/

.table-fill {
  background: white;
  border-radius:3px;
  border-collapse: collapse;
  height: 320px;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}
 
th {
  color:#D5DDE5;;
  background:#1b1e24;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:23px;
  font-weight: 700;
  padding:24px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}

th:first-child {
  border-top-left-radius:3px;
}
 
th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}
  
tr {
  border-top: 1px solid #C1C3D1;
  border-bottom-: 1px solid #C1C3D1;
  color:#666B85;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 
tr:hover td {
  background:#4E5066;
  color:#FFFFFF;
  border-top: 1px solid #22262e;
}
 
tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}
 
tr:nth-child(odd) td {
  background:#EBEBEB;
}
 
tr:nth-child(odd):hover td {
  background:#4E5066;
}

tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}
 
tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}
 
td {
  background:#FFFFFF;
  padding:20px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

td:last-child {
  border-right: 0px;
}

th.text-left {
  text-align: left;
}

th.text-center {
  text-align: center;
}

th.text-right {
  text-align: right;
}

td.text-left {
  text-align: left;
}

td.text-center {
  text-align: center;
}

td.text-right {
  text-align: right;
}
</style>

<?php
$res = App\Stakeholders::select('s_names','emails','addresses','contact_nos','types','job_types','dobs')->where('types','volunteer')->get();

echo "

<div class='table-title'>
<h3 id='heading'>Volunteer's Details Table</h3>
</div>
<table class='table-fill'>
<thead>
<tr>
      <th class='text-left'>Name</th>
      <th class='text-left'>Email</th>
      <th class='text-left'>Phone</th>
      <th class='text-left'>DOB</th>
      <th class='text-left'>Address</th>
      <th class='text-left'>Volunteering-Type</th>
</tr>

 
  </thead>
  ";

for($i=0;$i<count($res);$i++){

	$array1 = $res[$i];
	$name = $array1['s_names'];
	$email = $array1['emails'];
	$address = $array1['addresses'];
	$phone = $array1['contact_nos'];
	$job = $array1['job_types'];
	$dob = $array1['dobs'];

 echo "

 
  <tbody>
    <tr>
      <td class='text-left'><strong>$name</strong></td>
      <td class='text-left'>$email</td>
      <td class='text-left'>$phone</td>
      <td class='text-left'>$dob</td>
      <td class='text-left'>$address</td>
      <td class='text-left'>$job</td>

    </tr>
  </tbody>
";

}








?>
</table>