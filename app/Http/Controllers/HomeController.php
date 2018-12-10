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
        $meals = [
            [
                'name' => 'Zeljanica',
                'price' => '8'
            ],
            [
                'name' => 'Sirnica',
                'price' => '8'
            ],
            [
                'name' => 'Burek',
                'price' => '12'
            ],
            [
                'name' => 'Tikvenica',
                'price' => '8'
            ],
            [
                'name' => 'Krompirusa',
                'price' => '6'
            ]
        ];
        return view('home', compact('meals'));
    }
}
