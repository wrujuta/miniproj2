<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

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
        return view('home');
    }

    public function profile()
    {




        //$users = User::all();
        $users = User::where('id', 1)
            ->orderBy('name', 'desc')
            ->take(10)
            ->get();

        dd($users->count());

        return view('profile' , ['users' => $users ]);
    }
}



