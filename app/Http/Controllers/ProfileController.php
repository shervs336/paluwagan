<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Storage;
use Auth;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        if($id != Auth::user()->id)
        {
          flash('You have no access to view this profile')->error();

          return redirect()->route('dashboard');
        }

        $user = User::find($id);

        return view('profile.show', ['user' => $user]);
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
        $user = User::find($id);
        $filename = "";

        if($id != Auth::user()->id)
        {
          flash('You have no access to view this profile')->error();

          return redirect()->route('dashboard');
        }

        if($request->file('image'))
        {
            $ext = explode(".", $request->file('image')->getClientOriginalName());
            $ext = $ext[count($ext) - 1];

            Storage::put('avatars/'.Auth::user()->id.'.'.$ext, file_get_contents($request->file('image')->getRealPath()));

            $filename = Auth::user()->id.'.'.$ext;
            $user->image = $filename;
        }

        $request = $request->all();

        if(isset($request['password']))
        {
            $user->password = bcrypt($request['password']);
        }

        $user->save();

        flash('You have successfully updated your profile.');

        return redirect()->route('profile.show', ['id' => $user->id]);


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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function image($id)
    {
        $user = User::find($id);

        $content = Storage::get('avatars/'.$user->image);

        return response($content)
            ->header('Content-Type', 'image/jpeg');
    }
}
