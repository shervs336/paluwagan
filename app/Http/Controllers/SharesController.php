<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Share;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SharesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage()
    {
        $users = User::with(['shares' => function($query){
          $query->orderBy('month');
        }])->get();

        return view('shares', [
          'users' => $users,
          'sharesGrandTotal' => Share::sum('amount')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        foreach($request->input('amount') as $userKey=>$user)
        {
          foreach($user as $month=>$amount){
            $share = Share::firstOrCreate(['user_id' => $userKey, 'month' => $month]);
            $share->where('user_id', '=', $userKey)
              ->where('month', '=', $month)
              ->update(['amount' => $amount]);
          }
        }

        return redirect()->route('dashboard');
    }

}
