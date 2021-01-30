<?php

namespace App\Http\Controllers;

use App\Jobs\AddMail;
use Illuminate\Http\Request;
use App\Models\Advertising;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD

=======
>>>>>>> 657f72063665d84ad55de0a6a2e280a851895f98
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    //this is also a way to see if the  user is  an admin
    public function handleAdmin()
    {
        return view('handleAdmin');
<<<<<<< HEAD
    }
=======
    } 
>>>>>>> 657f72063665d84ad55de0a6a2e280a851895f98


    //queue and jobs to send the mails to the ads users
    public function sendaddmail()
    {
<<<<<<< HEAD


        dispatch(new AddMail());
        return redirect(route('home'))->with('success', 'the job is running in the back end');

=======
        
 
        dispatch(new AddMail());
     return redirect(route('home'))->with('success','the job is running in the back end');        
        
>>>>>>> 657f72063665d84ad55de0a6a2e280a851895f98
        /*
        //if we want to chunk the job like sending 5 in every operation 
        $emails= Advertising::chunk(5,function($data){
            dispatch(new AddMail($data));

        });*/
<<<<<<< HEAD
    }
=======
        
    } 
>>>>>>> 657f72063665d84ad55de0a6a2e280a851895f98
}
