<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attraction;
use App\Voucher;
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
      $attractions= Attraction::all()->shuffle()->take(6);
      $vouchers=Voucher::all();
        return view('home')->with('attractions', $attractions)->with('vouchers', $vouchers);
    }
    // public function showAttraction($id){
    //   $attraction= Attraction::find($id);
    //   $attraction->get();
    //     return view('home')->with('home', $attraction);
    // }
}
