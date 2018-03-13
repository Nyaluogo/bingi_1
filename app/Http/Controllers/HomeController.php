<?php

namespace Nyabingi\Http\Controllers;

use Illuminate\Http\Request;
use Nyabingi\Interest;
use Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function interest()
    {
        return view('interests');
    }

    public function postInterest(Request $request)
    {
        if($request->discover > 1)
        {
            return false;
        }

        if($request->other > 1)
        {
            return false;
        }

        if($request->buy > 1)
        {
            return false;
        }

        if($request->sell > 1)
        {
            return false;
        }

        if($request->promote > 1)
        {
            return false;
        }

        if($request->improve > 1)
        {
            return false;
        }

        Interest::create([
            'user_id' => Auth::id(),
            'discover' => $request->discover,
            'improve_skills' => $request->improve,
            'promote_work' => $request->promote,
            'sell_art' => $request->sell,
            'buy_art' => $request->buy,
            'other' => $request->other,
        ]);

        return redirect()->route('home');
    }

    public function notifications()
    {
        return view('notifications');
    }
}
