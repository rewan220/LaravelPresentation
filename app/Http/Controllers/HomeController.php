<?php

namespace App\Http\Controllers;

use App\Jobs\AddMail;
use Illuminate\Http\Request;
use App\Models\Advertising;
use Illuminate\Support\Facades\DB;
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

    
    public function handleAdmin()
    {
        return view('handleAdmin');
    } 


    //queue and jobs to send the mails to the ads users
    public function sendaddmail()
    {
        
 
        dispatch(new AddMail());
     return redirect(route('home'))->with('success','the job is running in the back end');        
        
        /*
        //if we want to chunk the job like sending 5 in every operation 
        $emails= Advertising::chunk(5,function($data){
            dispatch(new AddMail($data));

        });*/
        
    } 
}
