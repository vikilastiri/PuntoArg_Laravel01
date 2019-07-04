<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attraction;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $attractions= Attraction::all()->shuffle()->take(5);
      // dd("home");
      //
         return view('home')->with('attractions', $attractions);
    }
    // public function showAttraction($id){
    //   $attraction= Attraction::find($id);
    //   $attraction->get();
    //     return view('home')->with('home', $attraction);
    // }
}
