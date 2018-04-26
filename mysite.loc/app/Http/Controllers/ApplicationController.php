<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function my_applications(){
        return view('Applications/my_applications');
    }
}
