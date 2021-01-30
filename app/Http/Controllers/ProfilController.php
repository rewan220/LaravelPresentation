<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Profile.index')->with('user', User::all());
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
<<<<<<< HEAD
    public function update(Request $request )
    {
       $valdatedData = $request->validate([
=======
    public function update(Request $request , $id )
    {
        $request->validate([
>>>>>>> 657f72063665d84ad55de0a6a2e280a851895f98
            'about' => 'required',
            'age' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        $data =  $request->all();
<<<<<<< HEAD
        $user = User::find( Auth::user()->id);
        if ($request->hasfile('file')) {
            if ($user->picture != null) {
                Storage::disk('public')->delete($user->picture);
            }
            $image = $request->file->store('images', 'public');
            $valdatedData['picture']=$image;
            $user->picture = $valdatedData['picture'];
        };
        $user->update($valdatedData);
        
        return redirect(route('home'))->with('success','Profile successfully Updated.');
=======
        $user = User::find($id);
        $user->about = $request['about'];
        $user->age = $request['age'];
        $user->address = $request['address'];
        $user->phone = $request['phone'];
        $user->email = $request['email'];
        if ($request->hasfile('file')) {
            $photo_ex = $request->file->getClientOriginalExtension();
            $image = $request->file->storeAs('images',$user->id.'.'.$photo_ex, 'public');
            if ($user->picture != null) {

                Storage::disk('public')->delete($user->picture);
            }
            $user->picture = "storage/".$image;
        };
        $data=array('about'=>$user->about,"age"=>$user->age,"address"=>$user->address,"phone"=>$user->phone,"picture"=>$user->picture,"email"=>$user->email);
        DB::table('users')->where('id',$user->id)->update($data);
        
        return redirect(route('home'))->with('success','Profile successfully Updated.');

        /***
         * 
         * this is also another ways to save the data
        $user->fill($request->all());
        if ($request->hasfile('file')) {
            $image = 'storage/'.$request->file->store('profiles');
            $user->picture = $image;

            // return redirect(route('home'))->with('success','Profile successfully Updated.');
        }
                 **/
>>>>>>> 657f72063665d84ad55de0a6a2e280a851895f98
     
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
    }
}
