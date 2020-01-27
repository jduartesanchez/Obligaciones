<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReporteTMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ReporteTM');    
    }
}