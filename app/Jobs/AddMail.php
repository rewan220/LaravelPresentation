<?php

namespace App\Jobs;

<<<<<<< HEAD
use App\Mail\ReportFromUserMail;
=======
use App\Mail\SendingMail;
>>>>>>> 657f72063665d84ad55de0a6a2e280a851895f98
use App\Models\Advertising;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AddMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    

    public function __construct()
    {

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $users = Advertising::get();
        
        foreach ($users as $user) {

<<<<<<< HEAD
           Mail::to($user->email)->send(new ReportFromUserMail());
=======
           Mail::to($user->email)->send(new SendingMail());
>>>>>>> 657f72063665d84ad55de0a6a2e280a851895f98
        }   
    }
}