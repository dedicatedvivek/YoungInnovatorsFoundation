<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
   public function attachment_email(Request $req) {
   	$name = $req->input('name');
   	$typevolunteer = $req->input('typevolunteer');
   	$address = $req->input('address');
   	$phone = $req->input('phone');
      $data = array('html'=>"members.volunteer_notif");
      Mail::send('members.volunteer_notif', $data, function($message) {
         $message->to('bhavinfriend65@gmail.com', 'Tutorials Point')->subject
            ('Laravel Testing Mail with Attachment');
         // $message->attach('uploads\image.png');
         // $message->attach('uploads\test.txt');
         $message->from('bhavinfriend65@gmail.com','Bhavin Kothari');
      });
      echo "Email Sent with attachment. Check your inbox.";
   }
}
