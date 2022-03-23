<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

class EmailController extends Controller
{
    public function index(){
        
        return view('mail');
    }

    public function sendEmail(Request $req){
      
        $req->validate([
          'FromEmail' => 'required|email',
          'ToEmail' => 'required',
          'content' => 'required',
          
        ]);

        $data = [
             'FromEmail' => $req->FromEmail ,
             'ToEmail' => $req->ToEmail ,
             'content' => $req->content 
            ];

        $user['to'] = "shivk.v047@gmail.com";

        Mail::send('mailTemplate',$data, function($m) use ($data){
              $m->from($data['FromEmail']);
               $m->to($data['ToEmail']);
               $m->subject("this is subject line");

        });
        
        return back()->with(['message' => 'Email Sent Sucessfully']);

    }
}
