<?php

namespace App\Http\Controllers\Evaluation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

Class EvaluationController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('pages.patient.index');
    // }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function initial()
    {
        return view('pages.evaluation.initial-evaluation');
    }


    public function balance() {
        return view('pages.evaluation.coordination-balance');
    }
}
