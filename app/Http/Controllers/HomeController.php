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

    public function fecha(){

        $hora = new DateTime("now", new DateTimeZone('America/Lima'));
        $hora->format('G');
        
        return $hora;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mihora=5;
        return view('home',["mihora"=>$mihora]);
    }
}
