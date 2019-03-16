<?php

namespace App\Http\Controllers;
use App\Organization;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use DB;

class InsertController extends Controller
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	// Organization Insert
    function insert_organization(Request $req){
    	$name = $req->input('name');
    	$regnumber = $req->input('regnumber');
    	$phone = $req->input('phone');
    	$type = $req->input('type');
    	$address = $req->input('address');

    	if ($req->hasFile('filer')) {


    	 $letter = $req->file('filer')->store('pics','public');
    	}  	

    	// $letter = $req;
    	echo "$letter";

    	// if ($req->has('filer')) {
    	// 	$req->file('filer')->store('pics','public');
    	// }
    	

    	// echo $letter;
  //   	if ($req->file('filer') == null) {
  //  			$file = "";
		// }else{
  //  			$file = $req->file('filer')->store('images');  
		// }
    	 // $path = $req->file('letter')->store('images');

    	$data_array = array('registration_numbers'=>$regnumber,'o_names' =>$name ,'o_types' =>$type, 'o_addresses' =>$address, 'contact_nos' =>$phone, 'file_names' =>(string) $letter);

    	$res = \App\Organizations::insert($data_array);

		echo "<script>alert('Data Added Sussessfully')</script>";

    	return redirect('neworganization');

	}
	/* =========================================
	  Member Query
	   ========================================= */
	// Member insert
	function insert_member(Request $req){
    	$name = $req->input('name');
    	$email = $req->input('email');
    	$phone = $req->input('phone');
    	$dob = $req->input('dob');
    	$type = "member";
    	$address = $req->input('address');
    	$data_array = array('s_names' =>$name ,'types' =>$type, 'addresses' =>$address, 'contact_nos' =>$phone, 'emails'=>$email, 'dobs'=>$dob);

		$res = \App\Stakeholders::insert($data_array);
		
		echo "bye";
		
    	return redirect('members/add');
	}
	
	//Member select organization and volunteer volunteer
	function select_ovrelations(){
		$organizationData = \App\Organizations::select('registration_numbers', 'o_names')->get();
		$volunteerData = \App\VolunteerViews::select('s_ids', 's_names')->get();
		return view('members.assign')->with(['organization'=>$organizationData,'volunteer'=>$volunteerData]);
	}
	
	// Member assigning volunteer to organization
	function insert_ovrelations(Request $req){
		$organization = explode('-' ,$req->input('o_ids'))[1];
		$volunteer = explode('-', $req->input('v_ids'))[1];
		$data = array('o_ids' => (string) $organization, 'v_ids' => (int) $volunteer);
		$res = \App\Ovrelations::insert($data);
		return redirect('/members/assign');
	}

	// Member fetching ovrelation
	function fetch_ovrelations(Request $req){
		$data = $req->all();
		$id = explode("-" ,$data['id'])[1];
		$res = \App\Ovrelations::select('v_ids')->where('o_ids', (string) $id)->get();
		$idArray = [];
		for($i=0; $i<count($res); $i++){
			if(!in_array($res[$i]['v_ids'], $idArray)){
				array_push($idArray, $res[$i]['v_ids']);
			}
		}
		$resVolunteer = \App\VolunteerViews::select('s_names')->whereIn('s_ids', $idArray)->get();
		return response()->json($resVolunteer, 200);
	}

	/* =======================
		End of members query
	       ============*/

	// Stakeholder insert
    function insert_stakeholder(Request $req){
    	$name = $req->input('name');
    	$email = $req->input('email');
    	$phone = $req->input('phone');
    	$dob = $req->input('dob');
    	$job = $req->input('job');
    	$typevolunteer = $req->input('type-volunteer');
    	$address = $req->input('address');

    	$data_array_stake = array('s_names'=>$name,'emails' =>$email , 'addresses' =>$address, 'contact_nos' =>$phone, 'types' =>$job, 'job_types' =>$typevolunteer, 'dobs' =>$dob);

    	$res = \App\Stakeholders::insert($data_array_stake);
    	if($res){
    		echo "<script> alert('Data Inserted Successfully')</script>";
    	}

    	return view('new_stakeholder');
    }

}
