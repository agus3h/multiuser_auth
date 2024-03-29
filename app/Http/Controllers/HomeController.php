<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function index2()
    {
        return view('auth.admin');
    }
    public function index3()
    {
        return view('auth.superadmin');
    }
    public function index4()
    {
        return view('auth.siswa');
    }
}
