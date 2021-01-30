<?php

namespace App\Http\Controllers;

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
