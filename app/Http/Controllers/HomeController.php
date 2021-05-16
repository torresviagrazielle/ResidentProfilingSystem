<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Transaction;
use App\Models\Resident;
use App\Models\Document;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $residents = Resident::where('id','!=','')->orderBy('created_at','desc')->get();
        $count = Resident::where('lastname','!=','')->count();
        return view('welcome', compact('residents', 'count'));    
    }
}
