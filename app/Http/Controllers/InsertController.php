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

    	$data_array = array('registration_number'=>$regnumber,'o_names' =>$name ,'o_type' =>$type, 'o_addresses' =>$address, 'contact_no' =>$phone, 'file_name' =>$letter);

    	$res = \App\Organizations::insert($data_array);

    	return redirect('neworganization');

	}
	function insert_member(Request $req){
    	$name = $req->input('name');
    	$email = $req->input('email');
    	$phone = $req->input('phone');
    	$dob = $req->input('dob');
    	$type = "member";
    	$address = $req->input('address');
    	$data_array = array('s_names' =>$name ,'types' =>$type, 'addresses' =>$address, 'contact_nos' =>$phone, 'emails'=>$email, 'dobs'=>$dob);

    	$res = \App\Stakeholders::insert($data_array);

    	return redirect('members/add');

    }

}
