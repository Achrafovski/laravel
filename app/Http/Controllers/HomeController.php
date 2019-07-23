<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Model\Group;

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
        $groups = Auth::user()->groups()->paginate(5);

        return view('home', compact('groups',$groups));
    }
}
