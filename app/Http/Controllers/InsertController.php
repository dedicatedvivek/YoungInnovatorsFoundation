<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use DB;

class InsertController extends Controller
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function insert_organisation(){
    	$name = $req->input('name');
    	$regnumber = $req->input('regnumber');
    	$phone = $req->input('phone');
    	$type = $req->input('type');
    	$address = $req->input('address');
    	$letter = $req->input('letter');

    }
}
