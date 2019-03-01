<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users\Profile;
use Illuminate\Support\Collection;

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
        $user_id = auth()->user()->id;
        $profile = Profile::where('user_id', $user_id)->first();
        if(is_null($profile)){
            return redirect()->route('profile.index');
        }
        
        return view('home');
    }
}
