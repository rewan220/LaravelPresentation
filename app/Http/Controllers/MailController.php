<?php

namespace App\Http\Controllers;
<<<<<<< HEAD

use Illuminate\Support\Facades\Mail;
use App\Mail\ReportFromUserMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index()
    {
        return view('Mail.index');
    }
    // ------------- [ Send email ] --------------------
    public function sendEmailToUser(Request $request)
    {

        $request->validate([
            'usercomment' => 'required',
        ]);

        $user = Auth::user();

        $user->comments()->create([
            'usercomment' => $request['usercomment'],
        ]);

        /* Comment::create([
            'user_id' => $user->id,
            'usercomment' => $request['usercomment'],
        ]) */

        Mail::to($user->email)->send(new ReportFromUserMail);

        return redirect(route('home'))->with('success', "$user->name Your report has been succesfully sent and you will recieve a confirm email in a minutes");
    }
}
=======
use Illuminate\Support\Facades\Mail;
use App\Mail\SendingMail;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class MailController extends Controller
    {
        public function index(){


            return view('Mail.index');
        }
         // ------------- [ Send email ] --------------------
         public function sendEmailToUser(Request $request ) {


            $request->validate([
                'message' => 'required',
            ]);
    
            $to_email = Auth::user()->email;
    
            Mail::to($to_email)->send(new SendingMail);
    
            return redirect(route('home'))->with('success','Your report has been succesfully sendet you recieve an confirm email in a minutes');
    
        }
    }
>>>>>>> 657f72063665d84ad55de0a6a2e280a851895f98
