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
    function insert_organization(Request $req){
    	$name = $req->input('name');
    	$regnumber = $req->input('regnumber');
    	$phone = $req->input('phone');
    	$type = $req->input('type');
    	$address = $req->input('address');
    	$letter = $req->input('letter');

    	$data_array = array('registration_numbers'=>$regnumber,'o_names' =>$name ,'o_types' =>$type, 'o_addresses' =>$address, 'contact_nos' =>$phone, 'file_names' =>$letter);

    	$res = \App\Organizations::insert($data_array);

    	if($res){
    		echo "<script> alert('Data Inserted Successfully')</script>";
    	} 

    	return view('new_organization');



    }


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

    	return view('new_stakeholder');


    }

    function insert_donation(Request $req){
        $d_amounts = $req->input('d_amounts');
        $d_dates = $req->input('d_dates');
        $d_modes= $req->input('d_modes');
        
        $data_array_stake = array('d_amounts'=>$d_amounts,'d_dates' =>$d_dates , 'd_modes' =>$d_modes,);

        $res = \App\donations::insert($data_array_stake);

        return view('causes');


    }

}
