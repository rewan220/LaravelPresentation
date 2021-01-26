<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendingMail;
use Illuminate\Support\Facades\Auth;


class MailController extends Controller
    {
        public function index(){
            return view('Mail.index');
        }
         // ------------- [ Send email ] --------------------
         public function sendEmailToUser() {
    
    
            $to_email = Auth::user()->email;
    
            Mail::to($to_email)->send(new SendingMail);
    
            return view('home')->with('success','Thank you for getting in touch you will recieve an automatic email to confirm your Request');
    
        }
    }