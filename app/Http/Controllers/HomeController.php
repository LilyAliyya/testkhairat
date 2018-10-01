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
        $user = \Auth::user();
        $tanggungans = \Auth::user()->tanggungan;
        $bayarans = \Auth::user()->bayaran;
        //$baki = ((int)$bayarans->jumlah - (int)$bayarans->bayar);
        
        return view('home', compact('user', 'tanggungans', 'bayarans'));
    } 

    public function update()
    {
        $user = \Auth::user();
        $tanggungans = \Auth::user()->tanggungan;
        
        return view('auth.khairatkemaskini', compact('user', 'tanggungans'));
    } 

    
}
