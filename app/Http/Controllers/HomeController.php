<?php

namespace App\Http\Controllers;

use App\Jobs\AddMail;
use Illuminate\Http\Request;
use App\Models\Advertising;

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
    public function sendaddmail()
    {
        

        $emailJob = new AddMail();
        dispatch($emailJob);
        /*
        $emails= Advertising::chunk(5,function($data){
            dispatch(new AddMail($data));

        });*/
        return redirect(route('home'))->with('success','the job is running in the back end');
    } 
}
