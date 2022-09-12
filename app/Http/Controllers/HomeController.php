<?php

namespace App\Http\Controllers;
Use Redirect;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->u_type == "Coordinator"){
            return Redirect::to('/chome');
        }
        else if(auth()->user()->u_type == "Supervisor/Evaluator"){
            return Redirect::to('/evhome');
        }

        else if(auth()->user()->u_type == "Supervisor"){
            return Redirect::to('/svhome');
        }

        else if(auth()->user()->u_type == "Student")
        {
            return Redirect::to('/stdhome');
        }
    }

    public function sv() {
        return view('SvView');
    }

    public function ev() {
        return view('EView');
    }

    public function std() {
        return view('StdView');
    }

    public function coordinator() {
        return view('CView');
    }



}
