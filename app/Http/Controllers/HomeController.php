<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
    }
}
