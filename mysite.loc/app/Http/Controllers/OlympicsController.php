<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OlympicsController extends Controller
{
    public function index(){
        return view('Olympics/olympics');
    }

    public function add_application(){
        return view('Olympics/add_application_olympics');
    }
}
