<?php

namespace App\Http\Controllers;

use App\Models\Advertising;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD

        $users = User::all();
        return view('Admin.index', ['users' => $users]);
=======
        
        $users = User::all() ;
        return view('Admin.index',['users'=>$users]);
>>>>>>> 657f72063665d84ad55de0a6a2e280a851895f98
    }

    // to show the users who like to revieve A
    public function showadduser()
    {
<<<<<<< HEAD
        $users = Advertising::all();
        return view('Admin.advertisment', ['users' => $users]);
=======
        $users = Advertising::all() ;
        return view('Admin.advertisment',['users'=>$users]);
>>>>>>> 657f72063665d84ad55de0a6a2e280a851895f98
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::find($id);
        $user->delete();
<<<<<<< HEAD
        $users = User::all();
        return redirect(route('admin'))->with('warning', 'user successfully Deleted.');
=======
        $users=User::all();
        return redirect(route('admin'))->with('warning','user successfully Deleted.') ;
>>>>>>> 657f72063665d84ad55de0a6a2e280a851895f98
    }
}
