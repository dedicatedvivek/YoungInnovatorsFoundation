<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
    public function send()
    {
    	Mail::send(['text'=>'mail'],['name','sarthak'],function($message){
    		$message->to('bhavinfriend65@gmail.com','To bhavin')->subject('test email');
    		$message->from('bhavinfriend65@gmail.com','bhavin');
    	});
    }
}
